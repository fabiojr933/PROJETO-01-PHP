<?php
namespace app\models;

class Ex004{
    public function bruto($salario){
      $reajuste = 0.38 * $salario;
      $gratificacao = 0.20 * $salario;
      $total = $salario + $reajuste + $gratificacao;
      $desconto = $total * 0.15;
      $liquido = $total - $desconto;
      return $total;
    }
    public function liquido($bruto){
        $desconto = $bruto * 0.15;
        $liquido = $bruto - $desconto;
        return $$liquido; 
    }
}
?>