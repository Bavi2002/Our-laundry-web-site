<?php require_once(__DIR__ . "/config.php"); ?>


<?php
$price=$_POST['price']; 
$type=$_POST['type'];
$service=$_POST['service'];

$query = "INSERT INTO  prices (`price`,`type`,`service`)
VALUES('$price','$type','$service')";

if($conn->query($query)===TRUE){
    // echo  "New recorded addded";
    
    header('Location:' . BASEURL . '/index.php');
    // Add_Product.php
}
else {
    echo "Error inserting records:".$conn->error;
}


?>