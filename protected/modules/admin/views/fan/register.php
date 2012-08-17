<h1><?php echo Yii::t('app', 'Register as a Fan')?></h1>

<?php
$this->renderPartial('_form_full', array(
		'userModel' => $userModel,
        'fanModel' => $fanModel,
		'buttons' => 'create'));
?>