<?php

Yii::import('application.models._base.BaseTipos');

class Tipos extends BaseTipos
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}


	public function removeTipoTarefa($id){
        $tipoTarefa = Tipos::model()->findByPk($id);
        $qtd = Tarefas::model()->countByAttributes(array('tipo'=> $id));
        if($qtd==0)
            return "Deseja deletar a tarefa $tipoTarefa->nome.";
        else if($qtd==1)
            return "Deseja deletar a tarefa $tipoTarefa->nome, a mesma está selecionada em $qtd tarefa que também será apagada.";
        else
            return "Deseja deletar a tarefa $tipoTarefa->nome, a mesma está selecionada em $qtd tarefas que também serão apagadas.";  
    }
}