<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User; 

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $Utilisateur;
    public $Motdepasse;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['Utilisateur', 'Motdepasse'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['Motdepasse', 'validateMotdepasse'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validateMotdepasse($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser(); 

            if (!$user) {
                $this->addError($attribute,'probleme requete' );
            }


            if (!$user || !$user->validateMotdepasse($this->Motdepasse)) {
                $this->addError($attribute,'Verifier les informations saisies' );
            }
        }

        return true ; 
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[Utilisateur]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUtilisateur($this->Utilisateur);
        }

        return $this->_user;
    }
}
