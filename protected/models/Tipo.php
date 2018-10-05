<?php

/**
 * This is the model class for table "tipo".
 *
 * The followings are the available columns in table 'tipo':
 * @property integer $idTipo
 * @property string $nome
 * @property integer $idTarefa
 *
 * The followings are the available model relations:
 * @property Tarefa[] $tarefas
 * @property Tarefa $idTarefa0
 */
class Tipo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipo the static model class
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
		return 'tipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idTarefa', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idTipo, nome, idTarefa', 'safe', 'on'=>'search'),
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
			'tarefas' => array(self::HAS_MANY, 'Tarefa', 'idTipo'),
			'idTarefa0' => array(self::BELONGS_TO, 'Tarefa', 'idTarefa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTipo' => 'Id Tipo',
			'nome' => 'Nome',
			'idTarefa' => 'Id Tarefa',
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

		$criteria->compare('idTipo',$this->idTipo);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('idTarefa',$this->idTarefa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}