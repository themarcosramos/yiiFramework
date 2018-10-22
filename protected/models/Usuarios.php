<?php

Yii::import('application.models._base.BaseUsuarios');

class Usuarios extends BaseUsuarios
{
	protected $Password;
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function beforeSave() {
		
		if($this->senha != $this->Password) {
		}	
		(!empty( $this->nascimento))?$this->nascimento=date('Y-m-d',strtotime($this->nascimento)):"" ;
		(!empty($this->modificacao))?$this->modificacao=date('Y-m-d',strtotime($this->modificacao)):"" ;
		(!empty($this->criacao))?$this->criacao=date('Y-m-d',strtotime($this->criacao)):"" ;

		return parent::beforeSave();
	}

	public static function getIdUser() {
		
		$criteria = new CDbCriteria;
		$criteria->select = 'idUsuario';
		$criteria->condition = 'Login=:login';
		$criteria->params = array(':login' => Yii::app()->user->name);

		$model = new Usuarios();
		$usuario = $model->find($criteria);

		return $usuario->idUsuario;
	}
	
	public function attributeLabels() {
		return array(
			'idUsuario' => Yii::t('app', 'Usuário'),
			'nome' => Yii::t('app', 'Nome'),
			'sexo' => Yii::t('app', 'Sexo'),
			'nascimento' => Yii::t('app', 'Data de nascimento'),
			'email' => Yii::t('app', 'E-mail'),
			'login' => Yii::t('app', 'Login'),
			'telefone' => Yii::t('app', 'Telefone'),
			'senha' => Yii::t('app', 'Senha'),
			'criacao' => Yii::t('app', 'Data da criação'),
			'modificacao' => Yii::t('app', 'Data da modificação'),
			'tarefas' => null,
		);
	}	
	public function afterFind(){
		(!empty( $this->nascimento))?$this->nascimento=date('d/m/Y',strtotime($this->nascimento)):"" ;
		(!empty($this->modificacao))?$this->modificacao=date('d/m/Y',strtotime($this->modificacao)):"" ;
		(!empty($this->criacao))?$this->criacao=date('d/m/Y',strtotime($this->criacao)):"" ;
		return parent:: afterFind();
	}

	public function IsAdmin(){
		($this->login=='admin')?$res=true: $res=false;
		return $res;

	}
}