<?php

use Baju as GlobalBaju;

class Baju{
    public $merk;
    public $bahan;
    public function __construct($merk, $bahan) {
        $this->merk = $merk;
        $this->bahan = $bahan; 
    }
    public function intro(){
        echo "Baju ini merk {$this->merk} berbahan )$this->bahan}.";
    }
}

class Gamis extends Baju {
    public $warna;
    public function __construct( $merk, $bahan, $warna){
        $this->merk = $merk;
        $this->bahan = $bahan; 
        $this->warna = $warna; 
    }
    public function intro()
    {
        echo "Baju ini merk {$this->merk} berbahan {$this->bahan}, berwarna {$this->warna}.";
    }
}

$gamis = new Gamis ("Zazkia Mecca", "Katun", "Frappucino");
$gamis->intro();
?>