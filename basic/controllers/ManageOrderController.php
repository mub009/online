<?php
/**
* @author athirakrishnanp <athirakrishnanp@gmail.com> 
* @version 1.0
* @Created date:20/03/2017
*/

namespace app\controllers;
use yii;
use app\models\ManageOrder;
use yii\web\Controller;

/**
 * ManageOrderController implements the controller
 */
class ManageOrderController extends \yii\web\Controller
{
	/**
    * actionIndex its function and calling index page
    * @param no param
    * @return 
    */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
    * Getcustomer() for manage order
    * @param no param
    * @return no return value
    */
 	public function actionGetcustomer()
    {
        $model=new ManageOrder;
        $data=$model->getcustomerorderdetails();
        return $this ->render('display',['data'=>$data]);
       
    }

    
}
