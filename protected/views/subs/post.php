<? 
// ----------------------------конфигурация-------------------------- // 


$adminemail="shubinsa1@gmail.com";  // e-mail админа
$adminemail2="Заказ с сайта MRT";
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl=Yii::app() -> baseUrl."/index";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 


if(!empty($_POST['name']) && !empty($_POST['name2'])){

$name=$_POST['name']; 
 
$name2=$_POST['name2']; 
$headers = "From: mrt-to-go@mail.ru\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$mail = "Дата: <strong>{$date}</strong><br/>";
$mail .= "Время: <strong>{$time}</strong><br/>";
$mail .= "Имя: <strong>{$name}</strong><br/>";
$mail .= "Телефон: <strong>{$name2}</strong><br/>";
 // Отправляем письмо админу  
mail("$adminemail", "$adminemail2", $mail, $headers); //*/

 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
<head>
<link rel='stylesheet' href='main_style.css'>
</head>
<body style='background:;font-family: pf_dintext_proregular;'>
<div style='max-width:500px;margin:10% auto;border:1px solid #efeeee;;background:url(img/logo_mesage.png) no-repeat 50% 95%;color:#000;'>
<h2 style='text-align:center;font-size:20px;padding:2% 0 2% 0'>Спасибо за оформление заявки!</h2>

 
<p style='text-align:left;padding:2%;padding-bottom:60px;'>Подождите, сейчас вы будете перенаправлены на главную страницу...</p>
</div>
</body>";  
exit; 
 
}else {
	print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
<head>
<link rel='stylesheet' href='main_style.css'>
</head>
<body style='background:;font-family: pf_dintext_proregular;'>
<div style='max-width:500px;margin:10% auto;border:1px solid #efeeee;;background:url(img/logo_mesage.png) no-repeat 50% 95%;color:#000;'>
<h2 style='text-align:center;font-size:20px;padding:2% 0 2% 0'>Заявка не отправлена попробуйте еще раз!</h2>

 
<p style='text-align:left;padding:2%;padding-bottom:60px;'>Подождите, сейчас вы будете перенаправлены на главную страницу...</p>
</div>
</body>";  
}
 
?>