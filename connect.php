<?php
    $fullName = $_POST['fullName'];
    $eMail = $_POST['eMail'];
    $comment = $_POST['comment'];

    //database connection
    $conn = new mysqli('localhost','root','','contact');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO contactdetails(fullName,eMail,comment) values(?,?,?)");
        $stmt->bind_param("ss",$fullName,$eMail,$comment);
        $stmt->execute();
        echo "Registered Successfully...";
        $stmt->close();
        $conn->close();
    }
?>