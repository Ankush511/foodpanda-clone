<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Page</title>
</head>
<body>
    <form action="connect.php" method="POST">
    <a href="http://localhost/FOODPANDA/" style="text-decoration: none; ">
    <button><h3>GoTo Homepage</h3></button>
    </a>
    </form>
<?php
    
    try{
        $db = new mysqli("localhost", "root", "", "information");
    }
    catch( Exception $exc){
        echo $exc->getTraceAsString();
    }
    if(isset($_POST['fullName']) && isset($_POST['phoneNumber']) && isset($_POST['eMail']) && isset($_POST['age']) && isset($_POST['comment'])) {
        $fullName = $_POST['fullName'];
        $phoneNumber = $_POST['phoneNumber'];
        $eMail = $_POST['eMail'];
        $age = $_POST['age'];
        $comment = $_POST['comment'];


        $is_insert = $db->query("INSERT INTO `details`(`fullName`, `phoneNumber`, `eMail`, `age`, `comment`) VALUES ('$fullName','$phoneNumber','$eMail','$age','$comment')");
    
        if($is_insert == TRUE) {
            echo "<h1>Thank You, your response has been submitted....</h1>";        
            exit();
        }
    }
    
?>

</body>
</html>