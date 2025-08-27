<?php
echo "Nama : Yuviar Nuzul Ramadhani";
echo "<br />";
echo "NIM : E41240578";
echo "<br />";
echo "<br />";
echo "Kelipatan 2 dimulai dari 2";
echo "<br />";
$kelipatanDua = 2;
for ($i = 0; $i <= 10; $i++) {
    echo $kelipatanDua;
    echo " ";
    $kelipatanDua *= 2;
}
echo "<br />";
echo "<br />";
echo "Kelipatan 2 dikurangi bilangan 1 dimulai dari 12";
echo "<br />";
$kelipatanDua = 12;
for ($i = 0; $i <= 5; $i++) {
    echo $kelipatanDua;
    echo " ";
    $kelipatanDua *= 2;
    echo $kelipatanDua;
    echo " ";
    $kelipatanDua -= 1;
    echo " ";
}
