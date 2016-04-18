<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modules_classes".
 *
 * @property string $id_mod_cl
 * @property string $code
 * @property string $title
 * @property string $classes
 * @property string $duration
 *
 * @property StudentsModules[] $studentsModules
 * @property Timetable[] $timetables
 */
class Modulesclasses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modules_classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'title', 'classes', 'duration'], 'required'],
            [['classes'], 'string'],
            [['duration'], 'integer'],
            [['code', 'title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mod_cl' => 'Id Mod Cl',
            'code' => 'Code',
            'title' => 'Title',
            'classes' => 'Classes',
            'duration' => 'Duration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsModules()
    {
        return $this->hasMany(StudentsModules::className(), ['id_mod_cl' => 'id_mod_cl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetables()
    {
        return $this->hasMany(Timetable::className(), ['id_mod_cl' => 'id_mod_cl']);
    }
}
