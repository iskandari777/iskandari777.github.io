<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Форма обратной связи в модальном окне и без перезагрузки страницы</title>
    <meta name='author' content="Дмитрий Давыдов" />
    <meta name='copyright' content="Smartlanding.biz" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./telegramform/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="form__wrapper">
      <form id="form-contact" method="POST" class="form-element" autocomplete="off">
        <p class="form-title">Закажите обратный звонок и наш консультант свяжется с вами</p>
        <p class="form-message"></p>
          <input name="name" type="text" class="form-input__name" tabindex="0" placeholder="Введите ваше имя" required>
          <input name="phone" type="tel" class="form-input__phone" tabindex="0" pattern="^[ 0-9]+$" placeholder="Введите ваш телефон" required>
          <input name="theme" type="hidden" class="form-input__theme"  value="Заявка с сайта">
          <input type="submit" class="form-input__button" value="Отправить">
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./telegramform/js/telegramform.js"></script>
    

  </body>
</html>