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
		<?php echo $form->label($model, 'country_id'); ?>
		<?php echo $form->dropDownList($model, 'country_id', GxHtml::listDataEx(Countries::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'state'); ?>
		<?php echo $form->textField($model, 'state', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'artist_leader'); ?>
		<?php echo $form->textField($model, 'artist_leader', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bio'); ?>
		<?php echo $form->textArea($model, 'bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'website'); ?>
		<?php echo $form->textArea($model, 'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fans_count'); ?>
		<?php echo $form->textField($model, 'fans_count', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'facebook'); ?>
		<?php echo $form->textField($model, 'facebook', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'twitter'); ?>
		<?php echo $form->textField($model, 'twitter', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'youtube'); ?>
		<?php echo $form->textField($model, 'youtube', array('maxlength' => 100)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
