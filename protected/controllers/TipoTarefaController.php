<?php

class TipoTarefaController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TiposTarefas'),
		));
	}

	public function actionCreate() {
		$model = new TiposTarefas;


		if (isset($_POST['TiposTarefas'])) {
			$model->setAttributes($_POST['TiposTarefas']);

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
		$model = $this->loadModel($id, 'TiposTarefas');


		if (isset($_POST['TiposTarefas'])) {
			$model->setAttributes($_POST['TiposTarefas']);

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
			$this->loadModel($id, 'TiposTarefas')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TiposTarefas');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TiposTarefas('search');
		$model->unsetAttributes();

		if (isset($_GET['TiposTarefas']))
			$model->setAttributes($_GET['TiposTarefas']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}