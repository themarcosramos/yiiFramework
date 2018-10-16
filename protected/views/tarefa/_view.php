<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idTarefa')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idTarefa), array('view', 'id' => $data->idTarefa)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('titulo')); ?>:
	<?php echo GxHtml::encode($data->titulo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('privacidade')); ?>:
	<?php echo GxHtml::encode($data->privacidade); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('T_status')); ?>:
	<?php echo GxHtml::encode($data->T_status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('conclusao')); ?>:
	<?php echo GxHtml::encode($data->conclusao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('criacao')); ?>:
	<?php echo GxHtml::encode($data->criacao); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('modificacao')); ?>:
	<?php echo GxHtml::encode($data->modificacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('usuario')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->usuario0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tipo0)); ?>
	<br />
	*/ ?>

</div>