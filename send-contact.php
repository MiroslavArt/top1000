<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<?php
require __DIR__ . '/vendor/autoload.php';


// Создание клиента
    $subdomain = 'assocman';            // Поддомен в амо срм
    $login     = '5303097@gmail.com';            // Логин в амо срм
    $apikey    = 'a1f8bf5dadf990aeb327182ee187cda0b1ee145b';            // api ключ

echo '<pre>';
print_r($_POST['department']);
echo  '</pre>';

if(isset($_POST['phone'])) {

  try {




    $amo = new \AmoCRM\Client($subdomain, $login, $apikey);

    // Вывести полученые из амо данные
     echo '<pre>';
     print_r($amo->account->apiCurrent());
     echo '</pre>';

    // создаем лида
    $lead = $amo->lead;
    $lead['name'] = $_POST['product_name'];

//    $lead->addCustomField(3797884, [
//        [$_POST['utm_source']],
//    ]);
//
//    $lead->addCustomField(595041, [
//        [$_POST['utm_medium']],
//    ]);
//
//    $lead->addCustomField(595043, [
//        [$_POST['utm_campaign']],
//    ]);
//
//    $lead->addCustomField(595045, [
//        [$_POST['utm_content']],
//    ]);
//
//    $lead->addCustomField(595047, [
//        [$_POST['utm_term']],
//    ]);
//
//    $id = $lead->apiAdd();

    // Получение экземпляра модели для работы с контактами
    $contact = $amo->contact;

    // Заполнение полей модели
    $contact['name'] = isset($_POST['name']);
    $contact['linked_leads_id'] = [(int)$id];
    $contact['company_name'] = 'ООО Тестовая компания';

    $contact->addCustomField(
        57677, [['gelius2222ee@gmail.com', 'WORK'],
    ]);

      $contact->addCustomField(
          57675, [['+79309031619', 'WORK'],
      ]);

      $contact->addCustomField(
          762887, [['33'],
      ]);
      $contact->addCustomField(
          364059, [['Высший руководитель'],
      ]);



      // Добавление нового контакта и получение его ID
    $id = $contact->apiAdd();






// Добавить компанию
      $company = $amo->company;
      $company->debug(true); // Режим отладки
      $company['name'] = 'ООО Тестовая компания';
      $company['request_id'] =[(int)$id];

      $id = $company->apiAdd();



  } catch (\AmoCRM\Exception $e) {
      printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
  }

}

?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ваша заявка успешно отправлена</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'IBM Plex Sans', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            <br><span style="font-size:33px;font-weight:500;">Спасибо!</span><br><br>
            Ваша заявка успешно отправлена.<br>

            <?php if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']) { ?>
                <br><br><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" style="text-decoration: none; border-bottom: 1px dotted">Вернуться назад</a>
             <?php } ?>
        </div>
    </div>
</div>

</body>
</html>
