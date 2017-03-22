<?php
/**
* @author athirakrishnanp <athirakrishnanp@gmail.com> 
* @version 1.0
* @Created date:20/03/2017
*/
namespace app\models;
use Yii;
use yii\base\Model;

/**
* function getcustomerdetails() for retrieving customer details from database
* @param no param
* @return no return value
*/
class ManageOrder extends Model
{
	public function getcustomerorderdetails()
	{
        return $data=Yii::$app->db->createCommand("SELECT pk_int_order_id,vchr_name,text_address,int_mobile_number,vchr_status from tbl_order JOIN tbl_user ON tbl_order.fk_int_user_id=tbl_user.pk_int_user_id JOIN tbl_status ON tbl_status.pk_int_status_id=tbl_order.fk_int_status_id")->queryAll();
   
	}

	
}
?>