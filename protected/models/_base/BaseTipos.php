<?php

/**
 * This is the model base class for the table "Tipos".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Tipos".
 *
 * Columns in table "Tipos" available as properties of the model,
 * followed by relations of table "Tipos" available as properties of the model.
 *
 * @property integer $idTipo
 * @property string $nome
 * @property string $criacao
 * @property string $modificacao
 *
 * @property Tarefas[] $tarefases
 */
abstract class BaseTipos extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'Tipos';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tipo|Tipos', $n);
	}

	public static function representingColumn() {
		return 'nome';
	}

	public function rules() {
		return array(
			array('nome', 'required'),
			array('nome', 'length', 'max'=>150),
			array('criacao, modificacao', 'safe'),
			array('criacao, modificacao', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idTipo, nome, criacao, modificacao', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tarefases' => array(self::HAS_MANY, 'Tarefas', 'tipo'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idTipo' => Yii::t('app', 'Id Tipo'),
			'nome' => Yii::t('app', 'Nome'),
			'criacao' => Yii::t('app', 'Criacao'),
			'modificacao' => Yii::t('app', 'Modificacao'),
			'tarefases' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idTipo', $this->idTipo);
		$criteria->compare('nome', $this->nome, true);
		$criteria->compare('criacao', $this->criacao, true);
		$criteria->compare('modificacao', $this->modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}