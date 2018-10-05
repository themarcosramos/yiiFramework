<?php
/* @var $this TipoController */
/* @var $data Tipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipo), array('view', 'id'=>$data->idTipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTarefa')); ?>:</b>
	<?php echo CHtml::encode($data->idTarefa); ?>
	<br />


</div>