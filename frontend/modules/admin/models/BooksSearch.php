<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Books;

/**
 * BooksSearch represents the model behind the search form of `common\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
	public $authors;
	public $genres;
	
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'content', 'img', 'date', 'authors', 'genres'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Books::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => [
                'forcePageParam' => true,
                'pageSizeParam' => true,
                'pageSize' => 40
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		$query->joinWith(['authors', 'genres']);
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'img', $this->img])
			->andFilterWhere(['in', 'authors.id', $this->authors])
			->andFilterWhere(['in', 'genres.id', $this->genres]);
        return $dataProvider;
    }
}
