<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'artists-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->dropDownList($model, 'id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php echo $form->dropDownList($model, 'country_id', GxHtml::listDataEx(Countries::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'country_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model, 'state', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'state'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'artist_leader'); ?>
		<?php echo $form->textField($model, 'artist_leader', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'artist_leader'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bio'); ?>
		<?php echo $form->textArea($model, 'bio'); ?>
		<?php echo $form->error($model,'bio'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textArea($model, 'website'); ?>
		<?php echo $form->error($model,'website'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fans_count'); ?>
		<?php echo $form->textField($model, 'fans_count', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'fans_count'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model, 'facebook', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'facebook'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'twitter'); ?>
		<?php echo $form->textField($model, 'twitter', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'twitter'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'youtube'); ?>
		<?php echo $form->textField($model, 'youtube', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'youtube'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('genres')); ?></label>
		<?php echo $form->checkBoxList($model, 'genres', GxHtml::encodeEx(GxHtml::listDataEx(Genres::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->