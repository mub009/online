<?php
/**
* @author rufaida p
* @version 1.0
* @created date : 15/03/2017
* @modified date : 16/03/2017
*/
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Log is the model behind the login.
 */
class Log extends Model
{
    public $username;
    public $password;
    /**
    * function rulres() for validation 
    */
   public function rules()
    {
        return [
           [['username','password'],'required'],
        ];
    }

/**
 * function user() for comparing date from interface and  from database 
 */

  public function user($username,$password)
   {
        return $data = Yii::$app->db->createCommand("select int_mobile_number,Vchr_password from tbl_user where int_mobile_number='$username' and Vchr_password='$password'")->queryAll();
   }


}
