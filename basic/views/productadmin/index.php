<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_int_product_id',
            'vchr_product_name',
            'vchr_pic',
            'int_price',
            'text_product_description:ntext',
            // 'dat_created_date',
            // 'fk_int_category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
