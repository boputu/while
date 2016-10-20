<?php

//Almacenamos el número inicial en una variable
$numero=1;
//Lo pondremos fuera del while si no se repetiria todo el rato la frase "Tabla de..."
echo "<b>Tabla de multiplicar del 2</b> <br>";
//A través del comando while elegimos la secuencia (en este caso hasta que el $numero tome el valor 10)
while ($numero <= 10) {
//Almacenamos la operación en una nueva variable (en este caso queremos multiplicar)
$tabla=$numero * 2;
//Mostramos en pantalla la operación de arriba a abajo (importante poner <br> para salto de linea)
echo "2 * $numero = <b>$tabla</b> <br>";
//Hacemos que la secuencia vaya creciendo hasta alcanzar el valor previamente asignado en el while (10)
//Una vez llege al valor asignado (10) se parará la secuencia.
//Si en el while ponemos 20 por ejemplo la secuencia se parará en el 2 * 20
//++ indica crecer, -- indica decrecer, si ponemos ++ indica que el número almacenado en la variable crecerá hasta llegar al while.
//Si ponemos -- decrecerá a partir del número de la variable hasta llegar al número del while.
//En este caso si ponemos -- nunca llegará a 10 al ir decreciend y se creará un bucle infinito.
$numero++;
}
 ?>
