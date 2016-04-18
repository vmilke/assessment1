<?php
// модель созданная Gii
namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id_user
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property string $accesstoken
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'string', 'max' => 255],
            [['password', 'authkey', 'accesstoken'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'accesstoken' => 'Accesstoken',
        ];
    }
}
