<?php
$potega=2**10;
echo $potega;
 
 
 
//operatory bitowe
$x=0b1010;
echo $x;
$x=$x>>1; //przesunięcie bitowe lewo
echo $x;
 
$x=$x<<2; //przesunięcie bitowe w prawo
echo $x;
 
//operatory
$x=10;
$y=20;
$result = $x<=>$y; //-1 oznacza że liczba mniejsza, 0 - identyczne, 1-większa
echo $result;
 
//równe-idenetyczne
$x=1;
$y=1.0;
 
if  ($x==$y)
echo 'liczby są równe';
else echo 'nierówne';
 
 
if ($x===$y)
echo 'są identyczne';
else  echo 'nieidentyczne';
 
echo gettype ($x); //pokazuje typ danych zmiennej
/* 
//OPERATORY rzutowania
 
$text1="123asd";
$x1=(int $text1);//rzutowanie, zamian typu danych
echo $x1,"<br>"; //zostanie 123
 
 
$text2=0;
$x2=(bool $text2);
echo $x2; //każda wartość różna od 0 wyświetla 1, równa się 0 nic nie wyświetla.
 
$text3=10;
$x3=(unset $text3); // zamienia na wartość NULL, usuwa zmienną z pamięci
echo $text3; //
echo $x3; // zamienia na wartość NULL, usuwa zmienną z pamięci,
 */
//ROZMIARY
echo PHP_INT_SIZE,"<br>"; // wyświetla rozmiar danego typu
 
/*KONTROLA TYPU zmiennej
x=10;
echo is_int $x; //czy zmienna x jest intem? 1-jest -1/false nie
 */
//OPERATOR IGNOROWANIA BŁĘDÓW @-ignoruje błędy
/*$w;
echo @$w;
echo gettype ($w); //wyświetli że typ jest NULL
 */
//ZMIENNE SUPERGLOBALNE
//[$_]+GET, POST, COOK, SERVER, SESSION, FILES
 /*
echo $_SERVER(;SERVER_PORT'), "<br>";
echo $_SERVER(;SERVER_NAME'), "<br>";
echo $_SERVER(;SERVER_DOCUMENT_ROOT'), "<br>";
 
//LOKALIZACJA PLIKU
$filelocal().=$_SERVER('SERVER_DOCUMENT_ROOT');
$filelocal().=$_SERVER
*/

// stałę predefiniowane
    echo PHP_VERSION; // 7.2.9
    echo "<hr>";
    echo PHP_OS; // WINNT

?>