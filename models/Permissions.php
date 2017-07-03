<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "permissions".
 *
 * @property integer $IdAllowDeny
 * @property string $allowdeny
 * @property integer $IdAutoris
 * @property integer $IdAction
 * @property integer $IdElement
 *
 * @property Actions $idAction
 * @property Autorisations $idAutoris
 * @property Elements $idElement
 */
class Permissions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'permissions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdAutoris', 'IdAction', 'IdElement'], 'integer'],
            [['IdAction', 'IdElement'], 'required'],
            [['allowdeny'], 'string', 'max' => 50],
            [['IdAction'], 'exist', 'skipOnError' => true, 'targetClass' => Actions::className(), 'targetAttribute' => ['IdAction' => 'IdAction']],
            [['IdAutoris'], 'exist', 'skipOnError' => true, 'targetClass' => Autorisations::className(), 'targetAttribute' => ['IdAutoris' => 'IdAutoris']],
            [['IdElement'], 'exist', 'skipOnError' => true, 'targetClass' => Elements::className(), 'targetAttribute' => ['IdElement' => 'IdElement']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAllowDeny' => 'Id Allow Deny',
            'allowdeny' => 'Allowdeny',
            'IdAutoris' => 'Id Autoris',
            'IdAction' => 'Id Action',
            'IdElement' => 'Id Element',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAction()
    {
        return $this->hasOne(Actions::className(), ['IdAction' => 'IdAction']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAutoris()
    {
        return $this->hasOne(Autorisations::className(), ['IdAutoris' => 'IdAutoris']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdElement()
    {
        return $this->hasOne(Elements::className(), ['IdElement' => 'IdElement']);
    }
}
