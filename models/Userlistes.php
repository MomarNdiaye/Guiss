<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userlistes".
 *
 * @property integer $IdUtilisateur
 * @property string $Utilisateur
 * @property string $ConnectedUser
 * @property string $Denom
 * @property string $Autorisations
 */
class Userlistes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userlistes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUtilisateur', 'Utilisateur', 'Denom'], 'required'],
            [['IdUtilisateur'], 'integer'],
            [['Utilisateur', 'ConnectedUser'], 'string', 'max' => 50],
            [['Denom', 'Autorisations'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUtilisateur' => 'Identifiant',
            'Utilisateur' => 'Utilisateur',
            'ConnectedUser' => 'Utilisateur',
            'Denom' => 'Responsable',
            'Autorisations' => 'Autorisations',
        ];
    }
}
