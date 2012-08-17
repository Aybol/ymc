<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'fans-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->dropDownList($model, 'id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'gender'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'concert_per_year'); ?>
		<?php echo $form->textField($model, 'concert_per_year'); ?>
		<?php echo $form->error($model,'concert_per_year'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tracks_per_year'); ?>
		<?php echo $form->textField($model, 'tracks_per_year'); ?>
		<?php echo $form->error($model,'tracks_per_year'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('genres')); ?></label>
		<?php echo $form->checkBoxList($model, 'genres', GxHtml::encodeEx(GxHtml::listDataEx(Genres::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->