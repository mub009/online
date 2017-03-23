<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ProductView;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return string
     */
    
    public function actionIndex()
    {
  
        $model=new ProductView();
        $data=$model->dbdata();
        return $this->render('index',['data'=>$data]);
    }

    

    /**
    *selects the single product details
    *displays the  details of a product in a page
    *int_product_id receives the id of the selected product
    *@return single-product page along with result data.
    */  
    public function actionSingleproduct()
    {
        $model= new ProductView;
        $data=$model->viewsingleproduct($id=2);
        return $this ->render('view',['data'=>$data]);
    }
}
