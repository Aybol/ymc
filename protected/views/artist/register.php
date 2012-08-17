<h1><?php echo Yii::t('app', 'Register as an Artist')?></h1>

<?php
$this->renderPartial('_form_full', array(
		'userModel' => $userModel,
        'artistModel' => $artistModel,
		'buttons' => 'create'));
?>