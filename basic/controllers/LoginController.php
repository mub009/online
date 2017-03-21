<?php
/**
* @author rufaida p
* @version 1.0
* @created date : 15/03/2017
* @modified date : 16/03/2017
*/
namespace app\controllers;
use yii;
use app\models\Log;
use app\models\User;
use \yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
/**
 * LoginController implements the controller
 */
class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
   /**
    * Shows login function
    * @param no param
    * @return date
    */ 
    
    public function actionLogin()
    {

    	$model=new Log;
    	if($model->load(Yii::$app->request->post()) && $model->validate())
    	{
    		$data=$model->user($model->username,$model->password);
            return $this->render('display',['data'=>$data]);
    	}
    	else
    	{
    		
    		return $this->render('index',['model'=>$model]);
    	}

    }

}
