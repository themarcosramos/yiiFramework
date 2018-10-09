<?php
/* @var $this RealizarController */
/* @var $data Realizar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRealizar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRealizar), array('view', 'id'=>$data->idRealizar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('criacao')); ?>:</b>
	<?php echo CHtml::encode($data->criacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificacao')); ?>:</b>
	<?php echo CHtml::encode($data->modificacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTarefa')); ?>:</b>
	<?php echo CHtml::encode($data->idTarefa); ?>
	<br />


</div>