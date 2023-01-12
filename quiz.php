<?php
$judul = "Biodata";

$biodata = array(
    array(
        "id" => 1,
        "nama" => "Alex",
        "nis" => 20,
        "kelas" => "XII-RPL",
        "matapelajaran" => "RPL"
    ),
    array(
        "id" => 2,
        "nama" => "Bob",
        "nis" => 20,
        "kelas" => "XII-RPL",
        "matapelajaran" => "RPL"
    ),
    array(
        "id" => 3,
        "nama" => "Cel",
        "nis" => 20,
        "kelas" => "XII-RPL",
        "matapelajaran" => "RPL"
    ),
    array(
        "id" => 4,
        "nama" => "Def",
        "nis" => 20,
        "kelas" => "XII-RPL",
        "matapelajaran" => "RPL"
    ),
    array(
        "id" => 5,
        "nama" => "El",
        "nis" => 20,
        "kelas" => "XII-RPL",
        "matapelajaran" => "RPL"
    ),

);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <h2>
        <?php echo $judul; ?>
    </h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Nis</th>
                <th scope="col">Kelas</th>
                <th scope="col">Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($biodata as $b):  ?>
            <tr>
                <td><?=$b["id"]?></td>
                <td><?=$b["nama"]?></td>
                <td><?=$b["nis"]?></td>
                <td><?=$b["kelas"]?></td>
                <td><?=$b["matapelajaran"]?></td>
               
            </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
    


</body>

</html>