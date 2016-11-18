<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blog;

/**
 * BlogSearch represents the model behind the search form about `app\models\Blog`.
 */
class BlogSearch extends Blog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_'], 'integer'],
            [['fullname_', 'question_', 'answer_', 'date_'], 'safe'],
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
        $query = Blog::find();

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
            ->andFilterWhere(['like', 'question_', $this->question_])
            ->andFilterWhere(['like', 'answer_', $this->answer_]);

        return $dataProvider;
    }
}
