<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use common\models\Product;
use common\models\Post;
use common\models\Recipe;
use common\models\Preview;
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
        $recipies = Recipe::find()->where(['show_on_main' => 1])->limit(2)->all();
        
        return $this->render('index', [
            'recipies' => $recipies,
        ]);
    }

    public function actionPage1()
    {
        return $this->render('page1');
    }

    public function actionDecor()
    {
        return $this->render('decor');
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
        return $this->render('eastercake');
    }

    public function actionParticipants()
    {
        return $this->render('participants');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
