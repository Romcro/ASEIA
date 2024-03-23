<?php
        

if(isset($_POST['sendMail']))

{



	$send_to='romualdcrochat@gmail.com';
	/**$message_mail=$_POST['email'];
	$subject_mail=$_POST['sujet'];
	$message_mail=$_POST['email'];**/
	
	


	$message_mail=
	"Vous avez reçu un message de "
	.$_POST['nom'].
	", de la société : "
	.$_POST['societe'].

	"\r\n \r\n"
	.$_POST['email'].
	", concernant : "
	.$_POST['sujet'].
	", sa demande est: "
	.$_POST['message'];


	mail($send_to,$subject_mail,$message_mail);

	header('Location: mercimail.php');

}





 ?>




