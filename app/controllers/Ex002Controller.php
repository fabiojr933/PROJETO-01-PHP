<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Ex002;

class Ex002Controller extends Controller{
    
   public function index(){
   $dados["resultado"] = null;
   $dados["view"] = "home";
   $this->load("02/index", $dados);
   } 

   public function Media(){
      $obj = new Ex002();
      $nota1 = $_POST["nota1"];
      $nota2 = $_POST["nota2"];
      $nota3 = $_POST["nota3"];

      $dados["resultado"] = $obj->Media($nota1, $nota2, $nota3);
      $dados["nota1"] = $nota1;
      $dados["nota2"] = $nota2;
      $dados["nota3"] = $nota3;
     
      $dados["view"] = "home";
      $this->load("02/index", $dados);
   }
}
