<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblSubcategory */

$this->title = 'Update Tbl Subcategory: ' . $model->pk_int_sub_category_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_int_sub_category_id, 'url' => ['view', 'id' => $model->pk_int_sub_category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-subcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
