<?php
if(isset($_POST["NumOfName"])){
  $NoN = (int)$_POST["NumOfName"];
  $NoS = (int)$_POST["NumOfSurname"];
  $MyName = "imie";
  $MySurname = "nazwisko";

  for($x=0;$x<$NoN;$x+=1){
    echo "$MyName <br>";
  }
  echo "<br>";
  $y = 0;
  do{
    echo "$MySurname <br>";
    $y+=1;
  }while ($y < $NoS);
}
else{
  header('Location: ../index.html');
}
?>
