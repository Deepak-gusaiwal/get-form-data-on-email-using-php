<?php
echo "sending mail";
// variable setting
$userName = $_REQUEST['name'];
$userEmail = $_REQUEST['email'];
$userMessage = $_REQUEST['message'];

// check input fields
if(empty($userName) || empty($userEmail) || empty($userMessage)){
    echo "Please Fill All The Fields";
}else{
    $to = "dgusaiwal537@gmail.com";
    $subject = "text from message";
    $header = "From : $userName";
    mail($to,$subject,$userMessage,$header);
   echo "your mail has been sent successfully";
};
?>