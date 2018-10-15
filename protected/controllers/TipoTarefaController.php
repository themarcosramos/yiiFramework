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
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Tipos'),
		));
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
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Tipos')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Tipos');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Tipos('search');
		$model->unsetAttributes();

		if (isset($_GET['Tipos']))
			$model->setAttributes($_GET['Tipos']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}