<?php
if($_POST)
{
 $name =  $_POST["name"];
 $f_name = $_POST["f_name"];
 $phone_no = $_POST["number"];
 $address = $_POST[" address"];
 
 $array_name = Array($f_name);
  
    echo "Array Name: </br>";
        print_r ($array_name);
        var_dump($array_name);
        echo "<hr>";
  
}
 ?>