<?php
$hostname ='localhost';
$username = 'root';
$password = '';
$database = 'store_sms';


$conn =new mysqli($hostname, $username, $password, $database);

if($conn){
    echo 'ok';
}else{
    echo 'not ok';
}
?>