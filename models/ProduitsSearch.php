<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery; 
use yii\db\Query; 
use app\models\Produits;
use app\models\Responsables; 
use app\models\Annees;

/**
 * ProduitsSearch represents the model behind the search form about `app\models\Produits`.
 */
class ProduitsSearch extends Produits 
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdProd', 'OrdProd', 'IdAnnee', 'IdResp'], 'integer'],
            [['LibProd'], 'safe'],
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
        $query = Produits::find();

            
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
            'IdProd' => $this->IdProd,
            'OrdProd' => $this->OrdProd,
            'IdAnnee' => $this->IdAnnee,
            'IdResp' => $this->IdResp,
        ]);

        $query->andFilterWhere(['like', 'LibProd', $this->LibProd]);



        return $dataProvider;
    }
}
