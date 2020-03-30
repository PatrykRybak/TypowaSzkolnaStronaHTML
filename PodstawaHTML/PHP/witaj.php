<?php
if(isset($_POST["imie"]))
{
  $imie = $_POST["imie"];
  $wiek = $_POST["wiek"];
  echo "Witaj $imie wiem, że masz $wiek lat.";
}
else
{
 header("Location: ../index.html");
}
 ?>
