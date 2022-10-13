<?php

require_once "Media.php";

class MediaG extends Media
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
        
    }
    public function mediaGeometrica()
    {
        return sqrt($this->nota1 * $this->nota2)/2;
    }


}
