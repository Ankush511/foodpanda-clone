<?php  
    try{
        $db = new mysqli("localhost", "root", "", "forms");
    }
    catch( Exception $exc){
        echo $exc->getTraceAsString();
    }
    if(isset($_POST['fullName']) && isset($_POST['phoneNumber']) && isset($_POST['eMail'])) {
        $fullName = $_POST['fullName'];
        $eMail = $_POST['eMail'];
        $phoneNumber = $_POST['phoneNumber'];

        $is_insert = $db->query("INSERT INTO `formdetails`(`fullName`, `eMail`, `phoneNumber`) VALUES ('$fullName', '$eMail', ' $phoneNumber')");
    
        if($is_insert == TRUE) {
            echo "<h1>Thank You, your response has been submitted....</h1>";        
            exit();
        }
    }
?>