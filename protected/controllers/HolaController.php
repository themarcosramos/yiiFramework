<?php 
class HolaController extends Controller
{
    public function actionIndex()
    {
        $test="teste de controler";
        $this->render("index",array("model"=>$model,'test'=>$test));
    
    }

}


