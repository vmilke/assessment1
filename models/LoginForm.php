<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

<<<<<<< HEAD
            if (!$user || !$user->validatePassword($this->password)) {	// здесь в логин-форм передаем текущий пароль 
=======
            if (!$user || !$user->validatePassword($this->password)) {
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
<<<<<<< HEAD
        }										// это время жизни cookes - 30 дней
												// если rememberMe не будет выбран в логин-форме, то при выходе 
												// из браузера удалятся cookes и все забудется
=======
        }
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
<<<<<<< HEAD
    public function getUser()	// возвращает объект моди User
    {
        if ($this->_user === false) {			// если параметр user еще не заполнен, то пытаемся
            	// найти по username которое забито в логин-форму 
//			$this->_user = User::findByUsername($this->username);
			$this->_user = Useridentity::findByUsername($this->username); // тк функция findByUsername
				// естьтолько в классе Useridentity
		}
=======
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e

        return $this->_user;
    }
}
