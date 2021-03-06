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

	<?php echo $form->errorSummary(array($userModel, $artistModel)); ?>

        <div class="row">
            <?php echo $form->labelEx($userModel,'email'); ?>
            <?php echo $form->textField($userModel, 'email', array('maxlength' => 50)); ?>
            <?php echo $form->error($userModel,'email'); ?>
        </div><!-- row -->

        <?php if ($userModel->scenario == 'register'): ?>
        <div class="row">
            <?php echo $form->labelEx($userModel,'password'); ?>
            <?php echo $form->passwordField($userModel, 'password', array('maxlength' => 50)); ?>
            <?php echo $form->error($userModel,'password'); ?>
        </div><!-- row -->
        <div class="row">
            <?php echo $form->labelEx($userModel,'password_repeat'); ?>
            <?php echo $form->passwordField($userModel, 'password_repeat', array('maxlength' => 50)); ?>
            <?php echo $form->error($userModel,'password_repeat'); ?>
        </div><!-- row -->
        <?php endif; ?>

        <div class="row">
            <?php echo $form->labelEx($userModel,'first_name'); ?>
            <?php echo $form->textField($userModel, 'first_name', array('maxlength' => 50)); ?>
            <?php echo $form->error($userModel,'first_name'); ?>
        </div><!-- row -->
        <div class="row">
            <?php echo $form->labelEx($userModel,'last_name'); ?>
            <?php echo $form->textField($userModel, 'last_name', array('maxlength' => 50)); ?>
            <?php echo $form->error($userModel,'last_name'); ?>
        </div><!-- row -->
        <div class="row">
            <?php echo $form->labelEx($userModel,'dob'); ?>
            <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $userModel,
            'attribute' => 'dob',
            'value' => $userModel->dob,
            'options' => array(
                'showButtonPanel' => true,
                'changeYear' => true,
                'changeMonth'=>true,
                'dateFormat' => 'yy-mm-dd',
                'minDate'=> '-50Y',
                'maxDate'=> '0',
                'yearRange'=>'c-100,c+00'
            ),
        ));
            ; ?>
            <?php echo $form->error($userModel,'dob'); ?>
        </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'country_id'); ?>
        <?php echo $form->dropDownList($artistModel, 'country_id', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true))); ?>
        <?php echo $form->error($artistModel,'country_id'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'city'); ?>
        <?php echo $form->textField($artistModel, 'city', array('maxlength' => 50)); ?>
        <?php echo $form->error($artistModel,'city'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'state'); ?>
        <?php echo $form->textField($artistModel, 'state', array('maxlength' => 50)); ?>
        <?php echo $form->error($artistModel,'state'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'artist_leader'); ?>
        <?php echo $form->dropDownList($artistModel, 'artist_leader', $artistModel->getArtistLeader()); ?>
        <?php echo $form->error($artistModel,'artist_leader'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'name'); ?>
        <?php echo $form->textField($artistModel, 'name', array('maxlength' => 100)); ?>
        <?php echo $form->error($artistModel,'name'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'bio'); ?>
        <?php echo $form->textArea($artistModel, 'bio'); ?>
        <?php echo $form->error($artistModel,'bio'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'website'); ?>
        <?php echo $form->textArea($artistModel, 'website'); ?>
        <?php echo $form->error($artistModel,'website'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'fans_count'); ?>
        <?php echo $form->dropDownList($artistModel, 'fans_count', $artistModel->getFansCount()); ?>
        <?php echo $form->error($artistModel,'fans_count'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'facebook'); ?>
        <?php echo $form->textField($artistModel, 'facebook', array('maxlength' => 100)); ?>
        <?php echo $form->error($artistModel,'facebook'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'twitter'); ?>
        <?php echo $form->textField($artistModel, 'twitter', array('maxlength' => 100)); ?>
        <?php echo $form->error($artistModel,'twitter'); ?>
    </div><!-- row -->
    <div class="row">
        <?php echo $form->labelEx($artistModel,'youtube'); ?>
        <?php echo $form->textField($artistModel, 'youtube', array('maxlength' => 100)); ?>
        <?php echo $form->error($artistModel,'youtube'); ?>
    </div><!-- row -->

        <div class="row">
        <label><?php echo GxHtml::encode($artistModel->getRelationLabel('genres')); ?></label>
		<?php echo $form->checkBoxList($artistModel, 'genres', GxHtml::encodeEx(GxHtml::listDataEx(Genres::model()->findAllAttributes(null, true)), false, true)); ?>
            </div>


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->