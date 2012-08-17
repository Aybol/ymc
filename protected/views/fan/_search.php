<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->dropDownList($model, 'id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'gender'); ?>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'concert_per_year'); ?>
		<?php echo $form->textField($model, 'concert_per_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tracks_per_year'); ?>
		<?php echo $form->textField($model, 'tracks_per_year'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
