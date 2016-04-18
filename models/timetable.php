<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "timetable".
 *
 * @property string $id_tt
 * @property string $date_time_on
 * @property string $id_room
 * @property string $id_mod_cl
 * @property string $id_la
 *
 * @property Attendance[] $attendances
 * @property Rooms $idRoom
 * @property ModulesClasses $idModCl
 * @property LecturersAdmins $idLa
 */
class Timetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'timetable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_time_on', 'id_room', 'id_mod_cl', 'id_la'], 'required'],
            [['date_time_on', 'id_room', 'id_mod_cl', 'id_la'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tt' => 'Id Tt',
            'date_time_on' => 'Date Time On',
            'id_room' => 'Id Room',
            'id_mod_cl' => 'Id Mod Cl',
            'id_la' => 'Id La',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['id_tt' => 'id_tt']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRoom()
    {
        return $this->hasOne(Rooms::className(), ['id_room' => 'id_room']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdModCl()
    {
        return $this->hasOne(ModulesClasses::className(), ['id_mod_cl' => 'id_mod_cl']);
    }
<<<<<<< HEAD
// пробуем для вывода строк в сязанных таблицах - не получается - где-то косяк
/*	public function getIdModClName()
    {
        $parent = $this->IdModCl;
		return $parent ? $IdModCl->name : '';
    } */
=======

>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLa()
    {
        return $this->hasOne(LecturersAdmins::className(), ['id_la' => 'id_la']);
    }
}
