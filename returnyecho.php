<?php
class Operaciones{
    public $numero1;
    public $numero2;

    public function __constructor($numero1,$numero2){
        $this->numero1=$numero1;
        $this->numero2=$numero2;
        }
    public function suma($numero1,$numero2)
    {
        echo $numero1 + $numero2;
    }   
    public function resta($numero1,$numero2)
    {
return "$numero1 - $numero2";
    }
    public function multiplica($numero1,$numero2)
    {
        echo $numero1 * $numero2;
    } 
    public function dividir($numero1,$numero2)
    {
        return $numero1/$numero2;
    }
}

$sumando=new Operaciones();
$sumando->suma(14,14);
echo "<br>";
echo $sumando->resta(14,2);
echo "<br>";
$sumando->multiplica(14,2);
echo "<br>";
echo $sumando->dividir(20,2);
?>