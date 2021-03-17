<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Ex003;

class Ex003Controller extends Controller{
    
   public function index(){
   $dados["resultado"] = null;
   $dados["view"] = "home";
   $this->load("03/index", $dados);
   } 

   public function Dias(){
     
      $obj = new Ex003();
      $ano = $_POST["ano"];
      $meses = $_POST["meses"];
      $dias = $_POST["dias"];

      $dados["resultado"] = $obj->DiasVivido($ano, $meses, $dias);
      $dados["ano"] = $ano;
      $dados["dias"] = $dias;
      $dados["meses"] = $meses;

      $dados["view"] = "home";
      $this->load("03/index", $dados);
   }
}
