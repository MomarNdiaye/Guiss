<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface ; 

/**
 * This is the model class for table "usysprofils".
 *
 * @property integer $IdUtilisateur
 * @property string $Utilisateur
 * @property string $Motdepasse
 * @property integer $IdResp
 * @property integer $IdAutoris
 * @property string $ConnectedUser
 *
 * @property Autorisations $idAutoris
 * @property Responsables $idResp
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface 
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usysprofils';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['Utilisateur', 'Motdepasse', 'IdAutoris'], 'required'],
            [['IdResp', 'IdAutoris'], 'integer'],
            [['Utilisateur', 'ConnectedUser'], 'string', 'max' => 50],
            [['Motdepasse'], 'string', 'max' => 100],
            [['Utilisateur'], 'unique'],
            [['IdAutoris'], 'exist', 'skipOnError' => true, 'targetClass' => Autorisations::className(), 'targetAttribute' => ['IdAutoris' => 'IdAutoris']],
            [['IdResp'], 'exist', 'skipOnError' => true, 'targetClass' => Responsables::className(), 'targetAttribute' => ['IdResp' => 'IdResp']],
        
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUtilisateur' => 'Id Utilisateur',
            'Utilisateur' => 'Utilisateur',
            'Motdepasse' => 'Motdepasse',
            'IdResp' => 'Id Resp',
            'IdAutoris' => 'Id Autoris',
            'ConnectedUser' => 'Connected User',
        ];
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
    public function getIdResp()
    {
        return $this->hasOne(Responsables::className(), ['IdResp' => 'IdResp']);
    }


     public static function findIdentity($id)
    {
        return static::findOne($id);
    }


      public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
    

    public static function findByUtilisateur($utilisateur){


        return $user = self::find()
            ->where([
                "Utilisateur" => $utilisateur
            ])
            ->one();
            if (!count($user)) {
                return null;
            }
            return new static($user);

    } 


      /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }


   

    public  function getId(){

        return $this->IdUtilisateur ; 
    }


    public  function getMotdepasse(){
       
        return $this->Motdepasse ; 
    }



    public function validateMotdepasse($Motdepasse){

        return $this->getMotdepasse() === sha1($Motdepasse) ;  
    }



}
