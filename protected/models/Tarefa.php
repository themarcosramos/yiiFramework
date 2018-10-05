<?php

/**
 * This is the model class for table "tarefa".
 *
 * The followings are the available columns in table 'tarefa':
 * @property integer $idTarefa
 * @property string $titulo
 * @property string $privacidade
 * @property string $descricao
 * @property string $situacao
 * @property string $conslusao
 * @property integer $idTipo
 *
 * The followings are the available model relations:
 * @property Realizar[] $realizars
 * @property Tipo $idTipo0
 * @property Tipo[] $tipos
 */
class Tarefa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tarefa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tarefa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo', 'required'),
			array('idTipo', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			array('privacidade', 'length', 'max'=>7),
			array('descricao', 'length', 'max'=>200),
			array('situacao', 'length', 'max'=>9),
			array('conslusao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idTarefa, titulo, privacidade, descricao, situacao, conslusao, idTipo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'realizars' => array(self::HAS_MANY, 'Realizar', 'idTarefa'),
			'idTipo0' => array(self::BELONGS_TO, 'Tipo', 'idTipo'),
			'tipos' => array(self::HAS_MANY, 'Tipo', 'idTarefa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTarefa' => 'Id Tarefa',
			'titulo' => 'Titulo',
			'privacidade' => 'Privacidade',
			'descricao' => 'Descricao',
			'situacao' => 'Situacao',
			'conslusao' => 'Conslusao',
			'idTipo' => 'Id Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idTarefa',$this->idTarefa);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('privacidade',$this->privacidade,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('situacao',$this->situacao,true);
		$criteria->compare('conslusao',$this->conslusao,true);
		$criteria->compare('idTipo',$this->idTipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}