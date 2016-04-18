<?php
namespace app\models;

use Yii;
use yii\base\Model;

class Lecturers_Administrators_Registration_Form extends Model 
{

	public $title;
	public $profession;
	public $name;
	public $surname;
	public $email;
	public $login;
	public $password;

	public function rules()		// данное правило описывает тип ожидаемых данных, а
								// также необходимо их заполнять или нет
    {
        return [				// возвращаем массив с правилами проверки(валидации) формы
            [['title', 'profession', 'name', 'surname', 'email', 'login', 'password'], 'required'	// все эти поля должны быть ОБЯЗАТЕЛЬНО заполнены
			// это сообщение под полем в случае неккоректного ввода поля name
			//'message' => 'The name you have entered has not been recognised, please try again.' 
			],	
<<<<<<< HEAD
//			['email', 'unique', 'message' => 'This email has been occupied'],
//			['login', 'unique', 'message' => 'This login has been occupied'],
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            ['email', 'email']					// поле 'email' должно быть типа email
        ];
    }

}

?>