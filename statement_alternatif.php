<?php 
    $nilai = 85;

    if($nilai >=80 && $nilai<=100):
        echo "A";
    elseif($nilai>=70 && $nilai<80):
        echo "B";
    
    elseif($nilai>=60 && $nilai<70):
        echo "C";
    else:
        echo "Tidak Lulus";
    endif;

   


?>