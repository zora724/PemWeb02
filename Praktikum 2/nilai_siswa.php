<?php
   $nama = $_POST ['nama'];
   $matkul = $_POST ['matkul'];
   $uts = $_POST ['uts'];
   $uas = $_POST ['uas'];
   $tugas = $_POST ['tugas'];
   $hasilnilai = ($uts + $uas + $tugas) / 3;

   echo 'Nama Lengkap : ' . $nama;
   echo '<br>Mata Kuliah : ' . $matkul;
   echo '<br>Nilai UTS : ' . $uts;
   echo '<br>Nilai UAS : ' . $uas;
   echo '<br>Nilai Tugas : ' . $tugas;


   if( $hasilnilai >= 0 && $hasilnilai <= 35) {
    echo '<br> Nilai : ' . $hasilnilai . '<br> Grade : E';

   } elseif($hasilnilai >= 36 && $hasilnilai <= 55)  {
    echo '<br> Nilai : ' . $hasilnilai . '<br> Grade : D';

   } elseif($hasilnilai >= 56  && $hasilnilai <= 69)  {
    echo '<br> Nilai : ' . $hasilnilai . '<br> Grade : C';

   } elseif($hasilnilai >= 70 && $hasilnilai <= 84)  {
    echo '<br> Nilai : ' . $hasilnilai . '<br> Grade : B';

   }  elseif($hasilnilai >= 85 && $hasilnilai <= 100)  {
    echo '<br> Nilai : ' . $hasilnilai . '<br> Grade : A';

   } else {
    echo '<br> Nilai : ' . $hasilnilai . '<br> Grade : I';

   }
?>