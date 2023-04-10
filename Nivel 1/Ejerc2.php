<?php
class Shape {
    public $ancho;
    public $alto;

    public function __construct($an,$al){// definimos el constructor con los datos
        $this->ancho=$an;
        $this->alto=$al;
    }
}


class Triangulo extends Shape{// creamos una subclase para cada area que vamos a calcular.

        public function area(){// creamos la funtcion area 
            return "El area del Trianglo es: " . ($this-> ancho * $this-> alto)/2 . "<br>"; // definimos la funcion return para que nos devuelva los datos con la funcion echo $Triangulo->area();
        }
        
    } 
class Rectangulo extends Shape{

        public function area2(){
            return "El area del Rectangulo es: " . ($this->ancho * $this->alto) . "<br>";
        }
    }

$triangulo = new Triangulo(15,10);// creamos los datos del objeto ya que no le hemos dado valor anteriormente (instanciar).
$rectangle = new Rectangulo(50,6);

echo $triangulo->area();
echo $rectangle->area2();



/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.
*/
?>