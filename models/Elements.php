<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "elements".
 *
 * @property integer $IdElement
 * @property string $Element
 *
 * @property Permissions[] $permissions
 */
class Elements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'elements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Element'], 'required'],
            [['Element'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdElement' => 'Id Element',
            'Element' => 'Element',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermissions()
    {
        return $this->hasMany(Permissions::className(), ['IdElement' => 'IdElement']);
    }
}
