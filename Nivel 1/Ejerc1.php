<?php

class empleado{
    public $nombre;
    public $sueldo;
    
    function iniciar ($nom,$suel){
        $this->nombre = $nom;
        $this->sueldo = $suel;
    }
   
   
    function pagar(){
        if ($this->sueldo >= 6000){
            echo "$this->nombre, estas obligado a pagar impuestos.", "<br>";
        }else {
            echo "$this->nombre, estas libre de pagar impuestos.","<br>";
        }
    }
}
    $empl1 = new empleado();
    $empl2 = new empleado();
    $empl1->iniciar("Gina",4500);
    $empl2 ->iniciar("Raul",9700);
    echo $empl1->pagar();
    echo $empl2->pagar();


?>

