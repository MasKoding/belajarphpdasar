<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Latihan 2</h1>

    <?php $color = ["red","yellow","green"]; ?>
    <!-- ini buat box -->
   <?php foreach($color as $c): ?>

     <div class="box <?=$c?>">
        <h3> Box  </h3>
     </div>  

     <?php endforeach; ?>
   
   <?php 
        // string function

        $angka = join(";",[1,2,3,4,5,6,7,8]);
        $messageLowerCase = strtolower("BELAJAR PHP");
        $messageUpperCase = strtoupper("belajar kotlin");
        $ambilString = substr("STEVEJOB",5,3);

    ?>

    <h2><?=$angka?></h2>
    <h2><?=$messageLowerCase?></h2>
    <h2><?=$messageUpperCase?></h2>
    <h2><?=$ambilString?></h2>

</body>
</html>