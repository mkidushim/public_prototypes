<?php
    
    $result = mail($_POST['email'],$_POST['subject'],$_POST['message']);
    if($result){
        print("The message send was successful");
    }
    else{
        print("The message was not sent.");
    }
?>