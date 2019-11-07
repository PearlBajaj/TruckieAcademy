<?php
if(isset($_POST['submit'])){
$name = $_POST['name']
$email = $_POST['email']
$comment = $_POST['comment']

$mail2="pbaj0157@uni.sydney.edu.au"
$headers="From: Truckie Academy".$email;
$txt = "You have recieved an email from ".$name.".\n\n".$comment;

mail($mail2,$txt,$headers);
header("Location: index.php?mailsend");
 ?>
