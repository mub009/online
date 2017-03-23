<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblProduct */

$this->title = $model->pk_int_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_int_product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_int_product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pk_int_product_id',
            'vchr_product_name',
            'vchr_pic',
            'int_price',
            'text_product_description:ntext',
            'dat_created_date',
            'fk_int_category_id',
        ],
    ]) ?>

</div>
