<?php

abstract class Media
{
    public $nota1;
    public $nota2;
    public $aluno;

    function __construct($n1,$n2, $a) {
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->aluno = $a;
    }

    abstract function mediaGeometrica();
    abstract function mediaAritmetica();

    public function mostrar(){}

}
