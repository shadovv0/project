<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Generation;

/**
 * GenerationSearch represents the model behind the search form of `app\models\Generation`.
 */
class GenerationSearch extends Generation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'model_id'], 'integer'],
            [['name', 'code', 'dt_start', 'dt_end',], 'safe'],
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
        $query = Generation::find()->joinWith(['model']);

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
            'generation.id' => $this->id,
            'generation.model_id' => $this->model_id,
            'generation.dt_start' => $this->dt_start,
            'generation.dt_end' => $this->dt_end,
        ]);

        $query->andFilterWhere(['like', 'generation.name', $this->name])
            ->andFilterWhere(['like', 'generation.code', $this->code]);

        return $dataProvider;
    }
}