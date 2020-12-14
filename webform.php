<?php 

    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        
        //submit the form

        $userName = $_POST ['name'];
        $userEmail = $_POST ['email'];
        $messageSubject = $_POST ['subject'];
        $messageName = $_POST ['message'];

        $to = "agimkryeziu44@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to, $messageSubject, $body);

        }

        
    }

    


?>
