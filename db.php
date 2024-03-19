<?php 

$dns = "mysql:host=localhost;dbname=diabetes";
$user = "root";
$pass= "";

try{
    $connect = new PDO($dns,$user,$pass);
    
}catch(PDOException $e){
    echo "Failed To connect DB" . $e->getMessage();
} 

?>