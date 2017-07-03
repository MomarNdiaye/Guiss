<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "verrou".
 *
 * @property integer $IdVerrou
 * @property string $Verrou
 *
 * @property Annees[] $annees
 */
class Verrou extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'verrou';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdVerrou', 'Verrou'], 'required'],
            [['IdVerrou'], 'integer'],
            [['Verrou'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdVerrou' => 'Id Verrou',
            'Verrou' => 'Verrou',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnnees()
    {
        return $this->hasMany(Annees::className(), ['IdVerrou' => 'IdVerrou']);
    }
}
