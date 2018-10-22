<?php

class TipoTarefaController extends GxController {

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
                'actions' => array('update','view','perfil'),
                'users' => array('@'),
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
				'model' => $this->loadModel($id, 'Tipos'),
			));		
		} else {			
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionCreate() {
		$model = new Tipos;	
			
			if (isset($_POST['Tipos'])) {			
				$model->setAttributes($_POST['Tipos']);									
				if ($model->save()) {
					if (Yii::app()->getRequest()->getIsAjaxRequest())
						Yii::app()->end();
					else
						$this->redirect(array('view', 'id' => $model->idTipo));
				}
			}
			$this->render('create', array( 'model' => $model));	
	}

	public function actionUpdate($id) {			
		if(Yii::app()->user->name == 'admin') {		
			$model = $this->loadModel($id, 'Tipos');		
			if (isset($_POST['Tipos'])) {
				$model->setAttributes($_POST['Tipos']);
				if ($model->save()) {
					$this->redirect(array('view', 'id' => $model->idTipo));
				}
			}
			$this->render('update', array(
				'model' => $model,
			));	
		} else {	
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionDelete($id) {	
		$model=Tarefas::model()->deleteAll(array("condition"=>"tipo='$id'"));;
		$this->loadModel($id, 'Tipos')->delete();

        /**if(Yii::app()->user->name == 'admin') {
			if (Yii::app()->getRequest()->getIsPostRequest()) {
				$this->loadModel($id, 'Tipos')->delete();
				if (!Yii::app()->getRequest()->getIsAjaxRequest())
					$this->redirect(array('admin'));
			} else
			*/		
		//} else {
			$this->redirect(array('tarefa/create'));
	//	}	
	}

	public function actionIndex() {
		
		if(Yii::app()->user->name == 'admin') {
			$dataProvider = new CActiveDataProvider('Tipos');
			$this->render('index', array(
				'dataProvider' => $dataProvider,
			));
		} else {	
			$this->redirect(array('tarefa/userHome'));
		}	
	}

	public function actionAdmin() {
		
		if(Yii::app()->user->name == 'admin') {	
			$model = new Tipos('search');
			$model->unsetAttributes();
			if (isset($_GET['Tipos']))
				$model->setAttributes($_GET['Tipos']);
			$this->render('admin', array(
				'model' => $model,
			));
		} else {	
			$this->redirect(array('tarefa/userHome'));
		}	
	}
}
