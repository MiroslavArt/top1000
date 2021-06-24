<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="facebook-domain-verification" content="ryucgx3bbwkiclfucu8rd97665lr4v" />
<?$APPLICATION->ShowHead();?>



<title><?$APPLICATION->ShowTitle()?></title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5RVZ3JT');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L7E2N9VRBF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L7E2N9VRBF');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(62832355, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/62832355" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<link rel="stylesheet" type="text/css" href="/js/slick/slick.css" media="all"/>
<link rel="stylesheet" type="text/css" href="/css/icheck.css" media="all"/>
<link rel="stylesheet" type="text/css" href="/css/jquery.jscrollpane.css" media="all"/>
<link rel="stylesheet" type="text/css" href="/js/jquery.qtip.custom/jquery.qtip.min.css" media="all"/>
<link rel="stylesheet" type="text/css" href="/css/style.css" media="all"/>

<script charset="utf-8"  type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/js/masked.input.js"></script>

<script type="text/javascript" src="/js/slick/slick.min.js"></script>
<script type="text/javascript" src="/js/icheck.min.js"></script>

<script type="text/javascript" src="/js/TweenMax.min.js"></script>
<script type="text/javascript" src="/js/jquery.gsap.min.js"></script>
<script type="text/javascript" src="/js/flux.min.js"></script>
<script type="text/javascript" src="/js/jquery.nicefileinput.min.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/js/jquery.qtip.custom/jquery.qtip.js"></script>
<script type="text/javascript" src="/js/jquery.form.js"></script>
<script type="text/javascript" src="/js/jquery.waitforimages.js"></script>

<script src="https://api-maps.yandex.ru/2.0/?load=package.full&amp;lang=ru-RU"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/adap.css">

<script type="text/javascript" src="/js/scripts.js"></script>

</head>

<body>
<?$APPLICATION->ShowPanel()?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '3241232509242880');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=3241232509242880&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1163369037356691');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1163369037356691&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RVZ3JT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?
$getDir = $APPLICATION->getCurDir();
$dirArray = explode("/",$getDir);
$parentDir = $dirArray[1];
//print_r($getDir);
?>

<div class="top-wrap">

  <div class="top-main">
		<?if($parentDir != "profile"):?>
			<div class="header">
				<div class="header-top clearfix">
					<div class="center-wrapper">
						<div class="header-top-logo">
							<a href="/"><img src="/images/header-top-logo.png"/></a>

						</div>
						<?if($parentDir != "news"):?>
								<?$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"headMenu",
								array(
									"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "N",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N"
								),
								false
							);?>
						<?else:?>
								<?$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"headMenu2",
								array(
									"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "N",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N"
								),
								false
							);?>

						<?endif;?>

						<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "topBtn", array(
							"REGISTER_URL" => "",
								"FORGOT_PASSWORD_URL" => "",
								"PROFILE_URL" => "/profile/",
								"SHOW_ERRORS" => "Y"
							),
							false,
							array(
							"ACTIVE_COMPONENT" => "Y"
							)
						);?>


					</div>
				</div>
				<div class="header-bottom clearfix">
					<div class="center-wrapper">
						<div class="header-logo">
							<a href="https://amr.ru/" target="_blank"><?$APPLICATION->IncludeComponent("bitrix:main.include",".default",Array("AREA_FILE_SHOW" => "file","EDIT_TEMPLATE" => "","PATH" => "/include/header-logo-main.php"));?></a>
						</div>
						<div class="header-site-ttl">
							<?$APPLICATION->IncludeComponent("bitrix:main.include",".default",Array("AREA_FILE_SHOW" => "file","EDIT_TEMPLATE" => "","PATH" => "/include/header-logo-main-ttl.php"));?>
						</div>
						<div class="header-partners">
							<?$APPLICATION->IncludeComponent("bitrix:main.include",".default",Array("AREA_FILE_SHOW" => "file","EDIT_TEMPLATE" => "","PATH" => "/include/header-partner-1.php"));?>
							<?$APPLICATION->IncludeComponent("bitrix:main.include",".default",Array("AREA_FILE_SHOW" => "file","EDIT_TEMPLATE" => "","PATH" => "/include/header-partner-2.php"));?>
							<div class="ttl">Партнеры</div>
						</div>
					</div>
				</div>

			</div>
		<?else:?>
			<?
			if ($USER->GetID()) {
				//localRedirect("/profile/");
				$rsUser = CUser::GetByID($USER->GetID());
				$arUser = $rsUser->Fetch();
				$photo = CFile::ResizeImageGet($arUser["PERSONAL_PHOTO"], array('width'=>220, 'height'=>220), BX_RESIZE_IMAGE_EXACT, true);
				//$arPhoto = CFile::GetByID($arUser["PERSONAL_PHOTO"]);
				//$photo = $arPhoto->Fetch();
				//echo "<pre>"; print_r($arUser); echo "</pre>";
				//echo "<pre>"; print_r($photo); echo "</pre>";
				CModule::includeModule("iblock");
			} else {
				localRedirect("/");
			}
			?>
			<div class="header header-profile">
				<div class="center-wrapper">
					<div class="header-content clearfix">
						<div class="header-logo">
							<a href="/"><img src="/images/header-top-logo.png"/></a>
						</div>
						<div class="header-username">
							Здравствуйте, <span><?=$arUser["NAME"];?> <?=$arUser["LAST_NAME"];?></span>
						</div>
						<ul class="header-profile-menu">
							<li><a href="/profile/edit/" <?if($getDir=="/profile/" or $getDir=="/profile/edit/"):?> class="act" <?endif;?>>Мой профиль</a></li>

								<li><a href="/profile/registration/" <?if($getDir=="/profile/registration/"):?> class="act" <?endif;?> >Регистрация</a></li>

							<?if(STATE == "REGISTRATION"):?>
								<li><a href="/profile/registration/" <?if($getDir=="/profile/registration/"):?> class="act" <?endif;?> >Регистрация</a></li>
							<?elseif(STATE == "VOTING"):?>
								<li><a href="/profile/voting/" <?if($getDir=="/profile/voting/"):?> class="act" <?endif;?> >Голосование</a></li>
							<?endif;?>
						</ul>
						<div class="logout-link">
							<a href="?logout=yes">Выйти</a>
						</div>
					</div>
				</div>
			</div>
		<?endif;?>
		<div class="body">
