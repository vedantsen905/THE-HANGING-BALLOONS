<?php
$email = $_POST['email'];
$password = $_POST['password'];


//Database Connection
$conn = new mysqli('localhost','root','','vedant');
if($conn->connect_error){
    die('connection Failed  : '. $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into Registration(email, password)
    values(?, ? )");
    $stmt->bind_param("ss" ,$email, $password);
    $stmt->execute();
    echo"Registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>

