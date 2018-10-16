<h1><?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
                array(
                        'label' => 'ID',
                        'name' => 'idUsuario',            
                ),
                array(
                        'label' => 'Nome',
                        'name' => 'nome',            
                ),
                array(
                        'label' => 'Sexo',
                        'name' => 'sexo',            
                ),
                array(
                        'label' => 'Data de Nascimento',
                        'name' => 'nascimento',            
                ),
                array(
                        'label' => 'E-mail',
                        'name' => 'email',            
                ),
                array(
                        'label' => 'Telefone',
                        'name' => 'telefone',            
                ),
                array(
                        'label' => 'Login',
                        'name' => 'login',            
                ),
                array(
                        'label' => 'Data da criação',
                        'name' => 'criacao',            
                ),
                array(
                        'label' => 'Data da Modificação',
                        'name' => 'modificacao',            
                ),
	),
)); ?>