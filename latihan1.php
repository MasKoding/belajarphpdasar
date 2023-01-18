<?php 

     /**
     *  Nama hari dengan nomer urut
     *  1 = Minggu
     *  2 = Senin
     *  3 = Selasa
     *  4 = Rabu
     *  5 = Kamis
     */
   $day = 4;
   switch ($day) :
    case 1:
        # code...
        echo "Minggu";
        break;
    case 2:
        # code...
        echo "Senin";
        break;
    case 3:
        # code...
        echo "Selasa";
        break;   
    case 4:
        # code...
        echo "Rabu";
        break;   
    default:
        # code...
        echo "Tidak ada hari";
         break;
    endswitch;
   

?>