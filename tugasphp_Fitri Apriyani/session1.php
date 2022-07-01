<?php

//Fungsi session adalah untuk melakukan aktivitas yang berhubungan dengan interaksi user pada sebuah web server php.

session_start();
if (!isset($_SESSION['nama'])) {
    die("anda dilarang masuk");
}
?>

<h2>WELCOME</h2>

<?php

echo $_SESSION['nama'];
?>

