<?php

class Empleado{
    public String $nombre;
    public float $sueldo;
    
    function iniciar (String $nom,float $suel){
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
    $empl1 = new Empleado();
    $empl2 = new Empleado();
    $empl1->iniciar("Gina",4500);
    $empl2 ->iniciar("Raul",9700);
    echo "<p2>". $empl1->pagar() . "</p2>";
    echo $empl2->pagar();


?>

