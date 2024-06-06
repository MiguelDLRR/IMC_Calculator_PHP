# IMC_Calculator_PHP
Creación de una aplicación web que calcula el IMC del usuario.
En el directorio “includes” están incluidos los archivos con el código HTML de la aplicación. 
Son los siguientes:
-header.html: contiene el código HTML para la cabecera de la aplicación .
-form.html: contiene un formulario de tipo POST con los siguientes campos de texto: name (nombre del usuario), year (año de nacimiento del usuario), weight (peso del usuario, en kilos), height (altura del usuario, en metros). Tendrá un botón que, al pulsarlo, nos llevara a la página imc_page.php.
-footer.html: contiene el código HTML para el pie de página de la aplicación e información de contacto vía email.

En el directorio “utils” encontramos el archivo functions.php que tendrá las siguientes funciones:
-mayor_edad: recibe como parámetro un número que será el valor que ha introducido el usuario en el campo “year” del formulario. Ésta función calculará la edad del usuario, y la devolverá. 
-calculo_imc: recibe como parámetros el peso y la altura del usuario (introducidos en el formulario) y calculará el IMC (peso/altura2). Devolverá este valor redondeado a dos decimales (función sprintf).
-imc_status: recibe como parámetro el IMC calculado y devolverá una de las siguientes frases, en función de qué condición se cumpla:
  Si el IMC es menor de 18.5, “Peso insuficiente”.
  Si el IMC está entre 18.5 y 25, “Peso normal”.
  Si el IMC está entre 25 y 50, “Sobrepeso”.
  Si el IMC es superior a 50, “Obesidad”.

La aplicación tiene dos archivos PHP en el directorio raíz:

-index.php: incluye la cabecera, el formulario y el pie de página.
-imc_page.php: recoge los datos del formulario y los usa para realizar las operaciones usando las funciones del archivo “functions.php”. Se mostrará el mensaje “Hola nombre” y a continuación se comprobará que el usuario es mayor de edad. Si no lo es, se mostrará el mensaje “Lo sentimos, esta página es para mayores de edad”. Si es mayor de edad, se mostrará el mensaje “Rondas los X años”. Además, en caso de ser mayor de edad, se calculará su IMC y su estado de peso, y se mostrará el resultado en un mensaje del tipo “Tu IMC es de X.XX. Según tu IMC, este es tu estado: XXXXX”. El estado puede ser “Peso insuficiente”, “Peso normal”, “Sobrepeso” u “Obesidad”.


  

