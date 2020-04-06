<?php
if(isset($_POST["number1"])){
  $num1 = (int)$_POST["number1"];
  $num2 = (int)$_POST["number2"];
  $num3 = (int)$_POST["number3"];
  if($num1 && $num2 && $num3 != 0){
    if($num1 > $num2){
      if($num1 > $num3){
        echo "Najwieksza cyfra to: $num1";
      }
      else {
        echo "Najwieksza cyfra to: $num3";
      }
    }
    else {
      if ($num2 > $num3) {
        echo "Najwieksza cyfra to: $num2";
      }
      else {
        echo "Najwieksza cyfra to: $num3";
      }
    }
  }
  else{
    echo "Nie wypelniono jakiegos pola!";
  }
}
else{
 header("Location: ../index.html");
}
?>
