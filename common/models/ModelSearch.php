<?php

namespace common\models;

use yii\base\Model as BaseModel;
use yii\data\ActiveDataProvider;
use common\models\Model;

/**
 * ModelSearch represents the model behind the search form of `app\models\Model`.
 */
class ModelSearch extends Model
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'brand_id', 'sort'], 'integer'],
            [['name', 'code', 'class'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Model::find()->joinWith(['brand']);

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
            'model.id' => $this->id,
            'model.brand_id' => $this->brand_id,
            'sort' => $this->sort,
        ]);

        $query->andFilterWhere(['like', 'model.name', $this->name])
            ->andFilterWhere(['like', 'model.code', $this->code])
            ->andFilterWhere(['like', 'model.class', $this->class]);

        return $dataProvider;
    }
}