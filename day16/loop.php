<?php
for($x=0;$x<=10;$x++){
    echo "The number is: $x <br>";
}

 $colors = array("red","green","white","yellow");

 foreach($colors as $value){
    echo "$value<br>";
 }

 $age = array("peter"=>18,"john"=>80,"spandan"=>20);
 foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
         echo "<br>";
     }
?>