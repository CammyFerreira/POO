<?php
require_once("PHPMailer.php");
require_once("SMTP.php");
require_once("Exception.php");

use PHPMailer\PHPMailer\PHPMailer; // habilita username da phpmailer
use PHPMailer\PHPMailer\Exception; // habilita username da Exception
use PHPMailer\PHPMailer\SMTP; // habilita username da Exception
error_reporting (1);
// capturando dados do formulário

if ( !isset($_POST['destinatario']) ) $_POST['destinatario']='';
$destinatario = $_POST['destinatario'];
$assunto = $_POST['assunto'];
$conteudo = $_POST['conteudo'];

$mail = new PHPMailer(true); 
$mail->isSMTP(); 
$mail->Host = 'smtp.hostinger.com'; 
$mail->SMTPAuth = true; 
$mail->Username = 'temporario@topsecuritty.com'; 
$mail->Password = '@#Els2556'; 
$mail->Port = 465; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
$mail->setFrom ('temporario@topsecuritty.com'); 
$mail->addAddress($destinatario, 'Fulano de Tal'); 
$mail->isHTML(true); 
$mail->Subject = $assunto;
$mail->Body = '<strong>'. $conteudo . '</strong>'; 
$mail->AltBody = 'Texto sem HTML ou link'; 

if ( $_POST['Enviar'] )
 {
 if ( !$mail->send() )
 {
 echo 'Não foi possível enviar a mensagem.<br>';
 echo 'Erro: ' . $mail->ErrorInfo;
 }
 else
 {
 echo "<table align = center>
 <tr> <td style=\"font-family: 'Times New Roman', Times, serif;
 font-size: large; width: 300px; height:10px; background: rgb(176, 194, 71);
 text-align: center;\"> Mensagem de Operação </td></tr><tr>
 <td style=\"font-family: 'Times New Roman', Times, serif;
 font-size: large; width: 300px; height:100px; background: rgb(104, 71, 194);
 text-align: center;\"> Envio bem Sucedido,<br>Parabéns! </td></tr>
 </table>";
 }
 }