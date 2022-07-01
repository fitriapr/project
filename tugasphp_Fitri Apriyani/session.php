<?php

//Fungsi session adalah untuk melakukan aktivitas yang berhubungan dengan interaksi user pada sebuah web server php.

session_start();

$_SESSION['nama'] = "Fitri Apriyani";

echo "<a href = 'session1.php'>klik disini</a>";

?>