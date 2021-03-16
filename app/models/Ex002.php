<?php
namespace app\models;

class Ex002{
    public function Media($nota1, $nota2, $nota3){
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return $media;
    }
}
?>