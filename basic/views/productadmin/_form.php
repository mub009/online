<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vchr_product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vchr_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'int_price')->textInput() ?>

    <?= $form->field($model, 'text_product_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dat_created_date')->textInput() ?>

    <?= $form->field($model, 'fk_int_category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
