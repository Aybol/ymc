<?php

$this->breadcrumbs = array(
	Fans::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Fans::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Fans::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Fans::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 