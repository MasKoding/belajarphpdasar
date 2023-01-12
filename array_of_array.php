<?php 
       $judul = "Biodata"; 
     
       $biodata = array(
        array(
            "id"=>1,
            "name"=>"Alex",
            "age"=>20,
            "address"=>array(
                "city"=>"Jakarta",
                "country"=>"Indonesia"
            )  
        ),
            array(
                "id"=>2,
                "name"=>"Bob",
                "age"=>20,
                "address"=>array(
                    "city"=>"Jakarta",
                    "country"=>"Indonesia"
                )
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
</head>
<body>
        <h2>
            <?php echo $judul; ?>
        </h2>
        <?php 
           
             echo "Id :".$biodata[0]["id"]."<br>";
             echo "Name :".$biodata[0]["name"]."<br>";
             echo "Age :".$biodata[0]["age"]."<br>";
             echo "City :".$biodata[0]["address"]["city"]."<br>";
             echo "Country :".$biodata[0]["address"]["country"]."<br>";
            
        
        ?>
</body>
</html>