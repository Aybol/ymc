<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('gender')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('concert_per_year')); ?>:
	<?php echo GxHtml::encode($data->concert_per_year); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tracks_per_year')); ?>:
	<?php echo GxHtml::encode($data->tracks_per_year); ?>
	<br />

</div>