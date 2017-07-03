<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suivi;

/**
 * SuiviSearch represents the model behind the search form about `app\models\Suivi`.
 */
class SuiviSearch extends Suivi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdSuivi', 'IdIndic'], 'integer'],
            [['ReaT1', 'ReaT2', 'ReaT3', 'ReaT4'], 'number'],
            [['Obs'], 'safe'],
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
        $query = Suivi::find();

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
            'IdSuivi' => $this->IdSuivi,
            'IdIndic' => $this->IdIndic,
            'ReaT1' => $this->ReaT1,
            'ReaT2' => $this->ReaT2,
            'ReaT3' => $this->ReaT3,
            'ReaT4' => $this->ReaT4,
        ]);

        $query->andFilterWhere(['like', 'Obs', $this->Obs]);

        return $dataProvider;
    }
}
