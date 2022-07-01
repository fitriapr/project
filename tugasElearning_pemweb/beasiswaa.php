<form  action="" method="POST">
   PENGUMUMAN KELULUSAN BEASISWA<br>
    Nilai : <input type="text" name="nilai">
    <input type="submit" value="Input">
</form>
   
<?php
class Beasiswa{
    //properti
    public $nilai;
    //method
    function set_nilai($nilai){
        $this->nilai=$nilai;
    }
    function get_nilai(){
        if ($_POST)
        {
            $nilai_mahasiswa = $_POST['nilai'];
            if($nilai_mahasiswa >= 80)
            {$hasil = "Lulus Beasiswa";}
            else {$hasil = "Tidak Lulus Beasiswa";}
            return $hasil;
        }
    }
}
$keterangan = new Beasiswa;
$keterangan->set_nilai('');
echo $keterangan->get_nilai();
?>