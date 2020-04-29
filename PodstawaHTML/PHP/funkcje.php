<?php
function info()
{
    phpinfo();
}
function najwieksza($jeden, $dwa, $trzy)
{
    echo max($jeden,$dwa,$trzy);
}
function fibonacci($nr)
{
    echo round(pow((sqrt(5)+1)/2, $nr) / sqrt(5));
}

if(isset($_POST['zad1']))
{
  phpinfo();
}
elseif (isset($_POST['zad2']))
{
  najwieksza($_POST['nwl1'],$_POST['nwl2'],$_POST['nwl3']);
}
elseif (isset($_POST['zad3']))
{
  fibonacci($_POST['fib']);
}
else
{
 header("Location: ../index.html");
}
 ?>
