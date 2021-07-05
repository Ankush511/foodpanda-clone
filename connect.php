<?php
    $fullName = $_POST['fullName'];
    $eMail = $_POST['eMail'];

    //database connection
    $conn = new mysqli('localhost','root','','contact');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into contact details(fullName,eMail) values(?,?)");
        $stmt->bind_param("ss",$fullName,$eMail);
        $stmt->execute();
        echo "Registered Successfully...";
        $stmt->close();
        $conn->close();
    }
?>