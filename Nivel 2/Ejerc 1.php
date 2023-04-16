<?php

    class PokerDice{

        public $carasDado=array("As","K","Q","J","7","8");
      

        public function throw(){
                $val1 = array_rand($this->carasDado);// esto muestra el valor d l cara dentro del array
                $i= $this->carasDado[$val1];// se crea un valor para que te de los valores del array.
                //return $i;// esto devuelve el objet de la array.
                $this->ultThrow = $i;// array de la ultimas tiradas
                return $i;

          }
          public static function totalThrow($tiradas){
              $totalThrow = 0;
              foreach ($tiradas as $tirada){
                if ($tirada -> ultThrow ){

                    $totalThrow++;
                }

              }
              return $totalThrow;
              
          }
          public function ShapeName(){
           return $this->$ultThrow;
          }
    }
    $tirada1 = new PokerDice();
    $tirada2 = new PokerDice();
    $tirada3 = new PokerDice();
    $tirada4 = new PokerDice();
    $tirada5 = new PokerDice();

    $tiradas=array ($tirada1,$tirada2,$tirada3,$tirada4,$tirada5);

    echo $tirada1->throw().",";
    echo $tirada2->throw().",";
    echo $tirada3->throw().",";
    echo $tirada4->throw().",";
    echo $tirada5->throw().",";

    echo "Dado1 " . $tirada1->ShapeName() . "<br>";
    echo "Dado2 " . $tirada2->ShapeName() . "<br>";
    echo "Dado3 " . $tirada3->ShapeName() . "<br>";
    echo "Dado4 " . $tirada4->ShapeName() . "<br>";
    echo "Dado5 " . $tirada5->ShapeName() . "<br>";

?>



