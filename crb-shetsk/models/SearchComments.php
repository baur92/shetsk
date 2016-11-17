<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comments;

/**
 * SearchComments represents the model behind the search form about `app\models\Comments`.
 */
class SearchComments extends Comments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_'], 'integer'],
            [['fullname_', 'text_', 'date_'], 'safe'],
            [['posted_'], 'boolean'],
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
        $query = Comments::find();

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
            'date_' => $this->date_,
            'posted_' => $this->posted_,
        ]);

        $query->andFilterWhere(['like', 'fullname_', $this->fullname_])
            ->andFilterWhere(['like', 'text_', $this->text_]);

        return $dataProvider;
    }
}
