<?php
	echo "<h3 class=''>Bem Vindo ".Yii::app()->user->name."!</h3><br>";
	echo "<h4>Essas são as suas Tarefas Pendentes:</h4>";
?>
<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'usuarios-grid',
	'dataProvider' => $dataProvider->getTarefasPendentes(Usuarios::getIdUser()),
	'filter' => $dataProvider,
	'columns' => array(       
		array(
			'header' => 'Título',
			'name' => 'titulo',
		),
		array(
			'header' => 'Descrição',
			'name' => 'descricao',
		),
		array(
            'header' => 'Tipo de Tarefa',
            'name'=>'tipo',
            'value'=>'GxHtml::valueEx($data->tipo0)',
            'filter'=>GxHtml::listDataEx(Tipos::model()->findAllAttributes(null, true)),
        ),
		array(
			'header' => 'Status',
			'name' => 'T_status',
		),
		array(
			'header' => 'Ações',
			'class' => 'CButtonColumn',
			'template' => '{view}{update}{create}',            
		),
	),
)); 

?>
