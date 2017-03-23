<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TblCategory;


/* @var $this yii\web\View */
/* @var $model app\models\TblSubcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-subcategory-form">

    <?php $form = ActiveForm::begin(); ?>

<?php

              
               $categoryList=ArrayHelper::map(TblCategory::find()->asArray()->all(), 'pk_int_category_id', 'vchr_category');

                echo $form->field($model, 'fk_int_category_id')->dropDownList($categoryList); 

?> 

    <?= $form->field($model, 'vchr_sub_category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
