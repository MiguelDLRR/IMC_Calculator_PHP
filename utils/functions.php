<?php
//mayor_edad: recibe como parámetro un número que será el valor que ha introducido el usuario en el campo “year” del formulario.
// Ésta función calculará la edad del usuario, y la devolverá. 

//calculo_imc: recibe como parámetros el peso y la altura del usuario (introducidos en el formulario) y calculará el IMC (peso/altura).
// Devolverá este valor redondeado a dos decimales (función sprintf).

//imc_status: recibe como parámetro el IMC calculado y devolverá una de las siguientes frases, en función de qué condición se cumpla:
//-Si el IMC es menor de 18.5, “Peso insuficiente”.
//-Si el IMC está entre 18.5 y 25, “Peso normal”.
//-Si el IMC está entre 25 y 50, “Sobrepeso”.
//-Si el IMC es superior a 50, “Obesidad”.

$year=intval($_POST["year"]);
$peso=floatval($_POST["peso"]);
$altura=floatval($_POST["altura"]);


function mayor_edad($year){

    $año_actual=date('Y');
    $edad=$año_actual-$year;

    return $edad;

}




function calculo_imc($peso, $altura){

    $imc= $peso / ($altura*$altura);
    $imc_redondeado=sprintf("%.2f", $imc);
    return $imc_redondeado;


}




function imc_status($imc_redondeado){
    if($imc_redondeado<18.5){
        return "Peso insuficiente";


    }elseif ($imc_redondeado>=18.5 && $imc_redondeado<=25) {
        return "Peso normal";
    }elseif ($imc_redondeado>25 && $imc_redondeado<=50) {
        return "Sobrepeso";
    }elseif ($imc_redondeado>50) {
        return "Obesidad";
    } 
    
}



?>
