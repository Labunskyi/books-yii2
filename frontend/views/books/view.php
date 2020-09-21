<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Books */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>
	
	<?php
    $authors = [];
    foreach ($model->authors as $author) {
        $authors[] = $author->name;
	}
	$genres = [];
    foreach ($model->genres as $genre) {
        $genres[] = $genre->name;
	}
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'img',
            'date',
			[
                'label' => 'авторы',
				'format' => 'html',
                'value' => Html::ul($authors, ['encode' => false]),
            ],
			[
                'label' => 'жанры',
				'format' => 'html',
                'value' => Html::ul($genres, ['encode' => false]),
				//'value' => Html::encode($genres, ['class' => 'genre']),
            ],
        ],
    ]) ?>

</div>
