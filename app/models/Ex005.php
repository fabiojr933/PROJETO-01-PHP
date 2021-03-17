<?php
namespace app\models;

class Ex005{
  public function bonus($salario, $tempo){
    if($tempo >= 5){
      return $salario * 0.20;
    }else{
      return $salario * 0.10;
    }
  }
  public function salario($salario, $bonus){
    return $salario + $bonus;
  }
}
?>