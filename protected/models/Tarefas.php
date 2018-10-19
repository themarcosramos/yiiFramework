<?php

Yii::import('application.models._base.BaseTarefas');

class Tarefas extends BaseTarefas
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	public function attributeLabels() {
		return array(
			'idTarefa' => Yii::t('app', 'Tarefa'),
			'titulo' => Yii::t('app', 'Título'),
			'privacidade' => Yii::t('app', 'Privacidade'),
			'descricao' => Yii::t('app', 'Descrição'),
			'T_status' => Yii::t('app', 'Status'),
			'conclusao' => Yii::t('app', 'Data da conclusão'),
			'criacao' => Yii::t('app', 'Data da criação'),
			'modificacao' => Yii::t('app', 'Data da modificação'),
			'usuario' => null,
			'tipo' => null,
			'usuario0' => null,
			'tipo0' => null,
		);
	}
	public function getTarefasUser($id) {
			
		$criteria = new CDbCriteria;
		$criteria->compare('idTarefa', $this->idTarefa, true);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('usuario', $id, true);
		$criteria->compare('privacidade', $this->privacidade, true);
		$criteria->compare('descricao', $this->descricao, true);
		$criteria->compare('tipo', $this->tipo);
		$criteria->compare('T_status',$this->T_status, true);
		$criteria->compare('conclusao', $this->conclusao, true);
		$criteria->compare('criacao', $this->criacao, true);
		$criteria->compare('modificacao', $this->modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));	
	}

	public function getTarefasPendentes($id) {
		$criteria = new CDbCriteria;
		$criteria->compare('idTarefa', $this->idTarefa, true);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('usuario', $id, true);
		$criteria->compare('privacidade', $this->privacidade, true);
		$criteria->compare('descricao', $this->descricao, true);
		$criteria->compare('tipo', $this->tipo);
		$criteria->compare('T_status',$this->T_status, true);
		$criteria->compare('conclusao', $this->conclusao, true);
		$criteria->compare('criacao', $this->criacao, true);
		$criteria->compare('modificacao', $this->modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));		
	}

	public function getTarefasPublicas() {

		$criteria = new CDbCriteria;

		$criteria = new CDbCriteria;
		$criteria->compare('idTarefa', $this->idTarefa, true);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('usuario', $this->usuario, true);
		$criteria->compare('privacidade', $this->privacidade, true);
		$criteria->compare('descricao', $this->descricao, true);
		$criteria->compare('tipo', $this->tipo);
		$criteria->compare('T_status',$this->T_status, true);
		$criteria->compare('conclusao', $this->conclusao, true);
		$criteria->compare('criacao', $this->criacao, true);
		$criteria->compare('modificacao', $this->modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}