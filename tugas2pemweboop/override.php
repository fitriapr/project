<?php
class Mahasiswa { 
       public function Nilai() { 
              return "Jenius!"; 
       } 
}
 class point extends Mahasiswa { 
        public function Nilai() { 
               $nilai = 100; 
               if ($nilai == 100) 
                   $output = 'Jenius'; 
               else $output = 'Tidak Jenius'; 
               return $output; 
              } 
       } 
       $nilai = new point(); 
       echo $nilai->Nilai();
?>