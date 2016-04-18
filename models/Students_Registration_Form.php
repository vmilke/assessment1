<?php
namespace app\models;

use Yii;
use yii\base\Model;

class Students_Registration_Form extends Model 
{
	public $name;
	public $surname;
	public $email;
<<<<<<< HEAD
	public $login;
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
	public $password;

	public function rules()		// данное правило описывает тип ожидаемых данных, а
								// также необходимо их заполнять или нет
    {
        return [				// возвращаем массив с правилами проверки(валидации) формы
<<<<<<< HEAD
            [['name', 'surname', 'email', 'login', 'password'], 'required'	// все эти поля должны быть ОБЯЗАТЕЛЬНО
			// это сообщение под полем в случае неккоректного ввода поля name
			//'message' => 'The name you have entered has not been recognised, please try again.' 
			],	
//			['email', 'unique', 'message' => 'This email has been occupied'],
//			['login', 'unique', 'message' => 'This login has been occupied'],
=======
            [['name', 'surname', 'email', 'password'], 'required'	// все эти поля должны быть ОБЯЗАТЕЛЬНО
			// это сообщение под полем в случае неккоректного ввода поля name
			//'message' => 'The name you have entered has not been recognised, please try again.' 
			],	
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            ['email', 'email']					// поле 'email' должно быть типа email
        ];
    }

}

?>