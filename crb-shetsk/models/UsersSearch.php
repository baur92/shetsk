<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname_', 'lastname_', 'patronymic_', 'photo_', 'position_', 'position_kk_', 'description_'], 'safe'],
            [['id_'], 'integer'],
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
        $query = Users::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_' => $this->id_,
        ]);

        $query->andFilterWhere(['like', 'firstname_', $this->firstname_])
            ->andFilterWhere(['like', 'lastname_', $this->lastname_])
            ->andFilterWhere(['like', 'patronymic_', $this->patronymic_])
            ->andFilterWhere(['like', 'photo_', $this->photo_])
            ->andFilterWhere(['like', 'position_', $this->position_])
            ->andFilterWhere(['like', 'position_kk_', $this->position_kk_])
            ->andFilterWhere(['like', 'description_', $this->description_]);

        return $dataProvider;
    }
}
