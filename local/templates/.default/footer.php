<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
</div>
	</div>
	</div>
<div class="footer">

	<div class="center-wrapper">
		<div class="footer-content clearfix">
			<div class="footer-l">
				&copy; Рейтинг «ТОП 1000» —<br>
				проект Ассоциации<br>
				менеджеров, 2021
			</div>
			<div class="footer-site-ttl">
				<img src="/images/footer-site-ttl.png" />
			</div>
			<div class="footer-r">
				<a href="https://renart.ru" class="no-ul">Разработка сайта</a> —<br>
				<a href="https://renart.ru">Renaissance Art Group</a>
			</div>
		</div>
	</div>

</div>

<!-- Popups -->



<?$APPLICATION->IncludeComponent(
"bitrix:system.auth.form",
							"form",
							Array(
								"REGISTER_URL" => "register.php",
								"FORGOT_PASSWORD_URL" => "",
								"PROFILE_URL" => "profile.php",
								"SHOW_ERRORS" => "Y"
							)
);?>
<?$APPLICATION->includeComponent("bitrix:system.auth.forgotpasswd","")?>

<?if($_REQUEST["change_password"]=="yes"):?>
<?$APPLICATION->includeComponent("bitrix:system.auth.changepasswd","")?>
<script>
	openPopup("forgotChangePassPopup");
</script>
<?endif;?>

<?if($_REQUEST["auth"] == "yes"):?>
	<script>
		openPopup("loginPopup");
	</script>
<?endif;?>

<?if($parentDir == "profile"):?>
<?$APPLICATION->includeComponent("renart:main.profile.photo","form");?>

<?$APPLICATION->includeComponent("renart:main.profile.change_password","form");?>
<?endif;?>




<!-- Popups END -->

<?//====================================?>
<!-- Rating@Mail.ru counter -->
<script type=""text/javascript"">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3086168", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="https://top-fwz1.mail.ru/counter?id=3086168;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({
    type: 'itemView',
    productid: 'VALUE',
    pagetype: 'VALUE',
    list: 'VALUE',
    totalvalue: 'VALUE'
});
</script>
<!-- // Rating@Mail.ru counter dynamic remarketing appendix -->

<?/* Старая метрика и пиксель FaceBook
<?//====================================?>
<?//====================================?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52612390, "init", {
        id:52612390,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52612390" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
*/?>
<?/*
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
*/?>
</body>
</html>
