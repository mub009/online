<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $pk_int_product_id
 * @property string $vchr_product_name
 * @property string $vchr_pic
 * @property integer $int_price
 * @property string $text_product_description
 * @property string $dat_created_date
 * @property integer $fk_int_category_id
 *
 * @property TblOrderDetails[] $tblOrderDetails
 * @property TblCategory $fkIntCategory
 */
class TblProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['int_price', 'fk_int_category_id'], 'integer'],
            [['text_product_description'], 'string'],
            [['dat_created_date'], 'safe'],
            [['vchr_product_name', 'vchr_pic'], 'string', 'max' => 200],
            [['fk_int_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCategory::className(), 'targetAttribute' => ['fk_int_category_id' => 'pk_int_category_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_int_product_id' => 'Pk Int Product ID',
            'vchr_product_name' => 'Vchr Product Name',
            'vchr_pic' => 'Vchr Pic',
            'int_price' => 'Int Price',
            'text_product_description' => 'Text Product Description',
            'dat_created_date' => 'Dat Created Date',
            'fk_int_category_id' => 'Fk Int Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrderDetails()
    {
        return $this->hasMany(TblOrderDetails::className(), ['fk_int_product_id' => 'pk_int_product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIntCategory()
    {
        return $this->hasOne(TblCategory::className(), ['pk_int_category_id' => 'fk_int_category_id']);
    }
}
