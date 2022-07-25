<?php

$nilai = "B";

switch ($nilai){
    case "A":
        echo "Anda Lulus Dengan Sangat Baik " . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
    break;
    case "D":
        echo "Anda Tidak " . PHP_EOL;
        break;
    default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}