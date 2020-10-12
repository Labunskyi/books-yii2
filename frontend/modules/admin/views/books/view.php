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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	
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
            [
                'label' => 'id',
				'format' => 'html',
                'value' => $model->id,
            ],
            [
                'label' => 'Название',
				'format' => 'html',
                'value' => $model->title,
            ],
			[
                'label' => 'Содержание',
				'format' => 'html',
                'value' => $model->content,
            ],
            'img',
            'date',
			[
                'label' => 'Авторы',
				'format' => 'html',
                'value' => Html::ul($authors, ['encode' => false]),
            ],
			[
                'label' => 'Жанры',
				'format' => 'html',
                'value' => Html::ul($genres, ['encode' => false]),
            ],
        ],
    ]) ?>

</div>
