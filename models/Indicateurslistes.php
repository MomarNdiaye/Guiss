<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indicateurslistes".
 *
 * @property integer $IdIndic
 * @property integer $OrdIndic
 * @property string $Indic
 * @property string $ObsIndic
 * @property double $Cible
 * @property string $LibProd
 */
class Indicateurslistes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicateurslistes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdIndic', 'Indic', 'LibProd'], 'required'],
            [['IdIndic', 'OrdIndic'], 'integer'],
            [['ObsIndic'], 'string'],
            [['Cible'], 'number'],
            [['Indic', 'LibProd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdIndic'=>'Identifiant',
            'OrdIndic'=> 'Ordre',
            'Indic'=>'Indicateurs',
            'ObsIndic'=>'Obsservations',
            'Cible'=>'Cible',
            'LibProd'=>'Libellé',
        ];
    }
}
