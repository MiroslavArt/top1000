<?$IsAjax = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' || !empty($_REQUEST['year']);
if ($IsAjax):
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
else:
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Регистрация");
endif;?>
<?

if(isset($_POST["VERSION"])) { // переменная даёт возможность создавать несколько вариантов обработчиков
  if (intval($_POST["VERSION"]) == 2) {
    # разбираем POST данные #


    $arParams = Array(
      "form"            => (isset($_POST["FORM"])?$_POST["FORM"]:""), // Название вормы приписанное в шаблоне
      "companyname"     => (isset($_POST["companyname"])?$_POST["companyname"]:""), // Название компании
      "opf"     => (isset($_POST["opf"])?$_POST["opf"]:""), // ОПФ
      "companyaddress"  => (isset($_POST["companyaddress"])?$_POST["companyaddress"]:""), // Адрес компании
      "department"      => (isset($_POST["department"])?intval($_POST["department"]):0), // id отрасли
      "reg_income_1"    => (isset($_POST["reg_income_1"])?$_POST["reg_income_1"]:""), // Динамика выручки
      "reg_income_2"    => (isset($_POST["reg_income_2"])?$_POST["reg_income_2"]:""), // Динамика прибыли
      "reg_people"      => (isset($_POST["reg_people"])?$_POST["reg_people"]:""), // Динамика численности персонала
      "reg_govshare"    => (isset($_POST["reg_govshare"])?$_POST["reg_govshare"]:""), // Доля государственного участия
      "contact_fio"     => (isset($_POST["contact_fio"])?$_POST["contact_fio"]:""), // ФИО
      "position"        => (isset($_POST["position"])?$_POST["position"]:""), // Должность
      "email"           => (isset($_POST["email"])?htmlspecialchars($_POST["email"]):""), // E-mail
      "phone"           => (isset($_POST["phone"])?htmlspecialchars($_POST["phone"]):""), // Контактный телефон
      "reg_agree"       => (isset($_POST["reg_agree"])?htmlspecialchars($_POST["reg_agree"]):""), // Cогласие на обработку персональных данных (чекбокс)
      "refereal"        => (isset($_POST["REFEREAL"])?htmlspecialchars($_POST["REFEREAL"]):""), // refereal
      "functional"      => (isset($_POST["functional"])?intval($_POST["functional"]):0), // функциональное направление
      "name"            => (isset($_POST["name"])?htmlspecialchars($_POST["name"]):""), // имя
      "last_name"       => (isset($_POST["last_name"])?htmlspecialchars($_POST["last_name"]):""), // фамилия
      "second_name"     => (isset($_POST["second_name"])?htmlspecialchars($_POST["second_name"]):""), // отчество
      "exp"             => (isset($_POST["exp"])?htmlspecialchars($_POST["exp"]):""), // стаж работы в компании

    );



      # создаём пользователя #
    // новый класс пользователя для добавления
    $user = new CUser;
    // придумываем ему пароль
    $autoPass = mb_substr(md5(uniqid(rand(),true)), 0, 8);

    // массив свойств пользователя
    $arFields = Array();
    // Строки зависящие от формы
    if($arParams["form"] == "form1") {
      $arFields["NAME"]  = $arParams["contact_fio"]; //имя
      $arFields["UF_DYNAMICS_INCOME_1"]   = $arParams["reg_income_1"]; // Динамика выручки
      $arFields["UF_DYNAMICS_INCOME_2"]   = $arParams["reg_income_2"]; // Динамика прибыли
      $arFields["UF_DYNAMICS_PEOPLE"]     = $arParams["reg_people"];   // Динамика численности персонала
      $arFields["UF_DYNAMICS_GOVSHARE"]   = $arParams["reg_govshare"]; // Доля государственного участия
      $arFields["GROUP_ID"]               = array(6); // контактное лицо
      $arFields["UF_KICKED"]              = "Y"; // не учасвствовакть в рерйтинге(незнаю что зап чекс \ было бы здорово если бы он работал)
      $send_templ = "REGISTER_CONTACT";
      $arFields["UF_FUNCTIONAL"]  = 24418; // функциональное направление 24418 - Контакт
    }
    else {
      if($arParams["form"] == "form2"){
      	$send_templ = "REGISTER";
      }
      $arFields["NAME"]           = $arParams["name"]; //имя
      $arFields["LAST_NAME"]      = $arParams["last_name"]; //фамилия
      $arFields["SECOND_NAME"]    = $arParams["second_name"]; //отчество
      $arFields["GROUP_ID"]       = array(3,4); // право учавствовать и голосовать
      $arFields["UF_FUNCTIONAL"]  = $arParams["functional"]; // функциональное направление
      $arFields["UF_DYNAMICS_INCOME_1"]   = $arParams["reg_income_1"]; // Динамика выручки
      $arFields["UF_DYNAMICS_INCOME_2"]   = $arParams["reg_income_2"]; // Динамика прибыли
      $arFields["UF_DYNAMICS_PEOPLE"]     = $arParams["reg_people"];   // Динамика численности персонала
      $arFields["UF_DYNAMICS_GOVSHARE"]   = $arParams["reg_govshare"]; // Доля государственного участия
    }
    //вторая строка
    $arFields["WORK_COMPANY"]   = $arParams["companyname"]; // компания
    $arFields["UF_OPF"]   = $arParams["opf"]; // компания
    $arFields["UF_COMPANYADDRESS"]   = $arParams["companyaddress"]; // компания
    $arFields["UF_DEPARTMENT"]  = $arParams["department"]; // отрасль
      
    //третья строка
    $arFields["WORK_POSITION"]  = $arParams["position"]; // должность
    $arFields["UF_EXPIRIENCE"]  = $arParams["exp"]; // Стаж работы в компании
      
    //пятая строка
    //"UF_LAST_WORK" => $userLastWork; //прошлое место работы
      
    //шестая строка
    //$arFields["UF_ACHIEVEMENT"] = $arParams["achievement"]; //достижения
      
    //седьмая строка
    $arFields["EMAIL"]          = $arParams["email"]; // почта
    $arFields["PERSONAL_PHONE"] = $arParams["phone"]; // телефон


      
    //служебные данные
    $arFields["LOGIN"]          = $arParams["email"];
    $arFields["ACTIVE"]         = "Y";
    
    $arFields["PASSWORD"]         = $autoPass;
    $arFields["CONFIRM_PASSWORD"] = $autoPass;
      
    $arFields["UF_FORM"]        = $arParams["form"];
    $arFields["UF_REFEREAL"]    = $arParams["refereal"];
    $arFields[ "PERSONAL_PHOTO"]  = $_FILES['foto'];


	/* Костыль от 14.02.2019.
	Если нас регистрировало КОНТАКТНОЕ ЛИЦО
	пробрасываем показатели, отрасль и адрес компании от контактного лица
	*/

	if (isset($arParams["refereal"])) {
		$contactsGroupID = 6;
		if(in_array($contactsGroupID, CUser::GetUserGroup($arParams["refereal"]))) {
			$rsUser = CUser::GetByID($arParams["refereal"]);
			$arUser = $rsUser->Fetch();
			$arFields["UF_DYNAMICS_INCOME_1"]   = $arUser["UF_DYNAMICS_INCOME_1"]; // Динамика выручки
			$arFields["UF_DYNAMICS_INCOME_2"]   = $arUser["UF_DYNAMICS_INCOME_2"]; // Динамика прибыли
			$arFields["UF_DYNAMICS_PEOPLE"]     = $arUser["UF_DYNAMICS_PEOPLE"];   // Динамика численности персонала
			$arFields["UF_DYNAMICS_GOVSHARE"]   = $arUser["UF_DYNAMICS_GOVSHARE"]; // Доля государственного участия
			$arFields["UF_DEPARTMENT"]  = $arUser["UF_DEPARTMENT"]; // отрасль
			$arFields["UF_COMPANYADDRESS"]   = $arUser["UF_COMPANYADDRESS"]; // компания
			$arFields["UF_OPF"]   = $arUser["UF_OPF"]; // компания
            $arFields[ "PERSONAL_PHOTO"]  = $_FILES['foto']['tmp_name'];
            //$arFields["UF_REFEREAL"]    = $arUser["UF_REFEREAL"];





        } else {
			//echo "юзер - участник";
		}
	}

    // Валидация достижений
    $strError = '';
    if(isset($_POST["achievement"])) {
      $arFields["UF_ACHIEVEMENT"] = strip_tags($_POST["achievement"], '<ul><li><br>');
      if(mb_strlen(strip_tags($_POST["achievement"])) == 1500){
        $strError = "Поле с достижениями не должно быть более 1500 символов ".mb_strlen(strip_tags($_POST["achievement"]));
        echo '{"text":"'.$strError.'","error": 1}';
      }
    }
    if($strError == ''){
      // Добавляем пользователя
      $ID = $user->Add($arFields);
      if (intval($ID) > 0) {
        // дополнительные поля реферера в почту
        if($arParams["refereal"] !="") {
          $rsUser = CUser::GetByID($arParams["refereal"]);
          $arUser = $rsUser->Fetch();
          $arFields["REFER_NAME"] = $arUser["NAME"];
          $arFields["REFER_LAST_NAME"] = $arUser["LAST_NAME"];
          $arFields["REFER_SECOND_NAME"] = $arUser["SECOND_NAME"];
            $arFields[ "PERSONAL_PHOTO"]  = $_FILES['foto']['tmp_name'];
        }
        // кидаемся в него и в себя почтой в зависимости от формы
        if(isset($send_templ)) {
          CEvent::Send($send_templ,SITE_ID,$arFields);
        } else {
          if(!empty($_POST["REG_COL"])) {
            CEvent::Send('REGISTER_COL',SITE_ID,$arFields);
          } else {
            CEvent::Send('REGISTER',SITE_ID,$arFields);
          }
        }
          $id_element = $ID;
          echo '{"text": "Cпасибо за регистрацию","error": 0,"user_id":"'.$ID.'"}';








      } else {
          // не получилось создать пользователя
          echo '{"text": "Пользователь с таким email уже существует","error": 1,"user_id":"'.$ID.'"}';
          $result = array( '{"text":"'.$user->LAST_ERROR.'","error": 1}');

      }
    }
  } else {
    echo '{"text":"Форма устарела, повторите ваш запрос позже.","error": 1}';
  }
} else {

  //
  //разбираем POST данные
  //




  $userName = $_POST["name"];
  $userLastName = $_POST["last_name"];
  $userSecondName = $_POST["second_name"];

  if($_POST["company"]){
  	$userCompany = $_POST["company"];
  } else {
  	$userCompany = $_POST["company_other"];
  }
  $userDepartment = $_POST["department"];
  $userPosition = $_POST["position"];
  $userFunctional = $_POST["functional"];
  $userExpirience = $_POST["exp"];
  $userLastWork = $_POST["last_work"];
  $userAchievement = $_POST["achievement"];
  $userMail = $_POST["mail"];
  $userPhone = $_POST["phone"];

  $FORM = $_POST["FORM"];

  $refer = $_POST["REFEREAL"];



  $user = new CUser;
  $autoPass = mb_substr(md5(uniqid(rand(),true)), 0, 8);


  $arFields = Array(
  	//первая строка
    "NAME"	=>	$userName, //имя
    "LAST_NAME"	=> $userLastName, //фамилия
    "SECOND_NAME"	 => $userSecondName, //отчество
    
    //вторая строка
    "WORK_COMPANY"	=> $userCompany, // компания
    "UF_DEPARTMENT" => $userDepartment, // отрасль
    
    //третья строка
    "WORK_POSITION" => $userPosition, // должность
    
    //четвертая строка
    "UF_FUNCTIONAL" => $userFunctional, //функциональное направление
    
    //пятая строка
    "UF_EXPIRIENCE" => $userExpirience, //стаж
    "UF_LAST_WORK" => $userLastWork,//прошлое место работы
    
    //шестая строка
    "UF_ACHIEVEMENT" => $userAchievement,//достижения
    
    //седьмая строка
    "EMAIL"             => $userMail,//почта
    "PERSONAL_PHONE" => $userPhone,
    "PERSONAL_PHOTO" => $_FILES['foto']['tmp_name'],
    
    ///служебные данные
    "LOGIN" => $userMail,
    
    "ACTIVE"            => "Y",
    //"GROUP_ID"          => array(10,11),
    
    "PASSWORD"          => $autoPass,
    "CONFIRM_PASSWORD"  => $autoPass,
    //"PERSONAL_PHOTO"    => $arIMAGE
    
    "UF_FORM" => $FORM,
    "UF_REFEREAL" => $_POST["REFEREAL"],
    
    //UF_CONTACTS_FIO
    //UF_CONTACTS_WORK_POSITION
    //UF_CONTACT_PHONE
    
    //UF_DYNAMICS_
    
    
  );


  $ID = $user->Add($arFields);
  if (intval($ID) > 0):
      //echo "Пользователь успешно добавлен.";








  		if($refer) {
  			$rsUser = CUser::GetByID($refer);
  			$arUser = $rsUser->Fetch();
  			$arFields["REFER_NAME"] = $arUser["NAME"];
  			$arFields["REFER_LAST_NAME"] = $arUser["LAST_NAME"];
  			$arFields["REFER_SECOND_NAME"] = $arUser["SECOND_NAME"];
  		}

  	if($_POST["REG_COL"]) {
  		CEvent::Send('REGISTER_COL',SITE_ID,$arFields);
  	} else {
  		CEvent::Send('REGISTER',SITE_ID,$arFields);
  	}

  	echo '{"text": "Регистрация участника прошла успешно. На указанную при регистрации эл. почту отправлено письмо с информацией о регистрации. ","error": 0,"user_id":"'.$ID.'"}';
  else:
      echo '{"text": "Пользователь с таким email уже существует","error": 1,"user_id":"'.$ID.'"}';

  ?>

     <?php endif;
}









?>

<?php





if ($IsAjax)
{
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
}
else
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
}
?>