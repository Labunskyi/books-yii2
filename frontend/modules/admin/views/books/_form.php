<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use common\models\Authors;
use common\models\Genres;

/* @var $this yii\web\View */
/* @var $model common\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
		
	<?= $form->field($model, 'authors[]')->dropDownList(
			ArrayHelper::map(Authors::find()->all(), 'id', 'name'),
			[
			  'multiple' => 'multiple',
			  'class' => 'form-control',              
			 ] 
		) 
	?>
	
	<?= $form->field($model, 'genres[]')->dropDownList(
			ArrayHelper::map(Genres::find()->all(), 'id', 'name'),
			[
			  'multiple' => 'multiple',
			  'class' => 'form-control',              
			 ] 
		) 
	?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::className(), [
		'name' => 'date',
		'options' => ['placeholder' => 'Ввод даты'],
		'dateFormat' => 'yyyy-MM-dd',
		]);
	?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
