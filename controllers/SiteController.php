<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;	// подключаем для защиты наших данных
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
// use app\models\StudentsregForm;		// создаем наше пространство имен для тестовой формы регистрации - из видеокурса по Yii
use app\models\Students_Registration_Form;		// создаем наше пространство имен для формы регистрации студентов
use app\models\Lecturers_Administrators_Registration_Form;		// создаем наше пространство имен для формы регистрации лекторов и администраторов
use app\models\Students;			// подключаем класс Students
use app\models\Modules_classes;			// подключаем класс Modulesclasses
use app\models\Lecturers_admins;	// подключаем класс Lecturers_admins
<<<<<<< HEAD
use app\models\Users;			// подключаем класс Users
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
use yii\data\Pagination;		// подключаем класс Pagination - для вывода прокрутки страниц


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

	// Далее идут МЕТОДы - действия (action) созданные мною
	public function actionLetter($message = 'Hellow World!')			// вызывает страницу с Letter, выводящую сообщения
    {
        return $this->render('letter',			// letter - это файл - представление из папки views
			array('message' => $message)		// в качестве массива передаем все что мы хотим передать на страницу
												// в Yii фреймворке массив можно было бы написать так:   ['message' => $message]
		);	
    }

/*	public function actionStudentsregform() {	// создаем некое новое ТЕСТОВОЕ действие - пример из курса про Yii
		$studentsregForm = new StudentsregForm();	// создаем новый объект studentsregForm - форму
		
		// принимаем и обрабатываем данные из заполненной формы
		if($studentsregForm->load(Yii::$app->request->post()) 	// в форму studentsregForm загружаем массив данных, полученных через post запрос
															// это стандартный текст - просто копируем
		  && $studentsregForm->validate()	// проверяем форму studentsregForm. Тоже стандартный текст
		  )
		{	// сюда попадаем если форма отправлена и заполнена правильно - см.условия для if
			// считаем переменные name5 и email5 из полей name и email. Далее эти переменные будем записывать в базу данных
			$name5 = Html::encode($studentsregForm->name);	// Html::encode() - заменяет сущности(те шифрует) данные для безопасности
			$email5 = Html::encode($studentsregForm->email);
		}
		else {
			// если форма не была отправлена или была заполнена некоррктно, то присваиваем пустые значения
			$name5 = '';
			$email5 = '';
		}
		return $this->render('studentsregform',	// studentsregform - это файл - представление из папки views
			['studentsregform' => $studentsregForm,	// в качестве массива передаем все что мы хотим передать на страницу
			// это печать полученных значений - когда буду записывать в базу данных, возможно эти две строчки можно убрать
			'name' => $name5,
			'email' => $email5
			]
		);
	}
*/

	public function actionStudentsregistrationform() {	// создаем форму регистрации студентов
		$students_registration_Form = new Students_Registration_Form();	// создаем новый объект students_registration_Form - форму

		// принимаем и обрабатываем данные из заполненной формы
		if($students_registration_Form->load(Yii::$app->request->post()) 	// в форму students_registration_Form загружаем массив данных, полученных через post запрос
															// это стандартный текст - просто копируем
		  && $students_registration_Form->validate()	// проверяем форму students_registration_Form. Тоже стандартный текст
		  )
		{	// сюда попадаем если форма отправлена и заполнена правильно - см.условия для if
			// считаем переменные name5, surname5, email5 и password5 из полей name, surname, email и password. Далее эти переменные будем записывать в базу данных
			$name5 		= Html::encode( trim($students_registration_Form->name) );	// Html::encode() - заменяет сущности(те шифрует) данные для безопасности
														// Функция trim()удаляет пробелы и прочие служебные символы в начале и конце текстовой строки 
			$surname5 	= Html::encode( trim($students_registration_Form->surname) );
			$email5 	= Html::encode( trim($students_registration_Form->email) );
<<<<<<< HEAD
			$login5 	= Html::encode( trim($students_registration_Form->login) );
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
			$password5 	= md5($students_registration_Form->password);	// хэшируем пароль

		// Запоминаем введенные в форму данные в таблицу students
			$students = new Students();	// создаем объект для записи в таблицу students
			$students->name = $name5;
			$students->surname = $surname5;
			$students->email_st = $email5;
<<<<<<< HEAD
			$students->login = $login5;
			$students->password = $password5;
			$students->regdate = time();
			$students->save();
			
		// Запоминаем введенные в форму данные в таблицу users для дальнейшей авторизации и идентификации
			$users = new Users();	// создаем объект user для записи в таблицу students
			$users->username = $login5;	
			$users->password = $password5;
		// Запоминаем статус - student для разграничения прав доступа	
			$users->accesstoken = 'student';
			$users->save();
			
=======
			$students->password = $password5;
			$students->regdate = time();
			$students->save();
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
		}
		else {
			// если форма не была отправлена или была заполнена некоррктно, то присваиваем пустые значения
			$name5 		= '';
			$surname5 	= '';
			$email5 	= '';
<<<<<<< HEAD
			$login5		= '';
			$password5	= '';

			// ОБРАБОТКА ОШИБОК
			// выводим сообщение об ошибке
//			Yii::$app->session->setFlash('error','This is registration error. Please try to change your login and/or password.');
//			Yii::error('Registration error'); // пишем ошибку в журнал
//			return $this->refresh();	// обновляем текущую страницу
			
		}
		return $this->render('studentsregistrationform',	// studentsregistrationform - это файл - представление из папки views
			['studentsregistrationform' => $students_registration_Form,	// в качестве массива передаем все что мы хотим передать на страницу
			// это печать полученных значений - когда буду записывать в базу данных, возможно эти две строчки убрать
			'name' => $name5,
			'surname' => $surname5,
			'email' => $email5,
			'login' => $login5,
=======
			$password5	= '';
		}
		return $this->render('studentsregistrationform',	// studentsregistrationform - это файл - представление из папки views
			['studentsregistrationform' => $students_registration_Form,	// в качестве массива передаем все что мы хотим передать на страницу
			// это печать полученных значений - когда буду записывать в базу данных, возможно эти две строчки можно убрать
			'name' => $name5,
			'surname' => $surname5,
			'email' => $email5,
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
			'password' => $password5
			]
		);
	}

	public function actionLecturersadministratorsregistrationform() {	// создаем форму регистрации лекторов и администраторов
		$lecturers_administrators_registration_Form = new Lecturers_Administrators_Registration_Form();	// создаем новый объект lecturers_administrators_registration_Form - форму
		
		// принимаем и обрабатываем данные из заполненной формы
		if($lecturers_administrators_registration_Form->load(Yii::$app->request->post()) 	// в форму lecturers_administrators_registration_Form загружаем массив данных, полученных через post запрос
															// это стандартный текст - просто копируем
		  && $lecturers_administrators_registration_Form->validate()	// проверяем форму lecturers_administrators_registration_Form. Тоже стандартный текст
		  )
		{	// сюда попадаем если форма отправлена и заполнена правильно - см.условия для if
			// считаем переменные title5, profession5, name5, surname5, email5, login5 и password5 из полей title, profession, name, surname, email, login и password. Далее эти переменные будем записывать в базу данных
			$title5 	= Html::encode($lecturers_administrators_registration_Form->title);	// Html::encode() - заменяет сущности(те шифрует) данные для безопасности
			$profession5 = Html::encode($lecturers_administrators_registration_Form->profession);
														// Функция trim()удаляет пробелы и прочие служебные символы в начале и конце текстовой строки 
			$name5 		= Html::encode( trim($lecturers_administrators_registration_Form->name) );
			$surname5 	= Html::encode( trim($lecturers_administrators_registration_Form->surname) );
			$email5 	= Html::encode( trim($lecturers_administrators_registration_Form->email) );
			$login5 	= Html::encode( trim($lecturers_administrators_registration_Form->login) );
			$password5 	= md5($lecturers_administrators_registration_Form->password);	// хэшируем пароль

		// Запоминаем введенные в форму данные в таблицу lecturers_admins
			$lecturers_admins = new Lecturers_admins();	// создаем объект для записи в таблицу lecturers_admins
			$lecturers_admins->title 		= $title5;
			$lecturers_admins->profession 	= $profession5;
			$lecturers_admins->name 		= $name5;
			$lecturers_admins->surname 		= $surname5;
			$lecturers_admins->email_la 	= $email5;
			$lecturers_admins->login 		= $login5;
			$lecturers_admins->password 	= $password5;
			$lecturers_admins->regdate 		= time();	// функция time() возвращает текущую дату в секундах с 01.01.1970
			$lecturers_admins->save();
<<<<<<< HEAD
			
		// Запоминаем введенные в форму данные в таблицу users для дальнейшей авторизации и идентификации
			$users = new Users();	// создаем объект user для записи в таблицу students
			$users->username = $login5;	
			$users->password = $password5;
		// Запоминаем статус - $profession5 (lecturer OR administrator) для разграничения прав доступа	
			$users->accesstoken = $profession5;
			$users->save();
			
		}
		else {
			// если форма не была отправлена или была заполнена некоррктно, то присваиваем пустые значения
			// ЗДЕСЬ НАДО ВВЕСТИ ОБРАБОТКУ ОШИБОК
=======
		}
		else {
			// если форма не была отправлена или была заполнена некоррктно, то присваиваем пустые значения
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
			$title5 		= '';
			$profession5 	= '';
			$name5 			= '';
			$surname5 		= '';
			$email5 		= '';
			$login5 		= '';
			$password5		= '';
		}
		return $this->render('lecturersadministratorsregistrationform',	// lecturersadministratorsregistrationform - это файл - представление из папки views
			['lecturersadministratorsregistrationform' => $lecturers_administrators_registration_Form,	// в качестве массива передаем все что мы хотим передать на страницу
			// это печать полученных значений - когда буду записывать в базу данных, возможно эти две строчки можно убрать
			'title' => $title5,
			'profession' => $profession5,
			'name' => $name5,
			'surname' => $surname5,
			'email' => $email5,
			'login' => $login5,
			'password' => $password5
			]
		);
	}

	public function actionStudents()	// вызывает страницу с таблицей Students из базы данных
    {
		// Класс Students - это потомок ActiveRecord, следовательно можем использовать его методы, 
		// в частности find() - этот метод получает объект, который позволяет непосредственно обращаться к базе данных
		// all() - вывод всех записей из этой таблицы
//		$students5 = Students::find()->all();	// используем для вывода всей таблицы
//		$students5 = Students::find()->all()->offset()->limit()->orderBy();	// это все можно использовать в любой последовательности
//		$students5 = Students::find()->where(['name' => 'Michael'])->orderBy("regdate")->all(); // пример: быбираем из таблицы students все записи где name='Michael' и сортируем по дате регистрации 
        
		$students5 = Students::find();

		$pagination5 = new Pagination([		// этот объект создает стрелки прокрутки страниц при выводе больших таблиц
			'defaultPageSize' => 8, 		// сколько записей на одной странице
			'totalCount' => $students5->count()		// сколько всего записей - считем функцией count()
		]);
	
		// перезаписываем в массив $students5 как и какие именно записи мы будем получать из базы данных
		$students5 = $students5->offset($pagination5->offset) // сам извлечет с нужным смещением определенное число записей
							   ->limit($pagination5->limit)
							   ->orderBy("surname")				// сортируем список студентов по фамилиям
							   ->all();

		return $this->render('students', [	// students - это файл - представление из папки views
			'students' => $students5,		// в качестве массива передаем все что мы хотим передать на страницу (в файл-представление)
			'pagination' => $pagination5		
		]);	
    }

	public function actionModulesclasses()	// вызывает страницу с таблицей modules_classes из базы данных
    {
		// Класс Modules_classes - это потомок ActiveRecord, следовательно можем использовать его методы, 
		// в частности find() - этот метод получает объект, который позволяет непосредственно обращаться к базе данных
		// all() - вывод всех записей из этой таблицы
		$modulesclasses5 = Modules_classes::find()->all();	// используем для вывода всей таблицы

		return $this->render('modulesclasses', [	// modulesclasses - это файл - представление из папки views
			'modulesclasses' => $modulesclasses5		// в качестве массива передаем все что мы хотим передать на страницу (в файл-представление)
					
		]);	
    }

}
