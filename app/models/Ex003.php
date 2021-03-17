<?php
namespace app\models;

class Ex003{
    public function DiasVivido($ano, $mes, $dias){
        $resultado = ($ano * 365) + ($mes * 30) + $dias;
        return $resultado;
    }
}
?>