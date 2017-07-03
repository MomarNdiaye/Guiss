<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autorisations".
 *
 * @property integer $IdAutoris
 * @property string $Autorisations
 *
 * @property Permissions[] $permissions
 * @property Usysprofils[] $usysprofils
 */
class Autorisations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autorisations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdAutoris'], 'required'],
            [['IdAutoris'], 'integer'],
            [['Autorisations'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAutoris' => 'Id Autoris',
            'Autorisations' => 'Autorisations',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermissions()
    {
        return $this->hasMany(Permissions::className(), ['IdAutoris' => 'IdAutoris']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsysprofils()
    {
        return $this->hasMany(Usysprofils::className(), ['IdAutoris' => 'IdAutoris']);
    }
}
