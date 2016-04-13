<?php

namespace common\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Goods;

/**
 * GoodsSearch represents the model behind the search form about `common\models\Goods`.
 */
class GoodsSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_goods', 'sale', 'bye'], 'integer'],
            [['region', 'town', 'main_img', 'mini_img', 'prise', 'categories', 'tovar', 'properties', 'discription', 'pay', 'delivery', 'phone', 'contacts', 'visible', 'hot'], 'safe'],
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
        $query = Goods::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_goods' => $this->id_goods,
            'sale' => $this->sale,
            'bye' => $this->bye,
        ]);

        $query->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'town', $this->town])
            ->andFilterWhere(['like', 'main_img', $this->main_img])
            ->andFilterWhere(['like', 'mini_img', $this->mini_img])
            ->andFilterWhere(['like', 'prise', $this->prise])
            ->andFilterWhere(['like', 'categories', $this->categories])
            ->andFilterWhere(['like', 'tovar', $this->tovar])
            ->andFilterWhere(['like', 'properties', $this->properties])
            ->andFilterWhere(['like', 'discription', $this->discription])
            ->andFilterWhere(['like', 'pay', $this->pay])
            ->andFilterWhere(['like', 'delivery', $this->delivery])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'visible', $this->visible])
            ->andFilterWhere(['like', 'hot', $this->hot]);

        return $dataProvider;
    }
}
