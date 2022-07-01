<?php
class Beasiswa{ 
       public function Nilai() { 
              return "Lulus Beasiswa"; 
       } 
}
 class point extends Beasiswa  { 
        public function Nilai() { 
               $nilai = 90; 
               if ($nilai >= 80) 
                   $output = '> 80, Lulus Beasiswa'; 
               else $output = '< 80, Tidak Lulus Beasiswa'; 
               return $output; 
              } 
       } 
       $nilai = new point(); 
       echo $nilai->Nilai();
?>