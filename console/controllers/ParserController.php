<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\imagine\Image;

use common\models\Post;

class ParserController extends Controller {

    public function actionIg($hashtag = 'DrOetker_Пасха') {
        $baseUrl = "https://www.instagram.com/explore/tags/$hashtag/?__a=1";
        $url = $baseUrl;
        $totalCount = 0;
        $count = 0;

        while(1) {
            $page = 1;
            $json = json_decode(file_get_contents($url));
            // echo '<pre>';
            // echo '</pre>';
            // echo '<br>';
            // echo 'page = '.$page;
            $page++;
            foreach ($json->graphql->hashtag->edge_hashtag_to_media->edges as $edge) {
                $node = $edge->node;
                $totalCount++;

                if(!Post::find()->where(['ig_post_id' => $node->id])->exists()) {
                    $post = new Post;
                    $post->ig_post_id = $node->id;
                    $post->ig_user_id = $node->owner->id;

                    if($post->save()) {
                        $this->saveImage($post, $node->display_url);

                        $count++;
                    }
                }
            }
            if(!$json->graphql->hashtag->edge_hashtag_to_media->page_info->has_next_page) break;
            $url = $baseUrl.'&max_id='.$json->graphql->hashtag->edge_hashtag_to_media->page_info->end_cursor;
        }

        if($count != 0) {
            Yii::info('Instagram parse. '.$hashtag.': new rows added - '.$count.'. Total rows - '.$totalCount, 'parser');
        } else {
            Yii::info('Instagram parse. '.$hashtag.': no new data. Total rows - '.$totalCount, 'parser');
        }
    }

    private function saveImage($post, $image) {
        $path = $post->imageSrcPath;
        if(!file_exists($path)) {
            mkdir($path, 0775, true);
        }
        $exp = explode('/', $image);
        $post->image = end($exp);
        $fileName = $path.$post->image;

        $ch = curl_init($image);
        $fp = fopen($fileName, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        
        $fileWidth = getimagesize($fileName)[0];
        $fileHeight = getimagesize($fileName)[1];

        $newWidth = Yii::$app->params['postImageSize']['width'];
        $newHeight = Yii::$app->params['postImageSize']['height'];

        // if($fileWidth > $fileHeight) {
        //     $newWidth = $newWidth * 2;
        //     $post->image_orientation = Post::IMAGE_HORIZONTAL;
        // } elseif($fileWidth == $fileHeight) {
        //     $post->image_orientation = Post::IMAGE_SQUARE;
        // } else {
        //     $newHeight = $newHeight * 2;
        //     $post->image_orientation = Post::IMAGE_VERTICAL;
        // }
        
        $post->image_orientation = Post::IMAGE_SQUARE;

        //ensureImageInterfaceInstance($fileName)->save($fileName);

        $exp = explode('.', $post->image);
        $thumbFileName = $path.$exp[0].'_thumb.'.$exp[1];

        Image::thumbnail($fileName, $newWidth, $newHeight)->save($thumbFileName);

        $post->save(false, ['image', 'image_orientation']);
    }
}