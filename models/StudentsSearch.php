<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Students;

/**
 * StudentsSearch represents the model behind the search form about `app\models\Students`.
 */
class StudentsSearch extends Students
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SID', 'regdate'], 'integer'],
<<<<<<< HEAD
            [['name', 'surname', 'login', 'password', 'email_st'], 'safe'],
=======
            [['name', 'surname', 'password', 'email_st'], 'safe'],
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
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
        $query = Students::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
<<<<<<< HEAD
			// лимитируем количество записей на одной странице
			'pagination' => [ 'pageSize' => 6 ],
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
            'SID' => $this->SID,
            'regdate' => $this->regdate,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
<<<<<<< HEAD
			->andFilterWhere(['like', 'login', $this->login])
=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email_st', $this->email_st]);

        return $dataProvider;
    }
}
