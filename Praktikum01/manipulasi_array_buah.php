<?php
$arrayBuah = ["semangka","melon","jeruk","pepaya"];

//mengurutkan array
sort($arrayBuah);

//menghapus array paling belakang
array_pop($arrayBuah);

//menghapus spesifik value array tertentu
unset($arrayBuah[1]);

//menambah value array di belakang
array_push($arrayBuah,"Apel");

//menghapus value array yang paling depan
array_shift($arrayBuah);

//menambah value array di depan
array_unshift($arrayBuah, "Mangga");

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}