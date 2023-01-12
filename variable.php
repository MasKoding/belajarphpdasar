<?php 
  
  $name = "Alex";
  $age = 20;
  $height = 180;
  $weight = 60;
  $heightInMeter= $height * 0.01;
  $BMI = $weight / ($heightInMeter *$heightInMeter);

  echo "<h2>Name :".$name."</h2><br>";
  echo "<h2>Age :".$age."</h2><br>";
  echo "<h2>Height :".$height."</h2><br>";
  echo "<h2>Weight :".$weight."</h2><br>";
  
//operator
//  calculate BMI 
// rumus BMI =  weight / (heightInMeter*heightInMeter)

echo "<h2>BMI: ".$BMI."</h2>"


?>