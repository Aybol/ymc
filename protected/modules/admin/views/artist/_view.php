<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('country_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->country)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('state')); ?>:
	<?php echo GxHtml::encode($data->state); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('artist_leader')); ?>:
	<?php echo GxHtml::encode($data->artist_leader); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bio')); ?>:
	<?php echo GxHtml::encode($data->bio); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('website')); ?>:
	<?php echo GxHtml::encode($data->website); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fans_count')); ?>:
	<?php echo GxHtml::encode($data->fans_count); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('facebook')); ?>:
	<?php echo GxHtml::encode($data->facebook); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('twitter')); ?>:
	<?php echo GxHtml::encode($data->twitter); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('youtube')); ?>:
	<?php echo GxHtml::encode($data->youtube); ?>
	<br />
	*/ ?>

</div>