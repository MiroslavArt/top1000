<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?require_once($_SERVER['DOCUMENT_ROOT'].'/local/templates/.default/header.php');
$request = \Bitrix\Main\HttpApplication::getInstance()->getContext()->getRequest();
$login = $request->get('USER_LOGIN');
?>
<!-- Facebook Pixel Code -->
<?php if(!$login): ?>
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
<?php endif; ?>
<!-- End Facebook Pixel Code -->
									<div class="center-wrapper">
				<div class="page-content">
					
					<!-- Breadcrumbs -->
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bread", Array(
	
	),
	false
);?>
					
					<!-- Breadcrumbs END -->
				