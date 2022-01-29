<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$A= $_POST['A'];
$b= $_POST['b'];
$c= $_POST['c'];
$d= $_POST['d'];
$e= $_POST['e'];

$to = "ajaynp2021@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Mobile no. =" . $number . "\r\n  1)What is called the work done by the load on the simple machine?: =" . $A . "\r\n  2)In which kingdom Amoeba lie? =" . $b . "\r\n  3) What is the causative agent of malaria? . =" . $c. "\r\n  4) Write two example of nitrogen containing fertilizers?   =" . $d . "\r\n  5) To which Newton's law of motion is the launching of rocket into the space related?  =" . $e;
$headers = "From: ajaynp2078@gmail.com" 
"CC: ajaymaurya2077@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>