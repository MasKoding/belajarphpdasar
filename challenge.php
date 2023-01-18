<?php 
    $text = "Aku Sayang Kamu Tapi Boong";
    // ubah string menjadi char
    $chars = str_split($text);
    for($i=0;$i<count($chars);$i++){
        for($j=0;$j<$i;$j++){
            echo "&nbsp;";
        }

        echo $chars[$i]."<br>";

    }
?>