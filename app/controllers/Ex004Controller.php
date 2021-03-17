<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Ex004;

class Ex004Controller extends Controller{
    
   public function index(){
   $dados["resultado"] = null;
   $dados["view"] = "home";
   $this->load("04/index", $dados);
   } 
  
   public function salario(){
      $obj = new Ex004();

      $nome = $_POST["nome"];
      $salario = $_POST["salario"];
      $idade = $_POST["idade"];
      $cargo = $_POST["cargo"];

      $dados["bruto"] = $obj->bruto($salario);
      $dados["liquido2"] = $obj->liquido($salario);
      $dados["nome"] = $nome;
      $dados["idade"] = $idade;
      $dados["cargo"] = $cargo;

      $dados["view"] = "home";
      $this->load("04/index", $dados);
    
   }
}
