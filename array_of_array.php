<?php 
       $judul = "Biodata"; 
     
       $biodata = array(
    
        "id"=>1,
        "name"=>"Alex",
        "age"=>20,
        "address"=>array(
            "city"=>"Jakarta",
            "country"=>"Indonesia"
        )
        
        
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
           
             echo "Id :".$biodata["id"]."<br>";
             echo "Name :".$biodata["name"]."<br>";
             echo "Age :".$biodata["age"]."<br>";
             echo "City :".$biodata["address"]["city"]."<br>";
             echo "Country :".$biodata["address"]["country"]."<br>";
            
        
        ?>
</body>
</html>