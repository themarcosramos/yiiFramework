<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt_BR" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
	<?php

      if(Yii::app()->user->name == 'admin') {

	 echo '<div id="mainmenu">';

	$this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Home',  'url'=>array('/site/index')),
			array('label'=>'Usuários', 'url'=>array('/usuario/index'),'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Tarefas', 'url'=>array('/tarefa/index'),'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Tipos', 'url'=>array('/TipoTarefa/index'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Sair ' .Yii::app()->user->name.'?', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	)); 
	echo '</div><!-- mainmenu -->';
} else {
	echo '<div id="mainmenu">';

	$this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Home', 'url'=>array('/tarefa/userHome'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>ucfirst(Yii::app()->user->name), 'url'=>array('/usuario/perfil'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Tarefas de '.ucfirst(Yii::app()->user->name), 'url'=>array('/tarefa/userTarefas'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Tarefas públicas ','url'=>array('/tarefa/tarefasPublicas'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Criar uma tarefa' ,'url'=>array('/tarefa/create'),'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Criar um tipo' ,'url'=>array('/tipoTarefa/create'),'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Sair ', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	)); 	
	echo '</div><!-- mainmenu -->';
}
?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
