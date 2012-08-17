<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('first_name')); ?>:
	<?php echo GxHtml::encode($data->first_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_name')); ?>:
	<?php echo GxHtml::encode($data->last_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dob')); ?>:
	<?php echo GxHtml::encode($data->dob); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('role')); ?>:
	<?php echo GxHtml::encode($data->role); ?>
	<br />

</div>