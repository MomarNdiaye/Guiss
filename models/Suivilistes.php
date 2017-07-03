<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suivilistes".
 *
 * @property integer $IdSuivi
 * @property double $ReaT1
 * @property double $ReaT2
 * @property double $ReaT3
 * @property double $ReaT4
 * @property string $Obs
 * @property string $Indic
 */
class Suivilistes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suivilistes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdSuivi'], 'integer'],
            [['ReaT1', 'ReaT2', 'ReaT3', 'ReaT4'], 'number'],
            [['Indic'], 'required'],
            [['Obs', 'Indic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSuivi' => 'Identifiant',
            'ReaT1' => 'Realisations T1',
            'ReaT2' => 'Realisations T2',
            'ReaT3' => 'Realisations T3',
            'ReaT4' => 'Realisations T4',
            'Obs' => 'Observations',
            'Indic' => 'Indicateurs',
        ];
    }
}
