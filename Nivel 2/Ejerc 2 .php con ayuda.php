<?php
class PokerDice{
     private $shapes = array("As","K","Q","J","7","8");

    // valor de la ultima tirada public $lastThrow;
    // tirar el dado

    public function thrown() {  // generar un index aleatorio entre el 0 y 5
        $i = mt_rand(0,5);


        // asignar un valor aleatorio del array $shapes a la propiedad $lasThrow
        $this ->lastThrow = $this->shapes[i];
    }
    //obtener el numero de tiradas
    public static function GetTotalThrows($diceArray){
        $totalThrows = 0;

        // comprobar todos los dados
        foreach ($diceArray as $dice){
            // sumamos 1 al numero de tiradas
            $totalThrows++;
        }
    }
        // obtener el nombre de la figura
        public function ShapeName(){
            return $this->lastThrow;
       
       
            // instanciamos los 5 dados
        $dice1 = new PokerDice();
        $dice2 = new PokerDice();
        $dice3 = new PokerDice();
        $dice4 = new PokerDice();
        $dice5 = new PokerDice();

        
        // generamos array para las tiradas
        $dices= ($dice1; $dice2; $dice3; $dice4; $dice5);
        // tirar los dados
        $dice1->throw();
        $dice2->throw();
        $dice4->throw();
        $dice4->throw();
        $dice5->throw();    
        
        // mostrar el nombre de la figura de cada uno de los dados
        echo "$dice1".$dice1->ShapeName() ."<br>";
        echo "$dice2".$dice2->ShapeName() ."<br>";
        echo "$dice3".$dice3->ShapeName() ."<br>";
        echo "$dice4".$dice4->ShapeName() ."<br>";
        echo "$dice5".$dice5->ShapeName() ."<br>";
        
        ?>
