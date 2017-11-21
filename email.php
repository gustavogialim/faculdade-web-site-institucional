<?php
if (!empty($_POST['contato'])) {
	$dados = $_POST['contato'];
$to = 'gustavo.gialim@gmail.com';
$subject = $dados[2];
$message = 'E-mail enviado por '. $dados[0] . ', ' . $dados[1] . ' Mensagem:' . $dados[3];
$headers = 'From: '.$dados[0] . "\r\n" .
           'Reply-To: '.$dados[1] . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
	header("location:emailOK.php");
} else {
	header("location:emailError.php");
	}
}
?>
