<?php

//isi sintax 

  // 1. Fungsi strrev 
    // Fungsi ini digunakan untuk membalikan huruf

    // 2. Fungsi str_replace 
    // Fungsi ini berfungsi untuk mengganti kata sesuai yang diinginkan

 // 3 Fungsi str_word_count
    // Fungsi ini berfungsi untuk menghitung jumlah kata pada sebuah string

// 4. Fungsi strtoupper
    // fungsi ini digunakan untuk mengganti string yang awalnya huruf kecil menjadi huruf kapital, yaitu kebalikannya dari fungsi strtolower

// 5 Fungsi strtolower 
    // fungsi ini digunakan untuk mengganti string yang awalnya huruf kapital menjadi huruf kecil

    $namaSaya = ("Fitri Apriyani");
    $tanggalLahir = ("12 April 1999");

    $namaSaya1 = strrev($namaSaya);
    echo "hasil dari Fungsi strrev:".$namaSaya1. "</br>";

    $tanggalLahir1 = str_replace("1999", "2001", $tanggalLahir);
    echo "hasil dari Fungsi str_replace:".$tanggalLahir1. "</br>";

    $namaSaya2 = str_word_count($namaSaya);
    echo "hasil dari Fungsi str_word_count:".$namaSaya2. "</br>";

    $namaSaya3 = strtoupper($namaSaya);
    echo "hasil dari Fungsi strtoupper:".$namaSaya3. "</br>";

    $namaSaya4 = strtolower($namaSaya);
    echo "hasil dari Fungsi strtolower:".$namaSaya4. "</br>";

?>