<h1>Tarefa <?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
        array(
            'label' => 'ID',
            'name' => 'idTarefa',            
        ),
        array(
            'label' => 'Título',
            'name' => 'titulo',            
        ),
        array(
            'label' => 'Usuario',
            'name' => 'usuario0',            
        ),
        array(
            'label' => 'Privacidade',
            'name' => 'privacidade',            
        ),
        array(
            'label' => 'Descrição',
            'name' => 'descricao',            
        ),
        array(
            'label' => 'Tipo',
            'name' => 'tipo0',            
        ),
        array(
            'label' => 'Satus',
            'name' => 'T_status',            
        ),
        array(
            'label' => 'Data de Conclusão',
            'name' => 'conclusao',            
        ),        
        array(
            'label' => 'Data de Criação',
            'name' => 'criacao',            
        ),
        array(
            'label' => 'Data de Modificação',
            'name' => 'modificacao',            
        ),
	),
)); ?>