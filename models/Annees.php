<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "annees".
 *
 * @property integer $IdAnnee
 * @property string $Annee
 * @property integer $IdVerrou
 *
 * @property Verrou $idVerrou
 * @property Produits[] $produits
 */
class Annees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'annees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Annee'], 'required'],
            [['IdVerrou'], 'integer'],
            [['Annee'], 'string', 'max' => 4],
            [['Annee'], 'unique'],
            [['IdVerrou'], 'exist', 'skipOnError' => true, 'targetClass' => Verrou::className(), 'targetAttribute' => ['IdVerrou' => 'IdVerrou']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAnnee' => 'Id Annee',
            'Annee' => 'Annee',
            'IdVerrou' => 'Id Verrou',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVerrou()
    {
        return $this->hasOne(Verrou::className(), ['IdVerrou' => 'IdVerrou']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduits()
    {
        return $this->hasMany(Produits::className(), ['IdAnnee' => 'IdAnnee']);
    }
}
