<h2>Tarefas Públicas</h2>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(	
	'dataProvider' => $dataProvider->getTarefasPublicas(),
    'filter' => $dataProvider,
    'htmlOptions' => [
        'style' => 'width:100%;'
    ],
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
            'header' => 'Tipo da Tarefa',
            'name'=>'tipo',
            'value'=>'GxHtml::valueEx($data->tipo0)',
            'filter'=>GxHtml::listDataEx(Tipos::model()->findAllAttributes(null, true)),
        ),
        array(
            'header' => 'Status',
            'name' => 'T_status',
            'filter'=> array('Pendente' => 'Pendende', 'Concluída' => 'Concluida'),
        ),	
        array(
            'header' => 'Data da conclusão',
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