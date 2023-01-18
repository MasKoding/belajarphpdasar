<?php 
    $buah = ['Apel','Semangka','Jeruk'];

    foreach ($buah as $b) {
        echo "Buah : $b <br>";
    }
    // array of array
    $product = [
        [
            "id"=>1,
            "nama_product"=>"Buku",
            "harga"=>15000
        ],
        [
            "id"=>2,
            "nama_product"=>"Pulpen",
            "harga"=>25000
        ],
    ];
    foreach ($product as $p) {
        echo "Id :". $p['id']."<br>";
        echo "Nama Product :". $p['nama_product']."<br>";
        echo "Harga :". $p['harga']."<br>";
    }
    
?>