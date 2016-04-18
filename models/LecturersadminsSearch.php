<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lecturersadmins;

/**
 * LecturersadminsSearch represents the model behind the search form about `app\models\Lecturersadmins`.
 */
class LecturersadminsSearch extends Lecturersadmins
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_la', 'regdate'], 'integer'],
            [['title', 'name', 'surname', 'profession', 'login', 'password', 'email_la'], 'safe'],
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
        $query = Lecturersadmins::find();

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
            'id_la' => $this->id_la,
            'regdate' => $this->regdate,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'profession', $this->profession])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email_la', $this->email_la]);

        return $dataProvider;
    }
}
