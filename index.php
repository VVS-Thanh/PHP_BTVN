<?php
echo '<h3>Bai tap 1</h3>';
$a = 0;
if($a % 2 == 0 ){
    echo $a. ' la so chan<br>';
}
else
    echo $a. ' la so le<br>';

echo '<hr>';

echo '<h3>Bai tap 2</h3>';
$b = rand(0,1);
if($b == 0){
    echo "Sap<br>";
}
else 
    echo "Ngua<br>";

echo '<hr>';

echo '<h3>Bai tap 3</h3>';

$year = '2001';
$age;
if($year != (int)$year || (int)$year < 1900){
    echo 'Nhap sai du lieu hoac nam nhap nho hon nam 1900! Vui long nhap lai';
}
else {
    $age = (int)date('Y') - $year;
    echo "Nam nay ban $age tuoi";
}

echo '<hr>';
echo '<h3>Bai tap 4</h3>';
$a = 10;
$b = 20;
if($a != (int)$a || $b != (int)$b){
    echo 'Nhap sai dinh dang du lieu';
}
else {
    echo "Gia tri so a va b truoc khi hoan vi la $a va $b<br>";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "Gia tri so a va b sau khi hoan vi la $a va $b<br>";
}

echo '<hr>';
echo '<h3>Bai tap 5</h3>';

$km = 200;
$soTien = 0;
if($km <= 1){
    $soTien = 1* 15000;
    echo $soTien;
}
elseif($km <= 5){
    $soTien = 1*15000 + ( $km - 1) *12000;
    echo $soTien;
}
elseif($km >= 6 && $km < 140) {
    $soTien = 1*15000 + (5 - 1)*12000 + ($km - 5)*9000;
    echo $soTien;
}
else {
    $soTien = (1*15000 + (5 - 1)*12000 + ($km - 5)*9000) * (1 - 0.12);
    echo $soTien;
}