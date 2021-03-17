<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Ex005;

class Ex005Controller extends Controller{
    
   public function index(){
   $dados["resultado"] = null;
   $dados["view"] = "home";
   $this->load("05/index", $dados);
   } 
  
   public function salario(){
      $obj = new Ex005();

      $salario = $_POST["salario"];
      $tempo = $_POST["tempo"];

      $dados["bonus"] = $obj->bonus($salario, $tempo);
      $dados["salario"] = $obj->salario($salario, $dados["bonus"]);
      

      $dados["view"] = "home";
      $this->load("05/index", $dados);
   }
  
}
