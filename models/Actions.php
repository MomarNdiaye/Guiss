<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actions".
 *
 * @property integer $IdAction
 * @property string $LibAction
 *
 * @property Permissions[] $permissions
 */
class Actions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['LibAction'], 'required'],
            [['LibAction'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAction' => 'Id Action',
            'LibAction' => 'Lib Action',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermissions()
    {
        return $this->hasMany(Permissions::className(), ['IdAction' => 'IdAction']);
    }
}
