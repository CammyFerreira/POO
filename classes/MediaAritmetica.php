<?php

require_once "Media.php";

class MediaA extends Media
{
    public $nota1;
    public $nota2;
    public $aluno;

    function __construct($n1, $n2, $aluno)
    {
        parent::__construct($n1, $n2, $aluno);
    }

    function mostrar()
    {
        parent::mostrar();
        echo parent::mediaGeometrica();
    }

    public function mediaAritmetica()
    {
         return ($this->nota1 + $this->nota2)/2;
    }
    public function mediaGeometrica()
    {
    }
}

