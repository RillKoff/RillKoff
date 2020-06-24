<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message_text = $_POST['message_text'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$topic = htmlspecialchars($topic);
$message_text = htmlspecialchars($message_text);

$fio = urldecode($fio);
$email = urldecode($email);
$topic = urldecode($topic);
$message_text = urldecode($message_text);

$fio = trim($fio);
$email = trim($email);
$topic = trim($topic);
$message_text = trim($message_text);

echo $fio;
echo "<br>";
echo $email;
if (mail("RillKoff@yandex.ru", "Заявка с сайта: ".$topic, "ФИО: ".$fio.". E-mail: ".$email." $message_text" ,"From: RillKoff@yandex.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
