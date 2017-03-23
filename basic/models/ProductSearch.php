<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblProduct;

/**
 * ProductSearch represents the model behind the search form about `app\models\TblProduct`.
 */
class ProductSearch extends TblProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_int_product_id', 'int_price', 'fk_int_category_id'], 'integer'],
            [['vchr_product_name', 'vchr_pic', 'text_product_description', 'dat_created_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblProduct::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pk_int_product_id' => $this->pk_int_product_id,
            'int_price' => $this->int_price,
            'dat_created_date' => $this->dat_created_date,
            'fk_int_category_id' => $this->fk_int_category_id,
        ]);

        $query->andFilterWhere(['like', 'vchr_product_name', $this->vchr_product_name])
            ->andFilterWhere(['like', 'vchr_pic', $this->vchr_pic])
            ->andFilterWhere(['like', 'text_product_description', $this->text_product_description]);

        return $dataProvider;
    }
}
