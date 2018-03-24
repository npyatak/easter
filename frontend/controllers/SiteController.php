<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use common\models\Product;
use common\models\Post;
use common\models\Recipe;
use common\models\Preview;
use common\models\Advice;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function beforeAction($action) {
        $products = Product::find()->all();
        $previews = Preview::find()->all();
        $this->view->params['products'] = $products;
        $this->view->params['previews'] = $previews;

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $recipiesType1 = Recipe::find()->where(['show_on_main' => 1, 'type' => 1])->limit(2)->all();
        $recipiesType2 = Recipe::find()->where(['show_on_main' => 1, 'type' => 2])->limit(2)->all();

        $advices = Advice::find()->where(['show_on_main' => 1])->all();
        
        return $this->render('index', [
            'recipiesType1' => $recipiesType1,
            'recipiesType2' => $recipiesType2,
            'advices' => $advices,
        ]);
    }

    public function actionDecor()
    {
        $advices = Advice::find()->all();

        return $this->render('decor', [
            'advices' => $advices,
        ]);
    }

    public function actionRecipe($alias)
    {
        $recipe = Recipe::find()->where(['alias' => $alias])->one();
        if($recipe === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('recipe', [
            'recipe' => $recipe,
        ]);
    }

    public function actionEastercake()
    {
        $recipiesType1 = Recipe::find()->where(['show_on_main' => 1, 'type' => 1])->all();
        $recipiesType2 = Recipe::find()->where(['show_on_main' => 1, 'type' => 2])->limit(3)->all();

        return $this->render('eastercake', [
            'recipiesType1' => $recipiesType1,
            'recipiesType2' => $recipiesType2,
        ]);
    }

    public function actionRecipies()
    {
        $recipiesType1 = Recipe::find()->where(['show_on_main' => 1, 'type' => 1])->limit(3)->all();
        $recipiesType2 = Recipe::find()->where(['show_on_main' => 1, 'type' => 2])->all();

        return $this->render('recipies', [
            'recipiesType1' => $recipiesType1,
            'recipiesType2' => $recipiesType2,
        ]);
    }

    public function actionParticipants()
    {
        $posts = Post::find()->where(['status' => Post::STATUS_ACTIVE])->all();

        return $this->render('participants', [
            'posts' => $posts,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
