<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "responsables".
 *
 * @property integer $IdResp
 * @property string $Denom
 *
 * @property Produits[] $produits
 * @property Usysprofils[] $usysprofils
 */
class Responsables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'responsables';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Denom'], 'required'],
            [['Denom'], 'string', 'max' => 255],
            [['Denom'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdResp' => 'Id Resp',
            'Denom' => 'Denom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduits()
    {
        return $this->hasMany(Produits::className(), ['IdResp' => 'IdResp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsysprofils()
    {
        return $this->hasMany(Usysprofils::className(), ['IdResp' => 'IdResp']);
    }
}
