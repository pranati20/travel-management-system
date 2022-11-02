<?php
print_r($_POST);
$FIRSTNAME=$_POST['FIRSTNAME'];
$EMAIL=$_POST['EMAIL'];
$PASSWORD=$_POST['PASSWORD'];

if(!empty($FIRSTNAME)|| !empty($EMAIL)|| !empty($PASSWORD)){
    $host="localhost";
    $dbUsername= "root";
    $dbPassword="";
    $dbname="customers";

    //create connection
    $conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else {
        $SELECT = "SELECT email FROM registration WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO registration(FIRSTNAME,EMAIL,PASSWORD) values('$FIRSTNAME','$EMAIL', '$PASSWORD')";

        $InsertQuery = $conn->query($INSERT);
    }
}

    //     $stmt = $conn->prepare($SELECT);
    //     $stmt->bind_param("s", $email);
    //     $stmt->execute();
    //     $stmt->bind_result($email);
    //     $stmt->store_result();
    //     $stmt->fetch();
    //     $rnum = $stmt->num_rows;

    //     if ($rnum == 0) {
    //         $stmt->close();

    //         $stmt = $conn->prepare($INSERT);
    //             $stmt->bind_param("sss",$username, $psw, $pswrepeat);
    //             $stmt->execute(); {
    //                 echo "New record inserted sucessfully.";
    //             }
    //         }
    //         else {
    //             echo "Someone already registers using this email.";
    //         }
    //         $stmt->close();
    //         $conn->close();
    //     }
    // }
    // else {
    //     echo "All field are required.";
    //     die();
    // }
    header('Location: 3.html');
exit;


?>





