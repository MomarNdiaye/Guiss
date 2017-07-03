<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indicateurs".
 *
 * @property integer $IdIndic
 * @property integer $OrdIndic
 * @property string $Indic
 * @property double $Cible
 * @property string $ObsIndic
 * @property integer $IdProd
 *
 * @property Produits $idProd
 * @property Suivi[] $suivis
 */
class Indicateurs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicateurs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrdIndic', 'IdProd'], 'integer'],
            [['Indic'], 'required'],
            [['Cible'], 'number'],
            [['ObsIndic'], 'string'],
            [['Indic'], 'string', 'max' => 255],
            [['IdProd'], 'exist', 'skipOnError' => true, 'targetClass' => Produits::className(), 'targetAttribute' => ['IdProd' => 'IdProd']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdIndic' => 'Id Indic',
            'OrdIndic' => 'Ord Indic',
            'Indic' => 'Indic',
            'Cible' => 'Cible',
            'ObsIndic' => 'Obs Indic',
            'IdProd' => 'Id Prod',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProd()
    {
        return $this->hasOne(Produits::className(), ['IdProd' => 'IdProd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuivis()
    {
        return $this->hasMany(Suivi::className(), ['IdIndic' => 'IdIndic']);
    }
}
