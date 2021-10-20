<?php

#Control de password





#1.Debe tener al menos 8 carácteres

#$password = readline('Inserta una passsword: ');

/* $lenght = checkLenght($password);
$number = checkNumber($password);
$upper = checkUpper($password); */


function checkLenght($string){
    if (strlen($string)>=8) {
        return true;
    }else{
        return false;
    }
}

#checkLenght($password);



#2.Debe contener un número
function checkNumber($string){
for ($i=0; $i < strlen($string) ; $i++) { 
   if (is_numeric($string[$i])) {
    return true;
 }
} 
return false;
}

#checkNumber($password);
#3.Debe contener una letra mayúscula
function checkUpper($string){
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (ctype_upper($string[$i])) {
           return true;
        }
    } 
    return false;
}
#checkUpper($password);

function checkPassword($string){
    if(checkLenght($string) && checkNumber($string) && checkUpper($string)){

        echo "La password es válida";
    }else{
        echo "La password no es válida";
    }

}

#checkPassword($password);






/* if ($lenght && $number && $upper){
    echo "La password es válida";

}else {
    echo "La password no es válida";
} */






