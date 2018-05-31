<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($GET['name']) && !empty($GET['phone'])){
  if (isset($GET['name'])) {
    if (!empty($GET['name'])){
  $name = strip_tags($GET['name']);
  $nameFieldset = "Имя пославшего: ";
  }
}

if (isset($GET['phone'])) {
  if (!empty($GET['phone'])){
  $phone = strip_tags($GET['phone']);
  $phoneFieldset = "Телефон: ";
  }
}
if (isset($GET['theme'])) {
  if (!empty($GET['theme'])){
  $theme = strip_tags($GET['theme']);
  $themeFieldset = "Тема: ";
  }
}
$token = "386022962:AAEB3ks2fSrExTDhde6ZPtKLo-ZFx3B6Gnw";
$chat_id = "-305991601";
$arr = array(
  $nameFieldset => $name,
  $phoneFieldset => $phone,
  $themeFieldset => $theme
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
 
  echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
    return true;
} else {
  echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
}
} else {
  echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
}
} else {
header ("Location: /");
}

?>