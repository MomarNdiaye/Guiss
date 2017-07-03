<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produits".
 *
 * @property integer $IdProd
 * @property integer $OrdProd
 * @property string $LibProd
 * @property integer $IdAnnee
 * @property integer $IdResp
 *
 * @property Indicateurs[] $indicateurs
 * @property Annees $idAnnee
 * @property Responsables $idResp
 */
class Produits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrdProd', 'LibProd', 'IdAnnee', 'IdResp'], 'required'],
            [['OrdProd', 'IdAnnee', 'IdResp'], 'integer'],
            [['LibProd'], 'string', 'max' => 255],
            [['IdAnnee'], 'exist', 'skipOnError' => true, 'targetClass' => Annees::className(), 'targetAttribute' => ['IdAnnee' => 'IdAnnee']],
            [['IdResp'], 'exist', 'skipOnError' => true, 'targetClass' => Responsables::className(), 'targetAttribute' => ['IdResp' => 'IdResp']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdProd' => 'Id Prod',
            'OrdProd' => 'Ord Prod',
            'LibProd' => 'Lib Prod',
            'IdAnnee' => 'Id Annee',
            'IdResp' => 'Id Resp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicateurs()
    {
        return $this->hasMany(Indicateurs::className(), ['IdProd' => 'IdProd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnnee()
    {
        return $this->hasOne(Annees::className(), ['IdAnnee' => 'IdAnnee']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdResp()
    {
        return $this->hasOne(Responsables::className(), ['IdResp' => 'IdResp']);
    }

    /**
     * @inheritdoc
     * @return ProduitsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProduitsQuery(get_called_class());
    }
}
