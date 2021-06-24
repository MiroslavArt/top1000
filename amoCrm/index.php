<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';


/*
 *
 *
 *
 * // создаем лида
$lead = $amo->lead;
$lead['name'] = $reg_colleague_lastname .' '.$reg_colleague_name . " " .$reg_colleague_patronymic;
$lead['status_id'] = 36643402;


$id_lead = $lead->apiAdd();



// Заполнение полей модели
$contact['first_name'] = $reg_colleague_name . " " .$reg_colleague_patronymic;
$contact['last_name'] = $reg_colleague_lastname;
$contact['linked_leads_id'] = [(int)$id];


//ID TOP1000
$contact->addCustomField(
    762887, [[$id_element],
]);

$contact->addCustomField(
    765189, [[$phone],
]);


$contact->addCustomField(
    342953, [[$y],
]);





$contact->addCustomField(
    96201, [[$companyaddress],
]);


$contact->addCustomField(
    764017, [[$hesh_id],
]);


// Добавление нового контакта и получение его ID
$id = $contact->apiAdd();


// Добавить компанию
$company = $amo->company;
$company['name'] = $opf . ' ' . $companyname;







//Отрасль компании
$company->addCustomField(
    213377, [[$otr[$department]],
]);

//Откуда пришел лид
$company->addCustomField(
    121445, [['Сайт'],
]);

$company_id = $company->apiAdd();

$link = $amo->links;
$link['from'] = 'contacts';
$link['from_id'] = $id;
$link['to'] = 'companies';
$link['to_id'] = $company_id;
$link->apiLink();


$link2 = $amo->links;
$link2['from'] = 'leads';
$link2['from_id'] = $id_lead;
$link2['to'] = 'contacts';
$link2['to_id'] = $id;
$link2->apiLink();

$link3 = $amo->links;
$link3['from'] = 'leads';
$link3['from_id'] = $id_lead;
$link3['to'] = 'companies';
$link3['to_id'] = $company_id;
$link3->apiLink();



$el = new CIBlockElement;



$arLoadProductArray = Array(
    "IBLOCK_ID"      => 12,
    "NAME"           => $hesh_id,
    "ACTIVE"         => "Y",            // активен
);
$PRODUCT_ID = $el->Add($arLoadProductArray);

 *
 *
 *
 *
 *
 *
 * */













// Создание клиента
$subdomain = 'assocman';                                          // Поддомен в амо срм
$login = '5303097@gmail.com';                                    // Логин в амо срм
$apikey = 'a1f8bf5dadf990aeb327182ee187cda0b1ee145b';            // api ключ

$amo = new \AmoCRM\Client($subdomain, $login, $apikey);


global $USER;

$data = CUser::GetList(($by="ID"), ($order="ASC"),
    array(
        'ACTIVE' => 'Y',
        'UF_AMO' => 1,

    ), array("SELECT"=>array("UF_*"))
);

while($arUser = $data->Fetch()) {
    $lastName = $arUser['LAST_NAME']; //фамилия
    $name = $arUser['NAME'];  //имя
    $middleName = $arUser['SECOND_NAME']; //отчество
    $companyname = $arUser['WORK_COMPANY']; // компания
    $department = $arUser['UF_DEPARTMENT']; // отрасль
    $position = $arUser['WORK_POSITION']; // должность
    $functional = $arUser['UF_FUNCTIONAL'];  //функциональное направление
    //$arUser['UF_ACHIEVEMENT'];  //достижения
    $email = $arUser['EMAIL'];           //EMAIL
    $phone = $arUser['PERSONAL_PHONE'];  //Телефон
    $opf = $arUser['UF_OPF'];  // OOO
    $companyaddress = $arUser['UF_COMPANYADDRESS']; // Адресс компании

    var_dump($arUser['ID']);
    echo $lastName . ' ' . $name . " " . $middleName;

if( $amo->contact->apiList(['query' => $lastName . ' ' . $name . " " . $middleName,])){
    echo 'test2';
} else {
 echo 'test';
}
//    if( $amo->contact->apiList(['query' => $lastName . ' ' . $name . " " . $middleName,])){
//        // Если есть
//    } else {
//
//
//        // создаем лида
//        $lead = $amo->lead;
//        $lead['name'] = $lastName . ' ' . $name . " " . $middleName;
//        $lead['status_id'] = 35898730;
//
//        $id_lead = $lead->apiAdd();
//
//
//        // Получение экземпляра модели для работы с контактами
//        $contact = $amo->contact;
//
//        // Заполнение полей модели
//        $contact['first_name'] = $name . " " .$middleName;
//        $contact['last_name'] = $lastName;
//        $contact['linked_leads_id'] = [(int)$id];
//
//        //Имя Отчество
//        $contact->addCustomField(
//            213411, [[$name. ' '.$middleName],
//        ]);
//
//        //Имя
//        $contact->addCustomField(
//            762895, [[$name],
//        ]);
//
//        //Фамилия
//        $contact->addCustomField(
//            762893, [[$lastName],
//        ]);
//
//        //Отчество
//        $contact->addCustomField(
//            762897, [[$middleName],
//        ]);
//
//
//        // email
//        $contact->addCustomField(
//            765191, [[$email],
//        ]);
//        // телефон
//        $contact->addCustomField(
//            765189, [[$phone],
//        ]);
//
//        //Участник ТОП 1000
//        $contact->addCustomField(
//            57873, [['Y'],
//        ]);
//
//        //Должность
//        $contact->addCustomField(
//            57673, [[$position, 'WORK'],
//        ]);
//
//
//        //Адрес контакта
//        $contact->addCustomField(
//            96201, [[$companyaddress],
//        ]);
//
//
//        //Функциональное направление
//        $contact->addCustomField(
//            364059, [[$functional],
//        ]);
//
//        $id = $contact->apiAdd();
//
//
//
//
//
//        /*
//         * Компания
//         *
//         * */
//
//
//        if ($amo->company->apiList(['query' => $opf . ' ' . $companyname,])){
//            $company = $amo->company->apiList(['query' =>$opf . ' ' . $companyname,]);
//            $link = $amo->links;
//            $link['from'] = 'companies';
//            $link['from_id'] = $company[0]['id'];
//            $link['to'] = 'contacts';
//            $link['to_id'] = $id;
//            $link->apiLink();
//        } else {
//            // Добавление нового контакта и получение его ID
//            $id = $contact->apiAdd();
//
//
//            // Добавить компанию
//            $company = $amo->company;
//            $company['name'] = $opf . ' ' . $companyname;
//
//
//            //Отрасль компании
//            $company->addCustomField(
//                213377, [[$department],
//            ]);
//            $company_id = $company->apiAdd();
//        }
//
//
//
//
//        /*
//         * Линки
//         * */
//        $link = $amo->links;
//        $link['from'] = 'contacts';
//        $link['from_id'] = $id;
//        $link['to'] = 'companies';
//        $link['to_id'] = $company_id;
//        $link->apiLink();
//
//
//        $link2 = $amo->links;
//        $link2['from'] = 'leads';
//        $link2['from_id'] = $id_lead;
//        $link2['to'] = 'contacts';
//        $link2['to_id'] = $id;
//        $link2->apiLink();
//
//        $link3 = $amo->links;
//        $link3['from'] = 'leads';
//        $link3['from_id'] = $id_lead;
//        $link3['to'] = 'companies';
//        $link3['to_id'] = $company_id;
//        $link3->apiLink();
//
//    }

}


?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
