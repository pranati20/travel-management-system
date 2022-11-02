<?php
print_r($_POST);

$host="localhost";
$dbUsername= "root";
$dbPassword="";
$dbname="customers";


$conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die('Could not connect to the database.');
}else{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $validationQuery = "SELECT email,password from registration where email = '$email' and password='$password'";
    $validation = $conn->query($validationQuery);
    if ($validation->num_rows == 0) {
        echo "<h3>email password combination not found</h3>";
    }else{

    

    setcookie("email",$_POST['email']);
    echo "<h3>login successful!</h3>";
    header('Location: res.html');
    }
    
}
exit;