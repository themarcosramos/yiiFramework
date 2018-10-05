<?php
/* @var $this TarefaController */
/* @var $data Tarefa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTarefa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTarefa), array('view', 'id'=>$data->idTarefa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacidade')); ?>:</b>
	<?php echo CHtml::encode($data->privacidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('situacao')); ?>:</b>
	<?php echo CHtml::encode($data->situacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conslusao')); ?>:</b>
	<?php echo CHtml::encode($data->conslusao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipo')); ?>:</b>
	<?php echo CHtml::encode($data->idTipo); ?>
	<br />


</div>