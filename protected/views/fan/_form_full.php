<div class="form">


<?php
    /**
     * @var GxActiveForm
     */
    $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'fans-form',
	'enableAjaxValidation' => false,
    'enableClientValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary(array($userModel, $fanModel)); ?>


    <?php
    $this->renderPartial('//user/_form_fields', array(
        'userModel' => $userModel,
        'form' => $form
    ));
    ?>


    <div class="row">
            <?php echo $form->labelEx($fanModel,'gender'); ?>
            <?php echo $form->dropDownList($fanModel, 'gender', $fanModel->getGenders()); ?>
            <?php echo $form->error($fanModel,'gender'); ?>
		</div><!-- row -->
		<div class="row">
            <?php echo $form->labelEx($fanModel,'concert_per_year'); ?>
            <?php echo $form->textField($fanModel, 'concert_per_year'); ?>
            <?php echo $form->error($fanModel,'concert_per_year'); ?>
		</div><!-- row -->
		<div class="row">
            <?php echo $form->labelEx($fanModel,'tracks_per_year'); ?>
            <?php echo $form->textField($fanModel, 'tracks_per_year'); ?>
            <?php echo $form->error($fanModel,'tracks_per_year'); ?>
		</div><!-- row -->

        <div class="row">
        <label><?php echo GxHtml::encode($fanModel->getRelationLabel('genres')); ?></label>
		<?php echo $form->checkBoxList($fanModel, 'genres', GxHtml::encodeEx(GxHtml::listDataEx(Genres::model()->findAllAttributes(null, true)), false, true)); ?>
            </div>

        <?php /* if ($userModel->scenario == 'register'): ?>
        <div class="row">
        <?php echo $form->labelEx($userModel, 'recaptcha'); ?>
        <?php $this->widget('ext.recaptcha.EReCaptcha',array(
                'model'=>$userModel,
                'attribute'=>'recaptcha',
                'theme'=>'red', 'language'=>'en_EN',
                'publicKey'=>Yii::app()->params['recaptcha']['public_key']
            )
            )
        ?>
        <?php echo $form->error($userModel, 'recaptcha'); ?>
        </div>
        <?php endif; */ ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->