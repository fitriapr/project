<?php

class Wisata {
        public $namatempat;
        public function Penilaian() {
        return "Layak Dikunjungi";
 }
 }
    class NamaTempat extends Wisata {
        public function Penilaian() {
                $penilaian = 4;
            if ($penilaian == 4) 
                $output = 'Layak Dikunjungi';
            else $output = 'Biasa';
            return $output;
 }
 }
                $Hasil = new NamaTempat();
                $namawisata = new Wisata();

 echo $namawisata->NamaTempat = 'Tebing Keraton </br>';
 echo $Hasil->Penilaian();
 ?>