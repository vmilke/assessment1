<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property string $id_room
 * @property string $room_number
 * @property string $capacity
 *
 * @property Timetable[] $timetables
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_number', 'capacity'], 'required'],
            [['capacity'], 'integer'],
            [['room_number'], 'string', 'max' => 255],
            [['room_number'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_room' => 'Id Room',
            'room_number' => 'Room Number',
            'capacity' => 'Capacity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetables()
    {
        return $this->hasMany(Timetable::className(), ['id_room' => 'id_room']);
    }
}
