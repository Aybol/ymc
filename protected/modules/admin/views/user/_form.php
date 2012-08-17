<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'users-form',
	'enableAjaxValidation' => false,
    'enableClientValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

    <?php
    $this->renderPartial('//user/_form_fields', array(
        'userModel' => $model,
        'form' => $form
    ));
    ?>


    <?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->