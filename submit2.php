<?php

date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "jnb82228@gmail.com"; // Your Gmail address.
$mail->Password = "Jbtech#5"; // Your Gmail login password or App Specific Password.
$mail->isHTML(true);
/*
 * Message Configuration
 */
if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		
		$name = $_POST["name"];			//client name who is giving filling form.
		$sod=$_POST["sod"];
		$ro=$_POST["ro"];
		$course=$_POST["course"];
		$phone=$_POST["phone"];
		$semester=$_POST["semester"];
		$rollno=$_POST["rollno"];
		$session=$_POST["session"];
		$year=$_POST["year"];
		$pname=$_POST["pname"];
		$sname=$_POST["sname"];
		$college = $_POST["college"];	//his gmail id.
		$dpt =$_POST["dpt"];
		$mobile =$_POST["mobile"];
		 
	//	echo"<script>window.alert('$name,$email,$message');</script>";
		$email="form";
		

    $from=$email;
    $to='jnb82228@gmail.com';
		  $mail->setFrom('form', 'form'); // Set the sender of the message.
		$mail->addAddress('jnb82228@gmail.com', 'quixoticservice'); // Set the recipient of the message.
		$mail->Subject = 'Undertaking form'; // The subject of the message.
		
	  	$mail->Body='<html><body>';
      $mail->Body.='<table rules="all" style="border-color: #666;" cellpadding="10">';
      $mail->Body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
      $mail->Body .= "<tr><td><strong>S/o/D/o:</strong> </td><td>" . $sod . "</td></tr>";
       $mail->Body .= "<tr><td><strong>R/O:</strong> </td><td>" . $ro . "</td></tr>";
       $mail->Body .= "<tr><td><strong>Mobile:</strong> </td><td>" . $phone . "</td></tr>";
   $mail->Body .= "<tr><td><strong>course:</strong> </td><td>" . $course . "</td></tr>";
   $mail->Body .= "<tr><td><strong>semester:</strong> </td><td>" . $semester . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Roll No :</strong> </td><td>" . $rollno . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Sesssion:</strong> </td><td>" . $session . "</td></tr>";
   $mail->Body .= "<tr><td><strong>year:</strong> </td><td>" . $year . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Parents Name:</strong> </td><td>" . $pname . "</td></tr>";
   $mail->Body .= "<tr><td><strong>college/University Name:</strong> </td><td>" . $college . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Department:</strong> </td><td>" . $dpt . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Mobile(parents):</strong> </td><td>" . $mobile . "</td></tr>";
      $mail->Body .= "</table>";
	  $mail->Body .= "</body></html>";


	    if($mail->send()){
       echo "<script>window.alert('Form filled successfully')</script>";
				echo "<script>window.open('choose.php','_self')</script>";
    } else {
         echo "Mailer Error: " . $mail->ErrorInfo;
    }



	}	
	else{
		echo"<script>window.alert('1 if is not working!!!!!');</script>";
	}

?>