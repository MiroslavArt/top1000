<?php

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$reg_colleague_name = 'Лешуков';
$reg_colleague_lastname  = 'Александр';
$reg_colleague_patronymic = 'Васиgrgльевич';
$email = 'gelius2881@gmail.com';
$phone = "+79209031619";
$id;
$opf = 'ООО';
$companyname = 'Тестовая компания 2Eа';
$companyaddress = 'Адрес есть';

$department = 'Лесная и лесоперерабатывающая промышленность';
$position = 'Должность';
$dropdown = 'Коммерческие банки';

$hesh_id = hash('ripemd160', $reg_colleague_name. $reg_colleague_lastname . $reg_colleague_patronymic. $opf.$companyname );





// Создание клиента
$subdomain = 'assocman';            // Поддомен в амо срм
$login = '5303097@gmail.com';            // Логин в амо срм
$apikey = 'a1f8bf5dadf990aeb327182ee187cda0b1ee145b';            // api ключ




    try {




        $amo = new \AmoCRM\Client($subdomain, $login, $apikey);

        // Вывести полученые из амо данные
     echo '<pre>';
     print_r($amo->account->apiCurrent());
     echo '</pre>';

        // создаем лида
        $lead = $amo->lead;
        $lead['name'] = $reg_colleague_name .' '.$reg_colleague_lastname . " " .$reg_colleague_patronymic;
        $lead['status_id'] = 36643402;

//    $lead->addCustomField(3797884, [
//        [$_POST['utm_source']],
//    ]);
//


    $id_lead = $lead->apiAdd();

        // Получение экземпляра модели для работы с контактами
        $contact = $amo->contact;

        // Заполнение полей модели
        $contact['first_name'] = $reg_colleague_name .' '.$reg_colleague_lastname . " " .$reg_colleague_patronymic;
        $contact['last_name'] = 'test280';
        $contact['linked_leads_id'] = [(int)$id];

//        //Имя Отчество
//        $contact->addCustomField(
//            213411, [[$reg_colleague_patronymic],
//        ]);
//
//        //Имя
//        $contact->addCustomField(
//            762895, [[$reg_colleague_name],
//        ]);
//
//        //Фамилия
//        $contact->addCustomField(
//            762893, [[$reg_colleague_lastname],
//        ]);
//
//        //Отчество
//        $contact->addCustomField(
//            762897, [[$reg_colleague_patronymic],
//        ]);
//        // email
//        $contact->addCustomField(
//            57677, [[$email, 'WORK'],
//        ]);
//
//        //Контактное лицо
//        $contact->addCustomField(
//            184787, [['Y'],
//        ]);
//
//        $contact->addCustomField(
//            57675, [[$phone, 'WORK'],
//        ]);
//
//        $contact->addCustomField(
//            762887, [[$ID],
//        ]);
//
//
//        $contact->addCustomField(
//            96201, [[$companyaddress],
//        ]);
//
//
//        $contact->addCustomField(
//            764017, [[$hesh_id],
//        ]);
//
//
//        // Добавление нового контакта и получение его ID
        $id = $contact->apiAdd();
//
//
//        // Добавить компанию
//        $company = $amo->company;
//        $company['name'] = $opf . ' ' . $companyname;
//
//        $company->addCustomField(
//            57681, [[$companyaddress, 'WORK'],
//        ]);
//
//
//        //Функциональное направление
//        $company->addCustomField(
//            764095, [[$department, 'WORK'],
//        ]);
//
//        //Другая отрасль
//        $company->addCustomField(
//            213381, [[$position, 'WORK'],
//        ]);
//
//        //Отрасль компании
//        $company->addCustomField(
//            213377, [[$dropdown],
//        ]);
//
//
//        //Откуда пришел лид
//        $company->addCustomField(
//            121445, [['Сайт'],
//        ]);
//
//        $company_id = $company->apiAdd();
//
//        $link = $amo->links;
//        $link['from'] = 'contacts';
//        $link['from_id'] = $id;
//        $link['to'] = 'companies';
//        $link['to_id'] = $company_id;
//        var_dump($link->apiLink());
//
//
//         $link2 = $amo->links;
//        $link2['from'] = 'leads';
//        $link2['from_id'] = $id_lead;
//        $link2['to'] = 'contacts';
//        $link2['to_id'] = $id;
//        var_dump($link2->apiLink());


    } catch (\AmoCRM\Exception $e) {
        printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
    }
