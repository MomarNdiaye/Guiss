<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indicateurslistes;

/**
 * IndicateurslistesSearch represents the model behind the search form about `app\models\Indicateurslistes`.
 */
class IndicateurslistesSearch extends Indicateurslistes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdIndic', 'OrdIndic'], 'integer'],
            [['Indic', 'ObsIndic', 'LibProd'], 'safe'],
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
        $query = Indicateurslistes::find();

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
        ]);

        $query->andFilterWhere(['like', 'Indic', $this->Indic])
            ->andFilterWhere(['like', 'ObsIndic', $this->ObsIndic])
            ->andFilterWhere(['like', 'LibProd', $this->LibProd]);

        return $dataProvider;
    }
}
