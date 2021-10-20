<?php

#variable global scope

$yo = "Gracia\n"; #string
#echo $yo;

$yo = "Gemma\n";

#echo $yo;

#constante super global

const HACK6 = "Aulab\n";

#echo HACK6;


//data types primitives
$a = 5; #integer
$n = 5.5; #float
$yo = "Gracia\n"; #string
$b = true; #boolean

$number = "5";

$suma = $a + $number; 

$str = "Hola $yo";

#echo $str;


$clase = array('Gracia', 'Nico G', 'Nico M', 'Nahu'); #array indexado 

$clase2 = ['Gemma', 'Arantxa', 'Oscar', 'Chema' ]; #array indexado

#array de arrays o array multidimensional
$staff  = [
    ['Gracia', 'Nico G', 'Nico M', 'Nahu'],
    ['Hackademy', 6]
    
];


#array clave-valor





$st = "5"; #string

$numb = 5;#integer

#var_dump ($st == $numb);


$cadena = "Hola";

$cadena2 = "Gemma";

#echo $cadena . $cadena2 . "\n";

#echo $cadena . " como estás " . $cadena2;



#condicionales


//si Nico es mayor que 30 años acceso de mayores de 30
//si Nico tiene entre 18 y 30, es joven 
//si Nico es menor/igual a 17 años no puede acceder



/* $color = readline("Inserta color: ");

switch ($color) {
    case 'rojo':
       echo "El color es rojo";
       break;

    case 'amarillo':
        echo "El color es amarillo";
        break;
    
    default:
        echo "No tenemos ese color";
        break;
} */

/* $nico = 15;


if($nico > 30){
    echo "Acceso mayores de 30";
}elseif($nico >=18 && $nico <=30){
    echo "Es joven";

}else{
    echo "No puede acceder";
} */


$users = ['Gracia', 'Nico', 'Gemma'];

for ($i=0; $i <count($users) ; $i++) { 
   #echo $users[$i]. "\n";
}

foreach ($users as $user){
    #echo $user . "\n";
}


$contador = 0;
while ($contador < count($users)) {
    #echo $users[$contador] . "\n";
    $contador++;

}

$a = 0;
do{
    #$a = readline('Inserta número: ');
} while ($a <= 10);
  




$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);

var_dump($array);

    
    



















