<?php 

try {
 	
 	$db = new PDO("mysql:host=localhost;port=3306;dbname=dbfotograf;charset=utf8", 'root','');
 } catch (Exception $e) {
 	
    echo $e->getMesaage();

 } 

?>