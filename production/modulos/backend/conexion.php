<?php
try{
    $db = new PDO("mysql:host=;dbname=", "", "");
}catch (PDOException $e){
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
