<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblSubcategory */

$this->title = 'Create Subcategory';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-subcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
