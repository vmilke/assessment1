<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students_modules".
 *
 * @property string $id_sm
 * @property string $id_mod_cl
 * @property string $SID
 *
 * @property Attendance[] $attendances
 * @property ModulesClasses $idModCl
 * @property Students $s
 */
class Studentsmodules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students_modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mod_cl', 'SID'], 'required'],
            [['id_mod_cl', 'SID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sm' => 'Id Sm',
            'id_mod_cl' => 'Id Mod Cl',
            'SID' => 'Sid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['id_sm' => 'id_sm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdModCl()
    {
        return $this->hasOne(ModulesClasses::className(), ['id_mod_cl' => 'id_mod_cl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getS()
    {
        return $this->hasOne(Students::className(), ['SID' => 'SID']);
    }
}
