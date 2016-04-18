<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Attendance;

/**
 * AttendanceSearch represents the model behind the search form about `app\models\Attendance`.
 */
class AttendanceSearch extends Attendance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_atten', 'id_tt', 'id_sm', 'attandance'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Attendance::find();
<<<<<<< HEAD
		
		$query->sql = "SELECT a.*, sm.SID FROM attendance as a LEFT JOIN students_modules as sm ON a.id_sm = sm.id_sm";	// Arooj 18/04/16

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
		// лимитируем количество записей на одной странице
			'pagination' => [ 'pageSize' => 8 ],
=======

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_atten' => $this->id_atten,
            'id_tt' => $this->id_tt,
            'id_sm' => $this->id_sm,
            'attandance' => $this->attandance,
<<<<<<< HEAD
			
		//	'SID' => $this->SID,	// Arooj 18/04/16
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ]);

        return $dataProvider;
    }
}
