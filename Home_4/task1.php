<?php
$job = [
'name' => ['Bell Integrator', 'Лаборатория Касперского', 'ГК Астра'],
'data' => ['2015 - 2020', '2020 - 2022', '2023 - настоящее время'],
'desc' => ['Bell Integrator – крупный системный интегратор,
            предоставляющий технологические услуги и инновационные сервисы.
            Мы помогаем заказчикам трансформировать бизнес с помощью таких технологий,
            как: Дополненная реальность, Интернет вещей, Искусственный Интеллект и других инноваций.
            Клиенты Bell Integrator – крупнейшие корпорации, ведущие российские банки.
            Компания Bell Integrator успешно работает на российском рынке с 2003 года
             и имеет 6 представительств в России и Беларуси. ',
             '«Лаборатория Касперского» уже 25 лет защищает мир от киберугроз.
             Более 400 миллионов пользователей выбирают наши технологии для защиты своих данных,
             а мы каждый день работаем над их совершенствованием. Сегодня наша команда —
              это более 4 500 экспертов, которые работают в 59 странах мира. Все мы — обычные люди.
               Мы можем что-то не уметь, что-то не любить. Но вместе мы спасаем мир!',
               'Группа компаний «Астра» — один из лидеров российского рынка информационных технологий
               в области разработки программного обеспечения (ПО) и средств защиты информации.
               В команде сегодня трудится более 1 500 высокопрофессиональных разработчиков и сотрудников техподдержки,
               а программные продукты «Астры» используются в государственных и коммерческих
               организациях со штатом от 5 до 50 000 человек, в госкорпорациях и концернах,
               на промышленных предприятиях и объектах критической информационной инфраструктуры.']
]
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">
<div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
         <?php for($i = 0; $i < count($job); $i++):?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $job['name'][$i]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
          <?= $job['data'][$i]; ?></h6>
          <p><?= $job['desc'][$i]; ?></p>
          <hr>
        </div>
        <?php endfor; ?>
      </div>

 </body>
 </html>