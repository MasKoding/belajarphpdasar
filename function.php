<?php 
     function sayHello()
     {
        echo "<script>
            alert('hello')
         </script>";     
     }
     function confirm(){
        echo "<script>
              confirm('are you sure?')
              </script>";
     }
     function sayName($name){
        echo "nama: $name";
     }
     function showCar($brand,$year=2022){
        echo "Car : $brand , Year :$year";
      }
    //  return function
    function sum($a,$b){
        return $a+$b;
    }
    $result = sum(4,3);
    //  sayHello();
    //  confirm();
    
   
?>