<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\BooksSerch;
use common\models\Authors;
use common\models\Genres;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BooksModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'title',
            'content:ntext',
            'img',
            'date',
			[
				'attribute'=>'authors',
				'label'=>'Authors',
				'format'=>'text', // Возможные варианты: raw, html
				'content'=> function($data){
					$authors = [];
					foreach ($data->authors as $author) {
						$authors[] = $author->name;
					}
					$authors = implode(", ", $authors);
					return $authors;
				},
				'filter'=> yii\helpers\ArrayHelper::map(Authors::find()->all(), 'id', 'name'),
			],
			[
				'attribute'=>'genres',
				'label'=>'Genres',
				'format'=>'text', // Возможные варианты: raw, html
				'content'=> function($data){
					$genres = [];
					foreach ($data->genres as $genre) {
						$genres[] = $genre->name;
					}
					$genres = implode(", ", $genres);
					return $genres;
				},
				'filter'=> yii\helpers\ArrayHelper::map(Genres::find()->all(), 'id', 'name'),
			],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php Pjax::end(); ?>

</div>
