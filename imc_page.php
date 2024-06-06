<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
            background-color: #333;
            color: #fff;
        }
        body{
            
            text-align: center;
        }
        .contenedor{

            height: 50vh;
            margin: 5%;

            display:flex;
            flex-direction: column;
            justify-content: center;

        }

    </style>
</head>
<body>
    <div class="contenedor">
        <?php
        /*
        imc_page.php: recogerá los datos del formulario y los usará para realizar las operaciones usando las funciones del archivo “functions.php”.
        Se mostrará el mensaje “Hola nombre” y a continuación se comprobará que el usuario es mayor de edad. Si no lo es, se mostrará el mensaje “Lo sentimos, 
        esta página es para mayores de edad”. Si es mayor de edad, se mostrará el mensaje “Rondas los X años”. Además, en caso de ser mayor de edad, se calculará 
        su IMC y su estado de peso, y se mostrará el resultado en un mensaje del tipo “Tu IMC es de X.XX. Según tu IMC, este es tu estado: XXXXX”. 
        El estado puede ser “Peso insuficiente”, “Peso normal”, “Sobrepeso” u “Obesidad”.

        */
        include 'utils\functions.php';

        

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            
            echo "Bienvenido ".$_POST["nombre"]."<br>"; 
            
            $year=intval($_POST["year"]);

            $edad_usuario= mayor_edad($year);

            if ($edad_usuario>=18) {
                
                echo "Rondas los $edad_usuario años"."<br>";

                //calculo_imc

                $peso=floatval($_POST["peso"]);
                $altura=floatval($_POST["altura"]);

                //estado segun el imc
                $imc= calculo_imc($peso, $altura);
                $estado_imc=imc_status($imc);
                echo "Tu IMC es de $imc. Según tu IMC este es tu estado: $estado_imc"."<br>";
                echo "<br>";
                echo '<a href="index.php"><button>Volver a la pagina inicial</button></a>';
            } else {
                echo  "Lo sentimos, esta página es para mayores de edad"."<br>";
                echo "<br>";
                echo '<a href="index.php"><button>Volver a la pagina inicial</button></a>';
            }
            
        } else {
            echo "Error: no se ha enviado el formulario";
        }
       
       

        
        ?>  
    </div> 
</body>
</html>
