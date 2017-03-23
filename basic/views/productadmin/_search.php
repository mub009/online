<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_int_product_id') ?>

    <?= $form->field($model, 'vchr_product_name') ?>

    <?= $form->field($model, 'vchr_pic') ?>

    <?= $form->field($model, 'int_price') ?>

    <?= $form->field($model, 'text_product_description') ?>

    <?php // echo $form->field($model, 'dat_created_date') ?>

    <?php // echo $form->field($model, 'fk_int_category_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
