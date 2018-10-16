<?php

/**
 * This is the model base class for the table "Tarefas".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Tarefas".
 *
 * Columns in table "Tarefas" available as properties of the model,
 * followed by relations of table "Tarefas" available as properties of the model.
 *
 * @property integer $idTarefa
 * @property string $titulo
 * @property string $privacidade
 * @property string $descricao
 * @property string $T_status
 * @property string $conclusao
 * @property string $criacao
 * @property string $modificacao
 * @property integer $usuario
 * @property integer $tipo
 *
 * @property Usuarios $usuario0
 * @property Tipos $tipo0
 */
abstract class BaseTarefas extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'Tarefas';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tarefa|Tarefas', $n);
	}

	public static function representingColumn() {
		return 'titulo';
	}

	public function rules() {
		return array(
			array('titulo, privacidade, T_status', 'required'),
			array('usuario, tipo', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>150),
			array('privacidade', 'length', 'max'=>9),
			array('descricao', 'length', 'max'=>250),
			array('T_status', 'length', 'max'=>10),
			array('conclusao, criacao, modificacao', 'safe'),
			array('descricao, conclusao, criacao, modificacao, usuario, tipo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idTarefa, titulo, privacidade, descricao, T_status, conclusao, criacao, modificacao, usuario, tipo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'usuario0' => array(self::BELONGS_TO, 'Usuarios', 'usuario'),
			'tipo0' => array(self::BELONGS_TO, 'Tipos', 'tipo'),
		);
	}

	public function pivotModels() {
		return array(
		);
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

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idTarefa', $this->idTarefa);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('privacidade', $this->privacidade, true);
		$criteria->compare('descricao', $this->descricao, true);
		$criteria->compare('T_status', $this->T_status, true);
		$criteria->compare('conclusao', $this->conclusao, true);
		$criteria->compare('criacao', $this->criacao, true);
		$criteria->compare('modificacao', $this->modificacao, true);
		$criteria->compare('usuario', $this->usuario);
		$criteria->compare('tipo', $this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}