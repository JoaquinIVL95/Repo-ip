<?php


/* PROGRAMA Desencriptado de números encriptados */
/* Programa para desencriptar números que tengan máximo 4 dígitos*/
/* ENTERO $numeroDesencriptado, $numeroEncriptado, $num2, $num3, $dig1, $dig2, $dig3,
$dig4 */


echo ("Ingrese el número encriptado (máximo de 4 dígitos) para desencriptar: ");
$numeroEncriptado = trim(fgets(STDIN));


//Separando el número encriptado en 4 dígitos diferentes
$dig4 = $numeroEncriptado % 10;
$num2 = intdiv($numeroEncriptado, 10);
$dig3 = $num2 % 10;
$num3 = intdiv($num2, 10);
$dig2 = $num3 % 10;
$dig1 = intdiv($num3, 10);


// Reemplazando cada dígito obtenido, por el módulo de la operación
$dig1 = ($dig1 + 3) % 10;
$dig2 = ($dig2 + 3) % 10;
$dig3 = ($dig3 + 3) % 10;
$dig4 = ($dig4 + 3) % 10;


// Intercambiando los dígitos (1 dígito con 3 dígito y 2 dígito con 4 dígito) 
//y realizando operación para obtener un solo entero
$dig3 = $dig3 * 1000;
$dig4 = $dig4 * 100;
$dig1 = $dig1 * 10;
$dig2 = $dig2 * 1;
$numeroDesencriptado = $dig3 + $dig4 + $dig1 + $dig2;


echo ("El número desencriptado es: " . $numeroDesencriptado);