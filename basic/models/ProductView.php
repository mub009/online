<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Log is the model behind the login.
 */
class ProductView extends Model
{
  

  public function dbdata()
   {
        return $data = Yii::$app->db->createCommand("select vchr_product_name,vchr_pic from tbl_product")->queryAll();
   }

   public function viewsingleproduct($id)
   {
        return $data = Yii::$app->db->createCommand("select * from tbl_product where pk_int_product_id='$id' ")->queryAll();
   }


}
?>