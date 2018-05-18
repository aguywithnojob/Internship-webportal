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
		
		

    $from=$email;
    $to='jnb82228@gmail.com';
		  $mail->setFrom($email, $email); // Set the sender of the message.
		$mail->addAddress('jnb82228@gmail.com', 'quixoticservice'); // Set the recipient of the message.
		$mail->Subject = 'Undertaking form'; // The subject of the message.
 
      $mail->Body='<html><body>';
      $mail->Body.='<div style="border-color: #666;">';
      $mail->Body.="<h2>Undertaking</h2>";
      $mail->Body.="<p>I Mr./Ms.".$name."</p>";
       $mail->Body.="<p>S/o/D/o".$sod."</p>";
        $mail->Body.="<p>R/O".$ro."Mobile".$phone."</p>";
         $mail->Body.="<p>course".$course."semester".$semester." Roll No ".$rollno."</p>";
         $mail->Body.="<p>Sesssion".$sesssion."year".$year.". do hereby Undertake the following:</p>";
         $mail->Body.="<p>1.That I hereby declare that on my own will & wish and without any force or influence, I am accompanying
Education Tour..<br>2.That I will be travelling and undertaking the Educational Tour at my own risk & responsibility and in case
of any accident/mishap I will not hold the QCS / University responsible for the consequences.<br>3.That I have sought permission of my parent / guardian for going on the said tour.<br>4.That while on tour I will fully cooperative with tour incharge and abide by instruction given.
<br>5.That I will strictly follow the guidance / rules /regulations whatever has framed for the successful conduct/
completition of the said tour.<br>6.That I will not include/involve myself in any misbehaviour / indiscipline / act amounting to indiscipline
while I am on the said tour.<br>7.That I am in knowledge of the fact that expenses related to the said tour will have to be borne by me.<br>8.Any mishandling, damage and dirtiness in the accommodation found a penalty will be charged as per rules.</p>";
		$mail->Body.= "<h2>Undertaking form the Parents/Guardian</h2>";
		$mail->Body .="<p>I".$pname." Father/Mother/Guardian of Mr./Ms. ".$sname."</p>";
		$mail->Body .="who is student of ".$college."University. Department of".$dpt."</p>";
		$mail->Body.="<p>1.I am giving permission above named child / ward named above to go on the Educational Tour.<br>2.That my child / ward shall abide by the rules and regulations of QCS as ward of the company.</p>";
		$mail->Body.="<p>Mobile".$mobile."</p>"
      $mail->Body .="</div>";
	  $mail->Body .= "</body></html>";


	    if($mail->send()){
       echo "<script>window.alert('Form filled successfully')</script>";
				echo "<script>window.open('choose.php','_self')</script>";
    } else {
         echo "Mailer Error: " . $mail->ErrorInfo;
    }



	}	

?>