<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3 - pętle</title>
</head>
<body>

<?php
echo "<h3>Zadanie 1</h3><p>Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 1.</p>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<h3>Zadanie 2</h3><p>Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 10 w kolejności malejącej.</p>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}

echo "<h3>Zadanie 3</h3><p>Obliczy i wyświetli na ekranie sumę kolejnych 10 liczb całkowitych począwszy od 1.</p>";
$suma3 = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma3 = $suma3 + $i;
}
echo "Suma: " . $suma3;

echo "<h3>Zadanie 4</h3><p>Wyświetli na ekranie 10 kolejnych parzystych liczb całkowitych począwszy od 2.</p>";
for ($i = 2; $i <= 20; $i = $i + 2) {
    echo $i . "<br>";
}

echo "<h3>Zadanie 5</h3>Pracownik przez X miesięcy odkłada co miesiąc Y zł. W każdym miesiącu z całej odłożonej na tą chwilę kwoty uzyskuje 8% odsetek. Jaką kwotę zgromadzi pracownik ?";
$miesiace = 12;
$kwota = 500;
$suma5 = 0;
for ($i = 1; $i <= $miesiace; $i++) {
    $suma5 = $suma5 + $kwota;
    $suma5 = $suma5 * 1.08;
}
echo "Zgromadzona kwota: " . $suma5 . " zł";

echo "<h3>Zadanie 6</h3><p>Obliczy sumę elementów ciągu arytmetycznego, składającego się ze 100 elementów, z których każdy kolejny jest większy od poprzedniego o 10. Pierwszy element wynosi 5.</p>";
$suma6 = 0;
$liczba6 = 5;
for ($i = 1; $i <= 100; $i++) {
    $suma6 = $suma6 + $liczba6;
    $liczba6 = $liczba6 + 10;
}
echo "Suma ciągu: " . $suma6;

echo "<h3>Zadanie 7</h3><p>Obliczy ilość cegieł w piramidzie o podstawie 10 x 10 cegieł.</p>";
$suma7 = 0;
for ($i = 10; $i >= 1; $i--) {
    $suma7 = $suma7 + $i * $i;
}
echo "Liczba cegieł: " . $suma7;

echo "<h3>Zadanie 8</h3><p>Obliczy ilość cegieł w ścianie o podstawie X cegieł, wysokości Y rzędów cegieł, gdzie każdy kolejny stawiany rząd cegieł jest o Z cegieł krótszy od poprzedniego (niższego).</p>";
$x8 = 20;
$y8 = 5;
$z8 = 2;
$suma8 = 0;
for ($i = 1; $i <= $y8; $i++) {
    $suma8 = $suma8 + $x8;
    $x8 = $x8 - $z8;
}
echo "Liczba cegieł: " . $suma8;

echo "<h3>Zadanie 9</h3><p>Oblicza wagę ściany z 8. podpunktu, przy założeniu, że jedna cegła waży K kilogramów.</p>";
$x9 = 20;
$y9 = 5;
$z9 = 2;
$k9 = 3;
$suma9 = 0;
for ($i = 1; $i <= $y9; $i++) {
    $suma9 = $suma9 + $x9;
    $x9 = $x9 - $z9;
}
$waga = $suma9 * $k9;
echo "Liczba cegieł: " . $suma9 . "<br>";
echo "Waga ściany: " . $waga . " kg";

echo "<h3>Zadanie 10</h3><p>Symulujący działanie prostego kalkulatora.</p>";
$a10 = 20;
$b10 = 5;
$dzialanie = "+";
if ($dzialanie == "+") {
    echo $a10 + $b10;
}
if ($dzialanie == "-") {
    echo $a10 - $b10;
}
if ($dzialanie == "*") {
    echo $a10 * $b10;
}
if ($dzialanie == "/") {
    echo $a10 / $b10;
}

echo "<h3>Zadanie 11</h3><p>Wyświetli na ekranie ciąg arytmetyczny składający się z N elementów, gdzie pierwszy element ma wartość X, a różnica pomiędzy kolejnymi elementami ciągu wynosi Y.</p>";
$n11 = 10;
$x11 = 5;
$y11 = 3;
for ($i = 1; $i <= $n11; $i++) {
    echo $x11 . "<br>";
    $x11 = $x11 + $y11;
}

echo "<h3>Zadanie 12</h3><p>Oblicza sumę dwóch liczb podanych przez użytkownika. Algorytm ma działać tak długo, aż suma podanych liczb będzie wynosiła 0.</p>";
$suma12 = 1;
while ($suma12 != 0) {
    $a12 = rand(-10, 10);
    $b12 = rand(-10, 10);
    $suma12 = $a12 + $b12;
    echo $a12 . " + " . $b12 . " = " . $suma12 . "<br>";
}
echo "Suma wynosi 0.";

echo "<h3>Zadanie 13</h3><p>Algorytm oblicza silnię wprowadzonej przez użytkownika liczby.</p>";
$liczba13 = 5;
$silnia = 1;
for ($i = 1; $i <= $liczba13; $i++) {
    $silnia = $silnia * $i;
}
echo "Silnia liczby " . $liczba13 . ": " . $silnia;

echo "<h3>Zadanie 14</h3><p>Wypisuje na ekran ciąg n liczb, z których każda kolejna jest kwadratem poprzedniej liczby z ciągu. Wartość pierwszej liczby podaje użytkownik.</p>";
$liczba14 = 2;
$n14 = 6;
for ($i = 1; $i <= $n14; $i++) {
    echo $liczba14 . "<br>";
    $liczba14 = $liczba14 * $liczba14;
}

echo "<h3>Zadanie 15</h3><p>Oblicza sumę oraz średnią z 10 losowych liczb z przedziału <50,100>.</p>";
$suma15 = 0;
for ($i = 1; $i <= 10; $i++) {

    $liczba15 = rand(50, 100);

    echo $liczba15 . "<br>";

    $suma15 = $suma15 + $liczba15;
}
$srednia = $suma15 / 10;
echo "Suma: " . $suma15 . "<br>";
echo "Średnia: " . $srednia;
?>
</body>
</html>