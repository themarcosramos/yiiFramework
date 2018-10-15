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
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Tarefas'),
		));
	}

	public function actionCreate() {
		$model = new Tarefas;


		if (isset($_POST['Tarefas'])) {
			$model->setAttributes($_POST['Tarefas']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idTarefa));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Tarefas');


		if (isset($_POST['Tarefas'])) {
			$model->setAttributes($_POST['Tarefas']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->idTarefa));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Tarefas')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Tarefas');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Tarefas('search');
		$model->unsetAttributes();

		if (isset($_GET['Tarefas']))
			$model->setAttributes($_GET['Tarefas']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}