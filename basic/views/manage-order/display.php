<?php
/**
* @author athirakrishnanp <athirakrishnanp@gmail.com> 
* @version 1.0
* @created date 20/03/2017
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\ArrayHelper;

$count=count($data);
?>

<h2>Order Details</h2><br>
<table class="table">
<tr><td>ID</td><td>Customer Name</td><td>Address</td><td>Phone</td><td>Status</td><td></td></tr>
<?php 
for($i=0;$i<$count;$i++)
{
?>
	<tr><td><?=$data[$i]['pk_int_order_id'];?></td>
	    <td><?=$data[$i]['vchr_name'];?></td>
	    <td><?=$data[$i]['text_address'];?></td>
	    <td><?=$data[$i]['int_mobile_number'];?></td>
	    <td><?=$data[$i]['vchr_status'];?></td>
	    <td><a href="#"><span class="glyphicon glyphicon-eye-open"></span></a></td>
	   


<?php	
}
?>

	</table>

