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
		if(empty($_POST["email"])){
			echo"<script>window.alert('email required');</script>";
			echo"<script>window.open('Home.php','_self');</script>";
		}
		else{

		$name = $_POST["name"];			//client name who is giving filling form.
		$dob=$_POST["dob"];
		$gender=$_POST["gender"];
		$address=$_POST["address"];
		$phone=$_POST["phone"];
		$passno=$_POST["passno"];
		$exd=$_POST["exd"];
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$foccp=$_POST["foccp"];
		$moccp=$_POST["moccp"];
		$email = $_POST["email"];	//his gmail id.
		$percen1 =$_POST["percen1"];
		$percen2 =$_POST["percen2"];
		$yop1 =$_POST["yop1"];
		$yop2 =$_POST["yop2"];
		$city1 =$_POST["city1"];
		$city2 =$_POST["city2"]; 
		$duration=$_POST["duration"];
		$amount=$_POST["amount"];
	//	echo"<script>window.alert('$name,$email,$message');</script>";
		
		

    $from=$email;
    $to='jnb82228@gmail.com';
		  $mail->setFrom($email, $email); // Set the sender of the message.
		$mail->addAddress('jnb82228@gmail.com', 'quixoticservice'); // Set the recipient of the message.
		$mail->Subject = 'Admission form'; // The subject of the message.
 
      $mail->Body='<html><body>';
      $mail->Body.='<table rules="all" style="border-color: #666;" cellpadding="10">';
      $mail->Body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
      $mail->Body .= "<tr><td><strong>Date of birth:</strong> </td><td>" . $dob . "</td></tr>";
       $mail->Body .= "<tr><td><strong>Gender:</strong> </td><td>" . $gender . "</td></tr>";
       $mail->Body .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Address:</strong> </td><td>" . $address . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Phone (mobile):</strong> </td><td>" . $phone . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Passport Number:</strong> </td><td>" . $passno . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Expiry Date:</strong> </td><td>" . $exd . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Father Name:</strong> </td><td>" . $fname . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Father's Occupation:</strong> </td><td>" . $foccp . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Mother's Name:</strong> </td><td>" . $mname . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Mother's Occupation:</strong> </td><td>" . $moccp . "</td></tr>";
   $mail->Body .= "<tr><td><strong>10+2 (percentage):</strong> </td><td>" . $percen1 . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Year of passing:</strong> </td><td>" . $yop1 . "</td></tr>";
   $mail->Body .= "<tr><td><strong>City:</strong> </td><td>" . $city1 . "</td></tr>";
   $mail->Body .= "<tr><td><strong>UG (percentage):</strong> </td><td>" . $percen2 . "</td></tr>";
   $mail->Body .= "<tr><td><strong>Year of passing:</strong> </td><td>" . $yop2 . "</td></tr>";
   $mail->Body .= "<tr><td><strong>City:</strong> </td><td>" . $city2 . "</td></tr>";
      $mail->Body .= "</table>";
	  $mail->Body .= "</body></html>";


	    if($mail->send()){
       echo "<script>window.alert('Form filled successfully')</script>";

				echo "<script>window.open('payment.php','_self')</script>";
    } else {
         echo "Mailer Error: " . $mail->ErrorInfo;
    }



}
	}	

?>