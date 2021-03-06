<h2>Minhas Tarefas</h2>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(	
	'dataProvider' => $dataProvider->getTarefasUser(Usuarios::getIdUser()),
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
            'filter'=> array('Pendente' => 'Pendente', 'Concluída' => 'Concluida'),
        ),	
        array(
            'header' => 'Data da Conclusão',
            'name' => 'conclusao',
        ),
		array(
            'header' => 'Ações',
            'class' => 'CButtonColumn',
            'template' => '{view}{update}',            
		),
	),
)); 
?>