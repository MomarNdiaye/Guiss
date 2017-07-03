<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indicateurs;

/**
 * IndicateursSearch represents the model behind the search form about `app\models\Indicateurs`.
 */
class IndicateursSearch extends Indicateurs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdIndic', 'OrdIndic', 'IdProd'], 'integer'],
            [['Indic', 'ObsIndic'], 'safe'],
            [['Cible'], 'number'],
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
        $query = Indicateurs::find();

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
            'IdIndic' => $this->IdIndic,
            'OrdIndic' => $this->OrdIndic,
            'Cible' => $this->Cible,
            'IdProd' => $this->IdProd,
        ]);

        $query->andFilterWhere(['like', 'Indic', $this->Indic])
            ->andFilterWhere(['like', 'ObsIndic', $this->ObsIndic]);

        return $dataProvider;
    }
}
