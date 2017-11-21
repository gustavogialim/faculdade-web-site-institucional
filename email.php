<?php
if (!empty($_POST['contato'])) {
	$dados = $_POST['contato'];
$to = 'loko2017@outlook.com';
$subject = $dados[2];
$message = 'Olá, meu nome é '. $dados[0] . ', Meu e-mail é: ' . $dados[1] . ' e Minha mensagem é:' . $dados[3];
$headers = 'From: '.$dados[0] . "\r\n" .
           'Reply-To: '.$dados[1] . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    // echo 'Email enviado com Sucesso!! <br>';
	header("location:emailOK.php");
} else {
	//echo 'erro '.error_get_last();
    //die('Erro ao enviar e-mail <br>');
	header("location:emailError.php");
	}
}
?>
