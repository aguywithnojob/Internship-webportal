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
		$email = $_POST["email"];	//his gmail id.
		$mssg =$_POST["message"]; 
	//	echo"<script>window.alert('$name,$email,$message');</script>";
		$subject = 'Regarding Queries'; //subject of mail
		

    $from=$email;
    $to='jnb82228@gmail.com';
    $mail->setFrom($email, 'contact us'); // Set the sender of the message.
$mail->addAddress('jnb82228@gmail.com', 'quixoticservice'); // Set the recipient of the message.
$mail->Subject = 'Regaring query'; // The subject of the message.

  	$mail->Body = $mssg; // Set a plain text body.
   
  // echo $name.'-'.$email.'-'.$from.'-'.$message;
    //echo $success;
  if ($mail->send()) {
    echo "<script>window.alert('Your message was sent successfully!')</script>";
    echo'<script>window.open("contact.php","_self");</script>';
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}



}
	}	

?>
