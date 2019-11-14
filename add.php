<?php
   include("connect.php");
   ?>
 <?php
 session_start();
 $website=$ POST['website'];
 $email=$ POST['email'];
 $mobile=$ POST['mobile'];


 $SESSION['phone']=$moblie;

 $qry=mysql query("insert into register1
 (website,email,molieno)
 value('$website','$email','$mobile')");

 if($qey>0)
 {
 	$message='Registration is Succesful';
 	echo"<SCRIPT>alert('$message')</SCRIPT>";
 	include("spassword.php");
 }
 else
 {
 	$message='Registration is not Succesful';
 	ech"<SCRIPT>alert('$message')</SCRIPT>";
 	include("sregister.php");
 }
 ?>