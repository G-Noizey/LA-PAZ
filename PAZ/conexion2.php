<?php
   
    $mysqli=new mysqli("localhost","root","","paz");
//$mysqli=new mysqli("localhost","root","","panaderiamary");
    $mysqli->set_charset("utf8");
   if($mysqli->connect_errno)
   {
       echo "Algo salio mal al conectar con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_error;
   }


?>