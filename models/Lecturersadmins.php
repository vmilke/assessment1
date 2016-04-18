<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lecturers_admins".
 *
 * @property string $id_la
 * @property string $title
 * @property string $name
 * @property string $surname
 * @property string $profession
 * @property string $login
 * @property string $password
 * @property string $email_la
 * @property string $regdate
 *
 * @property Timetable[] $timetables
 */
class Lecturersadmins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lecturers_admins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'name', 'surname', 'profession', 'login', 'password', 'email_la', 'regdate'], 'required'],
            [['title', 'profession'], 'string'],
            [['regdate'], 'integer'],
            [['name', 'surname', 'login', 'email_la'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 32],
            [['login'], 'unique'],
            [['email_la'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_la' => 'Id La',
            'title' => 'Title',
            'name' => 'Name',
            'surname' => 'Surname',
            'profession' => 'Profession',
            'login' => 'Login',
            'password' => 'Password',
            'email_la' => 'Email La',
            'regdate' => 'Regdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetables()
    {
        return $this->hasMany(Timetable::className(), ['id_la' => 'id_la']);
    }
}
