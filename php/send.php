<?php 

if (isset($_POST["send"])) { // Нужно поставить на кнопку отправить  name="send"
$contactform->ajax = true;
$to = "gancura.alina@gmail.com"; // Тут пишем почту на которую будут приходить письма

$charset = "utf-8";   // Кодировка
$headerss ="Content-type: text/html; charset=$charset\r\n";  // не менять
$headerss.="MIME-Version: 1.0\r\n"; // не менять
$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n"; // не менять
// Переменные должны совпадать с атрибутом name в форме 
$msg = "Имя: ".$_POST["name"]."\n";
$msg .= "<br>email: ".$_POST["email"]."\n";
$msg .= "<br>Телефон: ".$_POST["tel"]."\n";
$msg .= "<br>Сообщение: ".$_POST["text"]."\n";
//$msg .= "<br>Сообщение: ".$_POST["lname"]."\n";

$subject = "Тема: ".$_POST["subject"]."\n";

mail($to, $subject, $msg, $headerss);
echo '<p>Сообщение успешно отправлено</p><br><a href="https://gancura.github.io/">Вернуться на главную</a> '; // Отправка успешна
}
ELSE {
echo "<p>Что-то пошло не так, как планировалось</p>"; // Письмо не отправилось
}

?>