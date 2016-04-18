<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Modulesclasses;

/**
 * ModulesclassesSearch represents the model behind the search form about `app\models\Modulesclasses`.
 */
class ModulesclassesSearch extends Modulesclasses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mod_cl', 'duration'], 'integer'],
            [['code', 'title', 'classes'], 'safe'],
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
        $query = Modulesclasses::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
<<<<<<< HEAD
			// добавляем сортировку по умолчанию по столбцу title(название) по алфавиту
			'sort' => [
				'defaultOrder' => ['title' => SORT_ASC],
			]
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
            'id_mod_cl' => $this->id_mod_cl,
            'duration' => $this->duration,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'classes', $this->classes]);

        return $dataProvider;
    }
}
