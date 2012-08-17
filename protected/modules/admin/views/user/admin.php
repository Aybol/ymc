<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'users-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		//'id',
		'email',
		//'password',
		'first_name',
		'last_name',
		//'dob',
		array(
            'name' => 'role',
            'value' => '$data->role',
            'filter' => array(
                'admin' => 'admin',
                'fan' => 'fan',
                'artist' => 'artist'
            ),
        ),
		array(
			'class' => 'CButtonColumn',
            'template' => '{update}{delete}'
		),
	),
)); ?>