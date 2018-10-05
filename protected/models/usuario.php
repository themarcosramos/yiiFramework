<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $nome
 * @property string $nascimento
 * @property string $sexo
 * @property string $telefone
 * @property string $email
 * @property string $login
 * @property string $senha
 *
 * The followings are the available model relations:
 * @property Realizar[] $realizars
 */
class usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, email, login, senha', 'required'),
			array('nome', 'length', 'max'=>50),
			array('sexo', 'length', 'max'=>1),
			array('telefone', 'length', 'max'=>20),
			array('email, login, senha', 'length', 'max'=>128),
			array('nascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, nome, nascimento, sexo, telefone, email, login, senha', 'safe', 'on'=>'search'),
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
			'realizars' => array(self::HAS_MANY, 'Realizar', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nome' => 'Nome',
			'nascimento' => 'Nascimento',
			'sexo' => 'Sexo',
			'telefone' => 'Telefone',
			'email' => 'Email',
			'login' => 'Login',
			'senha' => 'Senha',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('nascimento',$this->nascimento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('senha',$this->senha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}