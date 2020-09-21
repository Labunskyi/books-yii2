<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BooksModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

</div>
<div class="container-fluid">
	<?php if (isset($books)) : ?>
		<div class="row">
			<?php foreach($books as $book)  : ?> 
			<div class="col-md-3">
				<?=Html::a($book->title, ['books/view', 'id' => $book->id]);?>
			</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<?php 
		echo \yii\widgets\LinkPager::widget([
			'pagination' => $pages,
		]);
	?>
</div>
