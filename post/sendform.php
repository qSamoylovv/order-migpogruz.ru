<?php 
$name = trim($_POST['name']); 
$phone = trim($_POST['tel']); 
$desc = trim($_POST['desc']); 
// $email = trim($_POST['email']); 
$hidden = trim($_POST['title']); 
$fromMail = 'info@migpogruz.ru'; //Почта отправителя (в домене почты должен быть адрес вашего сайта)
$fromName = 'Поступила заявка с сайта МигПогруз'; //Заголовок письма
$emailTo = 'migpogruz@gmail.com'; //Ваша почта
$subject = 'Форма обратной связи migpogruz.ru'; 
$subject = '=?utf-8?b?'. base64_encode($subject) .'?='; 
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n"; 
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n"; 

// Содержимое письма 
$body = "Получено письмо с сайта \nИмя: $name\nТелефон: $phone \nСообщение: $desc \nС какой формы пришла заявка: $hidden"; 

// сообщение будет отправлено в случае, если поле с номером телефона не пустое 
if (strlen($phone) > 0) { 
$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail ); 
return;
} 

?>
