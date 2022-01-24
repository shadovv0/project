<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Modification;

/**
 * ModificationSearch represents the model behind the search form of `app\models\Modification`.
 */
class ModificationSearch extends Modification
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'generation_id', 'engine_type'], 'integer'],
            [['name', 'code', 'transmission'], 'safe'],
            [['engine_volume', 'power', 'price'], 'number'],
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
        $query = Modification::find()->joinWith(['generation']);

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
            'modification.id' => $this->id,
            'modification.generation_id' => $this->generation_id,
            'modification.engine_type' => $this->engine_type,
            'modification.engine_volume' => $this->engine_volume,
            'modification.power' => $this->power,
            'modification.price' => $this->price,
            'modification.transmission' => $this->transmission,
        ]);

        $query->andFilterWhere(['like', 'modification.name', $this->name])
            ->andFilterWhere(['like', 'modification.code', $this->code])
            ->andFilterWhere(['like', 'modification.transmission', $this->transmission]);

        return $dataProvider;
    }
}