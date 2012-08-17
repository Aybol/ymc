<div class="row">
    <?php echo $form->labelEx($userModel, 'email'); ?>
    <?php echo $form->textField($userModel, 'email', array('maxlength' => 50)); ?>
    <?php echo $form->error($userModel, 'email'); ?>
</div><!-- row -->

<?php if ($userModel->scenario == 'register'): ?>
<div class="row">
    <?php echo $form->labelEx($userModel, 'password'); ?>
    <?php echo $form->passwordField($userModel, 'password', array('maxlength' => 50)); ?>
    <?php echo $form->error($userModel, 'password'); ?>
</div><!-- row -->
<div class="row">
    <?php echo $form->labelEx($userModel, 'password_repeat'); ?>
    <?php echo $form->passwordField($userModel, 'password_repeat', array('maxlength' => 50)); ?>
    <?php echo $form->error($userModel, 'password_repeat'); ?>
</div><!-- row -->
<?php endif; ?>

<div class="row">
    <?php echo $form->labelEx($userModel, 'first_name'); ?>
    <?php echo $form->textField($userModel, 'first_name', array('maxlength' => 50)); ?>
    <?php echo $form->error($userModel, 'first_name'); ?>
</div><!-- row -->
<div class="row">
    <?php echo $form->labelEx($userModel, 'last_name'); ?>
    <?php echo $form->textField($userModel, 'last_name', array('maxlength' => 50)); ?>
    <?php echo $form->error($userModel, 'last_name'); ?>
</div><!-- row -->
<div class="row">
    <?php echo $form->labelEx($userModel, 'dob'); ?>
    <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $userModel,
    'attribute' => 'dob',
    'value' => $userModel->dob,
    'options' => array(
        'showButtonPanel' => true,
        'changeYear' => true,
        'changeMonth' => true,
        'dateFormat' => 'yy-mm-dd',
        'minDate' => '-50Y',
        'maxDate' => '0',
        'yearRange' => 'c-100,c+00'
    ),
));
    ; ?>
    <?php echo $form->error($userModel, 'dob'); ?>
</div><!-- row -->