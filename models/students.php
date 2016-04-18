<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property string $SID
 * @property string $name
 * @property string $surname
<<<<<<< HEAD
 * @property string $login
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
 * @property string $password
 * @property string $email_st
 * @property string $regdate
 *
 * @property StudentsModules[] $studentsModules
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['name', 'surname', 'login', 'password', 'email_st', 'regdate'], 'required'],
            [['regdate'], 'integer'],
            [['name', 'surname', 'login', 'email_st'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 32],
			[['login'], 'unique'],
=======
            [['name', 'surname', 'password', 'email_st', 'regdate'], 'required'],
            [['regdate'], 'integer'],
            [['name', 'surname', 'email_st'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 32],
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            [['email_st'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SID' => 'Sid',
            'name' => 'Name',
            'surname' => 'Surname',
<<<<<<< HEAD
			'login' => 'Login',
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            'password' => 'Password',
            'email_st' => 'Email St',
            'regdate' => 'Regdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsModules()
    {
        return $this->hasMany(StudentsModules::className(), ['SID' => 'SID']);
    }
}
