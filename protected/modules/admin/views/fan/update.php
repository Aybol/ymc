<?php

$this->breadcrumbs = array(
	$userModel->label(2) => array('/admin/user'),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' ' . $userModel->label(2), 'url'=>array('/admin/user')),
);
?>

<h1><?php echo Yii::t('app', 'Update') . ' ' . GxHtml::encode($userModel->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($userModel)); ?></h1>

<?php
$this->renderPartial('//fan/_form_full', array(
    'userModel' => $userModel,
    'fanModel' => $fanModel,
));
?>