<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sub_category".
 *
 * @property integer $pk_int_sub_category_id
 * @property string $vchr_sub_category
 * @property integer $fk_int_category_id
 *
 * @property TblCategory $fkIntCategory
 */
class TblSubCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sub_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_int_category_id'], 'integer'],
            [['vchr_sub_category'], 'string', 'max' => 200],
            [['fk_int_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCategory::className(), 'targetAttribute' => ['fk_int_category_id' => 'pk_int_category_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_int_sub_category_id' => 'ID',
            'vchr_sub_category' => 'Sub Category',
            'fk_int_category_id' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIntCategory()
    {
        return $this->hasOne(TblCategory::className(), ['pk_int_category_id' => 'fk_int_category_id']);
    }
}
