<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sample;

/**
 * SampleSearch represents the model behind the search form about `app\models\Sample`.
 */
class SampleSearch extends Sample
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'goodness', 'rank'], 'integer'],
            [['thought', 'censorship', 'occurred'], 'safe'],
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
        $query = Sample::find();

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
            'id' => $this->id,
            'goodness' => $this->goodness,
            'rank' => $this->rank,
            'occurred' => $this->occurred,
        ]);

        $query->andFilterWhere(['like', 'thought', $this->thought])
            ->andFilterWhere(['like', 'censorship', $this->censorship]);

        return $dataProvider;
    }
}
