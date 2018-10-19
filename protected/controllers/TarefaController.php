<?php

class TarefaController extends GxController {

	public function filters() {
		return array(
            'accessControl',
        );
	}
	
	public function accessRules() {
		return array(
			array('allow',
                'actions' => array('create','update','delete','admin','index','view'),
				'roles' => array('admin'),
				
			),	
			array('allow',
                'actions' => array('update','view','userHome','userTarefas','userTarefas','tarefasPublicas'),
			),		
			array('deny',
                'actions' => array('update','delete','admin','index','view','userHome','userTarefas','tarefasPublicas'),
				'users' => array('?'),

            ), 
        );
    }

	public function actionView($id) {
		if(Yii::app()->user->name == 'admin') {	
			$this->render('view', array(
				'model' => $this->loadModel($id, 'Tarefas'),
			));
		} else { 
			$this->render('viewTarefa', array(
				'model' => $this->loadModel($id, 'Tarefas'),
			));
		}		
	}

	public function actionCreate() {
		$model = new Tarefas;	
		//if(Yii::app()->user->name == 'admin') {
			if (isset($_POST['Tarefas'])) {
				$model->setAttributes($_POST['Tarefas']);
				if($model->privacidade == 'Publica') {
					$model->usuario = null;
				}
				if ($model->save()) {
					if (Yii::app()->getRequest()->getIsAjaxRequest())
						Yii::app()->end();
					else
						$this->redirect(array('view', 'id' => $model->idTarefa));
				}
			}
			$this->render('create', array( 'model' => $model));
		//} else {
			//$this->redirect(array('tarefa/userHome'));
			$this->render('create', array( 'model' => $model));
	//	}
	}

	public function actionUpdate($id) {	

		$model = $this->loadModel($id, 'Tarefas');
		if (isset($_POST['Tarefas'])) {
			$model->setAttributes($_POST['Tarefas']);
			$model = $this->verificaUpdate($model);
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->idTarefa));
			}
		}
		if(Yii::app()->user->name == 'admin') {
			$this->render('update', array(
				'model' => $model,
			));
		
		} else {
			
			$this->render('updateTarefa', array(
				'model' => $model,
			));
		}
	}
	private function verificaUpdate($model) {

		if($model->T_status == "Concluida") {
			$model->conclusao = date("Y-m-d ");
		} else {
			$model->conclusao = null;
		}
		if($model->privacidade == 'Publica') {
			$model->Usuario = null;
		} 

		return $model;
	}

	public function actionDelete($id) {			
		if(Yii::app()->user->name == 'admin') {
		
			if (Yii::app()->getRequest()->getIsPostRequest()) {
				$this->loadModel($id, 'Tarefas')->delete();
				if (!Yii::app()->getRequest()->getIsAjaxRequest())
					$this->redirect(array('admin'));
			} else
				throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));			
		} else {
			
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionIndex() {
		if(Yii::app()->user->name == 'admin') {
			$dataProvider = new CActiveDataProvider('Tarefas');
			$this->render('index', array(
				'dataProvider' => $dataProvider,
			));			
		} else {	
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionAdmin() {
		if(Yii::app()->user->name == 'admin') {
			$model = new Tarefas('search');
			$model->unsetAttributes();
			if (isset($_GET['Tarefas']))
				$model->setAttributes($_GET['Tarefas']);
			$this->render('admin', array(
				'model' => $model,
			));			
		} else {
			
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionTarefasPublicas() {
		$this->layout = '//layouts/column1';
		$model = new Tarefas();
		$model->unsetAttributes();
		if (isset($_GET['Tarefas']))
			$model->setAttributes($_GET['Tarefas']);
		$this->render('tarefasPublicas', array(
			'dataProvider' => $model,
		));
	}

	public function actionUserTarefas() {
		$this->layout = '//layouts/column1';
		$model = new Tarefas();
		$model->unsetAttributes();
		if (isset($_GET['Tarefas']))
			$model->setAttributes($_GET['Tarefas']);
		$this->render('userTarefas', array(
			'dataProvider' => $model,
		));
	}

	public function actionUserHome() {
		$this->layout = '//layouts/column1';
		$model = new Tarefas('search');	
		$model->unsetAttributes();
		if (isset($_GET['Tarefas']))
			$model->setAttributes($_GET['Tarefas']);

		$this->render('userHome', array(
			'dataProvider' => $model,
		));		
	}


}