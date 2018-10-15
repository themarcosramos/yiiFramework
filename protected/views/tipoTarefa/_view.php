<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idTipo')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idTipo), array('view', 'id' => $data->idTipo)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('criacao')); ?>:
	<?php echo GxHtml::encode($data->criacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('modificacao')); ?>:
	<?php echo GxHtml::encode($data->modificacao); ?>
	<br />

</div>