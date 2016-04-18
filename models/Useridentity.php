<?php
// это стандартный тип модели User (из коробки Yii2), но
// мы его перепишем
namespace app\models;

class Useridentity extends Users implements \yii\web\IdentityInterface
{	// это саб-класс, который наследунтся от модели Users, созданной при помощи Gii

/*    public $id;	// убрали все публичные поля, иначе при выборки из базы данных эти поля будут пустые
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
*/
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)	// нам передается $id и по нему мы должны 
    {	// найти запись в базе данных (в таблице users)
//        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
		// перезаписываем код как в примере
		return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
/*        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }
*/		// перезаписываем код как в примере авторизации
        return static::findOne(['accesstoken' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
/*       foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);	// new static - это позднее статическое связывание (потом почитать в PHP)
            }
        }
*/		// перезаписываем код как в примере авторизации
        return static::findOne(['username' => $username]);	// здесь 'username' - это из базы данных из таблицы users
    }

    /**
     * @inheritdoc
     */
    public function getId()	// эта функция для того, чтобы МЕТОД getId() всегда вызывался
    {	// одинаково, независимо от как мы назвале ключ в таблице users
		// в нашем случае мы названия это поле: id_user
		
        return $this->id_user;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()	
    {		 
        return $this->authkey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)	// функция нужна для авторизации через cookes
    {	// сверяется authKey из cookes и authkey, запомненный ранее в таблице
		// если совпадают, то воссоздается СЕССИЯ и пользователь считается авторизированным
        return $this->authkey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {	// password из таблицы - это hash. $password, введенный в форму - обычная строка
		// следовательно надо использовать функцию md5 чтобы сравнивать hash с hash
		
        return $this->password === md5($password);
    }
}
