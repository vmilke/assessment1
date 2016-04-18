<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property string $id_atten
 * @property string $id_tt
 * @property string $id_sm
 * @property integer $attandance
<<<<<<< HEAD
 
 * @property integer $SID		// Arooj 18/04/16
 
=======
 *
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
 * @property StudentsModules $idSm
 * @property Timetable $idTt
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tt', 'id_sm'], 'required'],
            [['id_tt', 'id_sm', 'attandance'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_atten' => 'Id Atten',
            'id_tt' => 'Id Tt',
            'id_sm' => 'Id Sm',
            'attandance' => 'Attandance',
<<<<<<< HEAD
			'SID' => 'SID',
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSm()
    {
        return $this->hasOne(StudentsModules::className(), ['id_sm' => 'id_sm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTt()
    {
        return $this->hasOne(Timetable::className(), ['id_tt' => 'id_tt']);
    }
<<<<<<< HEAD
	/**
     * @return \yii\db\ActiveQuery
     */
/*    public function getSID()			// Arooj 18/04/16
    {
        return $this->hasOne(StudentsModules::className(), ['SID' => 'SID']);
    }	*/
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
}
