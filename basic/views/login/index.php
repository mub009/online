<?php
/**
* @author rufaida p
* @version 1.0
* @created date : 15/03/2017
* @modified date : 16/03/2017
*/

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="height:330px;width:500px;border:2px solid #13164E;text-align:center;margin-left:300px">
<h2 style="align:center">Login</h2><br><br>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password')->passwordInput();?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>