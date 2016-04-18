<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Studentsmodules;

/**
 * StudentsmodulesSearch represents the model behind the search form about `app\models\Studentsmodules`.
 */
class StudentsmodulesSearch extends Studentsmodules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sm', 'id_mod_cl', 'SID'], 'integer'],
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
        $query = Studentsmodules::find();

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
            'id_sm' => $this->id_sm,
            'id_mod_cl' => $this->id_mod_cl,
            'SID' => $this->SID,
        ]);

        return $dataProvider;
    }
}
