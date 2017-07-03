<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suivi".
 *
 * @property integer $IdSuivi
 * @property integer $IdIndic
 * @property double $ReaT1
 * @property double $ReaT2
 * @property double $ReaT3
 * @property double $ReaT4
 * @property string $Obs
 *
 * @property Indicateurs $idIndic
 */
class Suivi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suivi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdIndic'], 'required'],
            [['IdIndic'], 'integer'],
            [['ReaT1', 'ReaT2', 'ReaT3', 'ReaT4'], 'number'],
            [['Obs'], 'string', 'max' => 255],
            [['IdIndic'], 'exist', 'skipOnError' => true, 'targetClass' => Indicateurs::className(), 'targetAttribute' => ['IdIndic' => 'IdIndic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSuivi' => 'Id Suivi',
            'IdIndic' => 'Id Indic',
            'ReaT1' => 'Rea T1',
            'ReaT2' => 'Rea T2',
            'ReaT3' => 'Rea T3',
            'ReaT4' => 'Rea T4',
            'Obs' => 'Obs',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdIndic()
    {
        return $this->hasOne(Indicateurs::className(), ['IdIndic' => 'IdIndic']);
    }
}
