<?php

class UsuarioController extends GxController {

	public function filters() {
		return array(
            'accessControl',
        );
	}
	public function accessRules() {
		return array(
			array('allow',
                'actions' => array('create','update','delete','admin','index','view',),
				'roles' => array('admin'),
				
			),	
			array('allow',
                'actions' => array('update','view','perfil'),
			),		
			array('deny',
                'actions' => array('create','update','delete','admin','index','view','perfil'),
				'users' => array('?'),
            ), 
        );
    }

	public function actionView($id) {
		if(Yii::app()->user->name == 'admin') {
			$this->render('view', array(
				'model' => $this->loadModel($id, 'Usuarios'),
			));
		} else {
			$this->render('viewUser', array(
				'model' => $this->loadModel($id, 'Usuarios'),
			));
		}		
	}

	public function actionCreate() {	
		if(Yii::app()->user->name == 'admin') {
			$model = new Usuarios;
			if(isset($_POST['Usuarios'])) {
				$model->setAttributes($_POST['Usuarios']);
				if ($model->save()) {
					if (Yii::app()->getRequest()->getIsAjaxRequest())
						Yii::app()->end();
					else
						$this->redirect(array('view', 'id' => $model->idUsuario));
				}
			}
			$this->render('create', array( 'model' => $model));	
		} else {
			$this->redirect(array('tarefa/userHome'));
		}		
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Usuarios');
		if (isset($_POST['Usuarios'])) {
			$model->setAttributes($_POST['Usuarios']);
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->idUsuario));
			}
		}
		if(Yii::app()->user->name == 'admin') {
			
			$this->render('update', array(
				'model' => $model,
			));
		} else {
			$this->render('perfil', array(
				'model' => $model,
			));	
		}
	}

	public function actionDelete($id) {

		if(Yii::app()->user->name == 'admin') {
			    $model=Tarefas::model()->deleteAll(array("condition"=>"usuario='$id'"));;
			    $this->loadModel($id, 'Usuarios')->delete();
			    $this->redirect(array('Usuario/create'));
		} else {
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionIndex() {
		if(Yii::app()->user->name == 'admin') {
			$dataProvider = new CActiveDataProvider('Usuarios');
			$this->render('index', array(
				'dataProvider' => $dataProvider,
			));	
		} else {
			$this->redirect(array('tarefa/userHome'));
		}		
	}
	public function actionAdmin() {			
		if(Yii::app()->user->name == 'admin') {
			$model = new Usuarios('search');
			$model->unsetAttributes();
			if (isset($_GET['Usuarios']))
				$model->setAttributes($_GET['Usuarios']);
			$this->render('admin', array(
				'model' => $model,
			));				
		} else {
			$this->redirect(array('tarefa/userHome'));
		}
	}

	public function actionPerfil() {	
		$model = $this->loadModel(Usuarios::getIdUser(), 'Usuarios');		
		if (isset($_POST['Usuarios'])) {	
			$model->setAttributes($_POST['Usuarios']);
			if ($model->save()) {	
				$this->redirect(array('view', 'id' => $model->idUsuario));
			}
		}
		$this->render('perfil', array(
			'model' => $model,
		));		
	}
}