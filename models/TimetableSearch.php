<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Timetable;

/**
 * TimetableSearch represents the model behind the search form about `app\models\Timetable`.
 */
class TimetableSearch extends Timetable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tt', 'date_time_on', 'id_room', 'id_mod_cl', 'id_la'], 'integer'],
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
        $query = Timetable::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
<<<<<<< HEAD
			// лимитируем количество записей на одной странице
			'pagination' => [ 'pageSize' => 8 ],
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_tt' => $this->id_tt,
            'date_time_on' => $this->date_time_on,
            'id_room' => $this->id_room,
            'id_mod_cl' => $this->id_mod_cl,
            'id_la' => $this->id_la,
        ]);

        return $dataProvider;
    }
}
