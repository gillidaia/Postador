<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile   = $_REQUEST["mobile"];
$msg   = $_REQUEST["msg"];
$to    = "gillidaia@hotmail.com"; /*Replace your email id here*/
if (isset($email) && isset($name) && isset($msg)) {
    $subject = "$name enviou uma mensagem do site Postador";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "De: $name<br/> E-mail: $email <br/> Telefone: $mobile <br/>Mensagem: $msg";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>