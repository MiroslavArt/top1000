ymaps.ready(function() {
	if ($("#contactsMap").length) {
		initMap()
	}
});

$(window).scroll(function() {

	var scrollPos = $(window).scrollTop();
  
	$("a.anchor").each(function() {
		if (scrollPos >= $(this).offset().top - 100) {
			$(".main-menu a").removeClass("act")
			$(".main-menu a[href='#"+$(this).attr("name")+"']").addClass("act");

		}
	})
	
	
	if (scrollPos > 0) {
		$(".header-top").addClass("header-top-fixed");
	} else {
		$(".header-top").removeClass("header-top-fixed");
	}
	
	// Прилипание фильтра голосования
	
	if ($(".vote-filter").length) {
	
		if ($(window).height() > $(".vote-filter").height() + 0) {
			if (scrollPos > $(".vote-filter-wrapper").offset().top - 0) {
			
				console.log($(".vote-filter").position().top + $(".vote-filter").height() +"::"+$(".vote-content").height());
			
				if (scrollPos - $(".vote-filter-wrapper").offset().top + 0 + $(".vote-filter").height() < $(".vote-content").height()) {
					mTop = 0
				} else {
					mTop = $(".vote-content").offset().top + $(".vote-content").height() - $(".vote-filter").height() - scrollPos
				}
				$(".vote-filter").addClass("vote-filter-floating").css({
					top: mTop
				});
			} else {
				$(".vote-filter").removeClass("vote-filter-floating");
			}
		} else {
			$(".vote-filter").removeClass("vote-filter-floating");
		}
		
		if ($(window).height() > $(".vote-list-header").height() + 0) {
			if (scrollPos > $(".vote-content").offset().top - 0) {
			
				console.log($(".vote-list-header").position().top + $(".vote-list-header").height() +"::"+$(".vote-content").height());
			
				if (scrollPos - $(".vote-content").offset().top + 0 + $(".vote-list-header").height() < $(".vote-content").height()) {
					mTop = 0
				} else {
					mTop = $(".vote-content").offset().top + $(".vote-content").height() - $(".vote-list-header").height() - scrollPos
				}
				$(".vote-list-header").addClass("vote-list-header-floating").css({
					top: mTop
				});
				
				$(".vote-content").css({
					paddingTop: $(".vote-list-header").height()
				})
				
			} else {
				$(".vote-list-header").removeClass("vote-list-header-floating");
				$(".vote-content").css({
					paddingTop: 0
				})
			}
		} else {
			$(".vote-list-header").removeClass("vote-list-header-floating");
			$(".vote-content").css({
				paddingTop: 0
			})
		}
		
	}
	
	// Анимация главной
	
	if ($(".home-about-items").length) {
	
		if (scrollPos + $(window).height()/2 + 100 > $(".home-about-items").offset().top && !$(".home-about-items").hasClass("anim-done")) {
			
			$(".home-about-items").addClass("anim-done");
			
			$(".home-about-item").each(function() {
					
				var elem = $(this);
				
				t = setTimeout(function() {
					
					TweenMax.to(elem,1,
						{
							y: 0,
							opacity: 1
						}
					);
					
				},$(this).prevAll().length*400)
				
					
			});
			
		}
	
		if (scrollPos + $(window).height()/2 + 100 > $(".home-stages").offset().top && !$(".home-stages").hasClass("anim-done") && $(".home-stages").length) {
			
			$(".home-stages").addClass("anim-done");
			
			$(".home-stages-item .num").each(function() {
					
				var elem = $(this);
				
				t = setTimeout(function() {
					
					TweenMax.to(elem,.75,
						{
							scale: 1,
							opacity: 1
						}
					);
					
				},$(this).parents(".home-stages-item").prevAll().length*500)
				
					
			});
			
			$(".home-stages-item .date").each(function() {
					
				var elem = $(this);
				
				t = setTimeout(function() {
					
					TweenMax.to(elem,.75,
						{
							x: 0,
							opacity: 1
						}
					);
					
				},$(this).parents(".home-stages-item").prevAll().length*500+100)
				
					
			});
			
			$(".home-stages-item .ttl").each(function() {
					
				var elem = $(this);
				
				t = setTimeout(function() {
					
					TweenMax.to(elem,.75,
						{
							y: 0,
							opacity: 1
						}
					);
					
				},$(this).parents(".home-stages-item").prevAll().length*500+200)
				
					
			});
			
		}
		
		if (scrollPos + $(window).height()/2 + 100 > $(".home-news-items").offset().top && !$(".home-news-items").hasClass("anim-done") && $(".home-news-items").length) {
			
			$(".home-news-items").addClass("anim-done");
			
			$(".home-news-item").each(function() {
					
				var elem = $(this);
				
				t = setTimeout(function() {
					
					TweenMax.to(elem,1,
						{
							y: 0,
							opacity: 1
						}
					);
					
				},$(this).prevAll().length*400)
				
					
			});
			
		}
		
		if (scrollPos + $(window).height()/2 + 100 > $(".home-partners").offset().top && !$(".home-partners").hasClass("anim-done") && $(".home-partners").length) {
			
			$(".home-partners").addClass("anim-done");
			
			$(".home-partners-group").each(function() {
					
				var elem = $(this);
				
				t = setTimeout(function() {
					
					TweenMax.to(elem,1,
						{
							y: 0,
							opacity: 1
						}
					);
					
				},$(this).prevAll().length*400)
				
					
			});
			
		}
	
	}
	
});

$(window).resize(function() {
  pupMakeup();
})


$(window).load(function() {
	
	
});


$(document).ready(function() {
	
	$(".profile-photo-link").on("click",function() {
		return false;
	})

	$("input:checkbox").on("ifChecked",function() {
		$(this).parents(".icheckbox").removeClass("icheckbox-error");
	});

	$(".reg-form .button-continue").on("click",function() {
		$(".reg-step.act").next(".reg-step").trigger("click");
	})

	// $("body").on("keyup","input",function() {
		// submitTrigger($(this))
	// })
	
	// $("body").on("blur","input",function() {
		// submitTrigger($(this))
	// })
	
	// $("body").on("change","select, input:checkbox, input:radio",function() {
		// submitTrigger($(this))
	// })
	
	// $("body").on("ifChanged","input:checkbox",function() {
		// submitTrigger($(this))
	// })

	
	//ajax фильтра голосования
	
	$("body").on("click",".vote-branch-list a, .vote-sort-trigger a, .vote-list .modern-page-navigation a",function() {
		//$(".vote-branch-list a").removeClass("act");
		//$(this).addClass("act")
		ajaxBlock($(this).attr("href"),$(".voting-load-content"),handlePersonForm);
		var stateObj = { foo: "bar" };
		history.pushState(stateObj, "", $(this).attr("href"));
		return false;
	})
	
	// ajax переключашка первой формы на главной
	$("#forma_mutant").on("change",":radio[name='form_mutation']",function() {
		var form_mutation = $(":radio[name='form_mutation']:checked").val();

		$.post(
			"/ajax/forma_mutant.php",
			{
				form_mutation: form_mutation
			},
			function (data)
			{
		  		// Здесь мы получаем данные, отправленные сервером и выводим их на экран.
		  		$("#forma_mutant").html(data);
		  		if ($("#forma_mutant input[type=file]").length) {
						$("#forma_mutant input[type=file]").nicefileinput({
							label : 'Выбрать фотографию'
						});
					}
					
					if ($("#forma_mutant input:text").length) {
						$("#forma_mutant input:text").each(function() {
							if ($(this).val()) {
								$(this).prev(".placeholder").hide();
							}
						});
					}
					
				$("#forma_mutant input.phone").mask("+7 (999) 999-99-99",{completed:function(){this.data("completed",true);}});
		  		$("#forma_mutant select").customSelect();
				$("#forma_mutant input:checkbox").iCheck();
				validateForms();
				reg_form_self();
				$(".reg-form .button-continue").on("click",function() {
					$(".reg-step.act").next(".reg-step").trigger("click");
				})
			}
		);
		 
		
	})
	// Форма голосования
	
	$("body").on("change",".vote-person-form select",function() {
		var formMarks = $(this).parents(".vote-person-form").find("select");
		var selVal = new Array();
		
		var button = $(this).parents(".vote-person-form").find("button")
		
		formMarks.each(function() {
			selVal.push($(this).val())
		})
		if ($.inArray("0",selVal) == "-1") {
			button.attr("disabled",false)
			button.siblings(".disabled-dummy").hide();
		} else {
			button.attr("disabled",true)
			button.siblings(".disabled-dummy").show();
		}
	})
	
	$("body").on("ifChecked",".vote-person-form input:checkbox",function() {
		var formMarks = $(this).parents(".vote-person-form").find("select");
		formMarks.each(function() {
			$(this).val("0").trigger("change").attr("disabled",true);
			$(this).siblings(".param-selector").addClass("selector-disabled")
		})
		$(this).parents(".vote-person-form").find("button").attr("disabled",false)
		$(this).parents(".vote-person-form").find(".disabled-dummy").hide()
		$(this).parents(".vote-person-form").find(".dropdown").hide();
	})
	
	$("body").on("ifUnchecked",".vote-person-form input:checkbox",function() {
		var formMarks = $(this).parents(".vote-person-form").find("select");
		formMarks.each(function() {
			$(this).trigger("change").attr("disabled",false);
			$(this).siblings(".param-selector").removeClass("selector-disabled")
		})
		var button = $(this).parents(".vote-person-form").find("button").attr("disabled",true)
		$(this).parents(".vote-person-form").find(".disabled-dummy").show()
	})
	
	handlePersonForm();
	
	//авторизация
	$("#authForm").ajaxForm({
		url : "/auth/?AUTH=Y",
		type : "POST",
		beforeSubmit: 
			function() {
				$(".login-form .form-footer input:submit").after("<div class='ajax-loader' />")
				$(".login-form .form-footer input:submit").hide()
			},
		success:
			function(responseText) {
				var message = JSON.parse(responseText);
				
				$(".login-form .form-message").remove();
				
				if (message.error == 1) {
					$(".login-form input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".login-form .form-footer input:submit").show()
					$(".login-form .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					$(".login-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".login-form").find(".ajax-loader").remove();
					//$(".login-form").find("input:checkbox").iCheck("disable");
					
					window.location.replace("/profile/voting/");
					
					//dirValue = $("#reg_direction").val()
					
					//$(".reg-form-self").find("input,textarea,select").attr("disabled",true);
					//$(".reg-form-self").find(".param-selector").addClass("selector-disabled");
					//$(".reg-form-self").find(".button-continue").show();
					//$(".reg-step").addClass("unblocked");
					
					//$("#reg_colleague_direction option[value='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option[val='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();
				}
					//alert(responseText);
				
				
				
			}
	});
	
	//форма запроса данных на восстановление
	$("#forgotForm").ajaxForm({
		url : "/auth/?FORGOT=Y",
		type : "POST",
		beforeSubmit: 
			function() {
				$(".forgot-form .form-footer input:submit").after("<div class='ajax-loader' />")
				$(".forgot-form .form-footer input:submit").hide()
			},
		success:
			function(responseText) {
				var message = JSON.parse(responseText);
				
				$(".forgot-form .form-message").remove();
				
				if (message.error == 1) {
					$(".forgot-form input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".forgot-form .form-footer input:submit").show()
					$(".forgot-form .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					$(".forgot-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".forgot-form").find(".ajax-loader").remove();
					//$(".login-form").find("input:checkbox").iCheck("disable");
					
					//window.location.replace("/profile/");
					
					//dirValue = $("#reg_direction").val()
					
					//$(".reg-form-self").find("input,textarea,select").attr("disabled",true);
					//$(".reg-form-self").find(".param-selector").addClass("selector-disabled");
					//$(".reg-form-self").find(".button-continue").show();
					//$(".reg-step").addClass("unblocked");
					
					//$("#reg_colleague_direction option[value='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option[val='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();
				}
					//alert(responseText);
				
				
				
			}
	});
	
	//форма изменения забытого пароля
	$("#forgotChangePass").ajaxForm({
		url : "/auth/?CHANGE_PWD=Y",
		type : "POST",
		beforeSubmit: 
			function() {
				$(".forgot-change-form .form-footer input:submit").after("<div class='ajax-loader' />")
				$(".forgot-change-form .form-footer input:submit").hide()
			},
		success:
			function(responseText) {
				console.log(responseText);
				var message = JSON.parse(responseText);
				
				$(".forgot-change-form .form-message").remove();
				
				if (message.error == 1) {
					$(".forgot-change-form input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".forgot-change-form .form-footer input:submit").show()
					$(".forgot-change-form .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					$(".forgot-change-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".forgot-change-form").find(".ajax-loader").remove();
					//$(".forgot-change-form").find("input:checkbox").iCheck("disable");
					
					//window.location.replace("/profile/");
					
					//dirValue = $("#reg_direction").val()
					
					//$(".reg-form-self").find("input,textarea,select").attr("disabled",true);
					//$(".reg-form-self").find(".param-selector").addClass("selector-disabled");
					//$(".reg-form-self").find(".button-continue").show();
					//$(".reg-step").addClass("unblocked");
					
					//$("#reg_colleague_direction option[value='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option[val='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();
				}
					//alert(responseText);
				
				
				
			}
	});
	
	//форма фото
	$("#userpicForm").ajaxForm({
		url : window.location.href,
		type : "POST",
		beforeSubmit: 
			function() {
				$(".userpic-form .form-footer input:submit").after("<div class='ajax-loader' />")
				$(".userpic-form .form-footer input:submit").hide()
			},
		success:
			function(responseText) {
				//var message = JSON.parse(responseText);
				
				/*$(".userpic-form .form-message").remove();
				
				if (message.error == 1) {
					$(".userpic-form input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".userpic-form .form-footer input:submit").show()
					$(".userpic-form .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					$(".userpic-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".userpic-form").find(".ajax-loader").remove();
					//$(".userpic-form").find("input:checkbox").iCheck("disable");
					
					window.location.replace("/profile/");
					
					//dirValue = $("#reg_direction").val()
					
					//$(".reg-form-self").find("input,textarea,select").attr("disabled",true);
					//$(".reg-form-self").find(".param-selector").addClass("selector-disabled");
					//$(".reg-form-self").find(".button-continue").show();
					//$(".reg-step").addClass("unblocked");
					
					//$("#reg_colleague_direction option[value='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option[val='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();
				}*/
					//$(".userpic-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					//$(".userpic-form").find(".ajax-loader").remove();
					//$(".userpic-form").find("input:checkbox").iCheck("disable");
					window.location.replace(window.location.href);
					//alert(responseText);
				
				
				
			}
	});
	
	//форма изменение пароля
	$("#changePassForm").ajaxForm({
		url : "/profile/change_password/?clear_cache=Y",
		type : "POST",
		beforeSubmit: 
			function() {
				$(".change-form .form-footer input:submit").after("<div class='ajax-loader' />")
				$(".change-form .form-footer input:submit").hide()
			},
		success:
			function(responseText) {
				var message = JSON.parse(responseText);
				
				$(".change-form .form-message").remove();
				
				if (message.error == 1) {
					$(".change-form input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".change-form .form-footer input:submit").show()
					$(".change-form .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					$(".change-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".change-form").find(".ajax-loader").remove();
					//$(".change-form").find("input:checkbox").iCheck("disable");
					
					window.location.replace("/profile/");
					
					//dirValue = $("#reg_direction").val()
					
					//$(".reg-form-self").find("input,textarea,select").attr("disabled",true);
					//$(".reg-form-self").find(".param-selector").addClass("selector-disabled");
					//$(".reg-form-self").find(".button-continue").show();
					//$(".reg-step").addClass("unblocked");
					
					//$("#reg_colleague_direction option[value='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option[val='"+dirValue+"']").remove();
					//$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();
				}
					//alert(responseText);
				
				
				
			}
	});
  
  	var timer;
	
	// Регистрация участника
	function reg_form_self() {
		$(".reg-form-self").ajaxForm({
			url : "/registration/",
			type : "POST",
			beforeSubmit: 
				function() {
					if ($(".reg-form-self").valid()) {
						$(".reg-form-self .form-footer input:submit").after("<div class='ajax-loader' />")
						$(".reg-form-self .form-footer input:submit").hide()
	                    
	          clearTimeout(timer)
						
						timer = setTimeout(function() {
							"Регистрация не удалась.<br>Попробуйте зарегистрироваться еще раз.";
							$(".reg-form-self .ajax-loader").remove()
							$(".reg-form-self .form-footer input:submit").show()
						},2000)
	                    
					}
					return $(".reg-form-self").valid();
				},
			success:
				function(responseText) {



					var message = JSON.parse(responseText);

					$(".reg-form-self .form-message").remove();

					if (message.error == 1) {
						$(".reg-form-self input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
						$(".reg-form-self .form-footer input:submit").show()
						$(".reg-form-self .ajax-loader").remove()
					}

					if (message.error == 0) {
						clearTimeout(timer)
						regSuccess(message.text);
						// $(".reg-form-self input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
						$(".reg-form-self").find(".ajax-loader").remove();
						$(".reg-form-self").find("input:checkbox").iCheck("disable");

						dirValue = $("#reg_direction").val()

						$(".reg-form-self").find("input,textarea,select").not(":submit").attr("disabled",true);
						$(".reg-form-self").find(".param-selector").addClass("selector-disabled");
						$(".reg-form-self").find(".button-continue").show();
						$(".reg-step").addClass("unblocked");

						company = $("#reg_company").val();
						opf = $("#reg_company_opf").val();

						//устанавливаем id пользователя в рефер.
						$("#form2_refereal").val(message.user_id);
						console.log(message);
						$("#form3_refereal").val(message.user_id);

						$("#reg_colleague_company").val(company);
						$("#reg_colleague_opf").val(opf);

						$("#reg_colleague_company_hidden").val(company);
						$("#reg_colleague_opf_hidden").val(opf);


						$("#reg_colleague_direction option[value='"+dirValue+"']").remove();
						$("#reg_colleague_direction").prev(".param-selector").find(".option[val='"+dirValue+"']").remove();
						$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();

					}


				}
		});
	}
	reg_form_self();
	// Регистрация коллеги
	
	$(".reg-form-colleague").ajaxForm({
		url : "/registration/",
		type : "POST",
		beforeSubmit: 
			function() {
				if ($(".reg-form-colleague").valid()) {
					$(".reg-form-colleague .form-footer input:submit").after("<div class='ajax-loader' />")
					$(".reg-form-colleague .form-footer input:submit").hide()
                    
                    clearTimeout(timer)
					
					timer = setTimeout(function() {
						regError("Регистрация не удалась.<br>Попробуйте зарегистрироваться еще раз.");
						$(".reg-form-colleague .ajax-loader").remove()
						$(".reg-form-colleague .form-footer input:submit").show()
					},20000)
                    
				}
				return $(".reg-form-colleague").valid();
			},
		success:
			function(responseText) {
              
              	
              
				var message = JSON.parse(responseText);
				
				$(".reg-form-colleague .form-message").remove();
				
				if (message.error == 1) {
					$(".reg-form-colleague input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".reg-form-colleague .form-footer input:submit").show()
					$(".reg-form-colleague .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					clearTimeout(timer)
					regSuccess(message.text);
					// $(".reg-form-colleague input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".reg-form-colleague").find(".ajax-loader").remove();
					$(".reg-form-colleague").find("input:checkbox").iCheck("disable");
					$(".reg-form-colleague").find("input,textarea,select").not(":submit").attr("disabled",true);
					$(".reg-form-colleague").find(".param-selector").addClass("selector-disabled");
					$(".reg-form-colleague").find(".button-add").attr("disabled",false);
					
					$(".reg-form-colleague").before("<div class='person-registered'>"+$("#reg_colleague_direction option[value='"+$("#reg_colleague_direction").val()+"']").html()+"</div>");
					
					
				}
				
				
				
			}
	});
	
	//регистрация коллеги из профиля
	
	$(".profile-reg-colleague").ajaxForm({
		url : "/registration/",
		type : "POST",
		beforeSubmit: 
			function() {
				if ($(".profile-reg-colleague").valid()) {
					$(".profile-reg-colleague .form-footer input:submit").after("<div class='ajax-loader' />")
					$(".profile-reg-colleague .form-footer input:submit").hide()
                    
                    clearTimeout(timer)
					
					timer = setTimeout(function() {
						//regError("Регистрация не удалась.<br>Попробуйте зарегистрироваться еще раз.");
						$(".profile-reg-colleague .ajax-loader").remove()
						$(".profile-reg-colleague .form-footer input:submit").show()
					},20000)
                    
				}
				return $(".profile-reg-colleague").valid();
			},
		success:
			function(responseText) {
              
              	
              
				var message = JSON.parse(responseText);
				
				$(".profile-reg-colleague .form-message").remove();
				
				if (message.error == 1) {
					$(".profile-reg-colleague input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".profile-reg-colleague .form-footer input:submit").show()
					$(".profile-reg-colleague .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					clearTimeout(timer)
					regSuccess(message.text);
					// $(".profile-reg-colleague input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".profile-reg-colleague").find(".ajax-loader").remove();
					$(".profile-reg-colleague").find("input:checkbox").iCheck("disable");
					$(".profile-reg-colleague").find("input,textarea,select").not(":submit").attr("disabled",true);
					$(".profile-reg-colleague").find(".param-selector").addClass("selector-disabled");
					$(".profile-reg-colleague").find(".button-add").attr("disabled",false);
					
					$(".profile-reg-colleague").before("<div class='person-registered'>"+$("#reg_colleague_direction option[value='"+$("#reg_colleague_direction").val()+"']").html()+"</div>");
				}
				
			}
	});
	
	$(".profile-reg-colleague .button-add").click(function() {
		$(".profile-reg-colleague").find("input:checkbox").iCheck("enable");
		$(".profile-reg-colleague").find("input,textarea,select").not("#reg_colleague_company").attr("disabled",false);
		$(".profile-reg-colleague").find(".param-selector").removeClass("selector-disabled");
		$(".profile-reg-colleague").find("input:submit").show();
		$(".profile-reg-colleague").find(".button-add").attr("disabled",true);
		
		$(".profile-reg-colleague").find("input,textarea").not(":input[type=hidden],:input[type=button], :input[type=submit], :input[type=reset]").not("#reg_colleague_company").val("");
		$(".profile-reg-colleague").find(".param-selector .dropdown div.option").eq(0).click();
		$(".profile-reg-colleague").find("input:checkbox").iCheck("uncheck");
		
		
		$("#reg_colleague_direction option[value='"+$("#reg_colleague_direction").val()+"']").remove();
		//$("#reg_colleague_direction option:selected").remove();
		$("#reg_colleague_direction").prev(".param-selector").find(".option.selected").remove();
		$("#reg_colleague_direction").prev(".param-selector").find(".option[value='']").click();
		
		return false;
		
	});
	
	$(".profile-reg-other").ajaxForm({
		url : "/registration/",
		type : "POST",
		beforeSubmit: 
			function() {
				if ($(".profile-reg-other").valid()) {
					$(".profile-reg-other .form-footer input:submit").after("<div class='ajax-loader' />")
					$(".profile-reg-other .form-footer input:submit").hide()
                    
                    clearTimeout(timer)
					
					timer = setTimeout(function() {
						regError("Регистрация не удалась.<br>Попробуйте зарегистрироваться еще раз.");
						$(".profile-reg-other .ajax-loader").remove()
						$(".profile-reg-other .form-footer input:submit").show()
					},20000)
                    
				}
				return $(".profile-reg-other").valid();
			},
		success:
			function(responseText) {
              
              	
              
				var message = JSON.parse(responseText);
				
				$(".profile-reg-other .form-message").remove();
				
				if (message.error == 1) {
					$(".profile-reg-other input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".profile-reg-other .form-footer input:submit").show()
					$(".profile-reg-other .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					clearTimeout(timer)
					regSuccess(message.text);
					// $(".profile-reg-other input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".profile-reg-other").find(".ajax-loader").remove();
					$(".profile-reg-other").find("input:checkbox").iCheck("disable");
					$(".profile-reg-other").find("input,textarea,select").not(":submit").attr("disabled",true);
					$(".profile-reg-other").find(".param-selector").addClass("selector-disabled");
					$(".profile-reg-other").find(".button-add").attr("disabled",false);
					
					$(".profile-reg-other").before("<div class='person-registered'>"+$("#reg_other_direction option[value='"+$("#reg_other_direction").val()+"']").html()+"</div>");
					
					
				}
			}
	});
	
	$(".profile-reg-other .button-add").click(function() {
		$(".profile-reg-other").find("input:checkbox").iCheck("enable");
		$(".profile-reg-other").find("input,textarea,select").attr("disabled",false);
		$(".profile-reg-other").find(".param-selector").removeClass("selector-disabled");
		$(".profile-reg-other").find("input:submit").show();
		$(".profile-reg-other").find(".button-add").attr("disabled",true);
		
		$(".profile-reg-other").find("input,textarea").not(":input[type=hidden], :input[type=button], :input[type=submit], :input[type=reset]").val("");
		$(".profile-reg-other").find(".param-selector .dropdown div.option").eq(0).click();
		$(".profile-reg-other").find("input:checkbox").iCheck("uncheck");
		
		return false;
		
	})
	
	
	
	// $(".profile-reg").ajaxForm({
		// url : "/registration/",
		// type : "POST",
		// beforeSubmit: 
			// function() {
				// $(".profile-reg-form .form-footer input:submit").after("<div class='ajax-loader' />")
				// $(".profile-reg-form .form-footer input:submit").hide()
			// },
		// success:
			// function(responseText) {
				// var message = JSON.parse(responseText);
				
				// $(".profile-reg-form .form-message").remove();
				
				// if (message.error == 1) {
					// $(".profile-reg-form input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					// $(".profile-reg-form .form-footer input:submit").show()
					// $(".profile-reg-form .ajax-loader").remove()
				// }
				
				// if (message.error == 0) {
					// $(".profile-reg-form input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					// $(".profile-reg-form").find(".ajax-loader").remove();
					// $(".profile-reg-form").find("input:checkbox").iCheck("disable");
					// $(".profile-reg-form").find("input,textarea,select").attr("disabled",true);
					// $(".profile-reg-form").find(".param-selector").addClass("selector-disabled");
					// //$(".profile-reg-form").find(".button-add").attr("disabled",false);
					
					// //$(".profile-reg-form").before("<div class='person-registered'>"+$("#reg_colleague_direction option[value='"+$("#reg_colleague_direction").val()+"']").html()+"</div>");
					
					
				// }
				
				
				
			// }
	// });
	
	$(".reg-form-colleague .button-add").click(function() {
		$(".reg-form-colleague").find("input:checkbox").iCheck("enable");
		$(".reg-form-colleague").find("input,textarea,select").not("#reg_colleague_company").attr("disabled",false);
		$(".reg-form-colleague").find(".param-selector").removeClass("selector-disabled");
		$(".reg-form-colleague").find("input:submit").show();
		$(".reg-form-colleague").find(".button-add").attr("disabled",true);
		
		$(".reg-form-colleague").find("input,textarea").not(":input[type=hidden],:input[type=button], :input[type=submit], :input[type=reset]").not("#reg_colleague_company").val("");
		$(".reg-form-colleague").find(".param-selector .dropdown div.option").eq(0).click();
		$(".reg-form-colleague").find("input:checkbox").iCheck("uncheck");
		
		
		$("#reg_colleague_direction option[value='"+$("#reg_colleague_direction").val()+"']").remove();
		$("#reg_colleague_direction").prev(".param-selector").find(".option.selected").remove();
		$("#reg_colleague_direction").prev(".param-selector").find(".option").first().click();
		
		return false;
		
	});
	
	
	$(".reg-form-other").ajaxForm({
		url : "/registration/",
		type : "POST",
		beforeSubmit: 
			function() {
				if ($(".reg-form-other").valid()) {
					$(".reg-form-other .form-footer input:submit").after("<div class='ajax-loader' />")
					$(".reg-form-other .form-footer input:submit").hide()
					
					clearTimeout(timer)
					
					timer = setTimeout(function() {
						regError("Регистрация не удалась.<br>Попробуйте зарегистрироваться еще раз.");
						$(".profile-reg-other .ajax-loader").remove()
						$(".profile-reg-other .form-footer input:submit").show()
					},20000)
					
				}
				return $(".reg-form-other").valid();
			},
		success:
			function(responseText) {
				var message = JSON.parse(responseText);
				
				$(".reg-form-other .form-message").remove();
				
				if (message.error == 1) {
					$(".reg-form-other input:submit").before("<div class='form-message error-message'>"+message.text+"</div>")
					$(".reg-form-other .form-footer input:submit").show()
					$(".reg-form-other .ajax-loader").remove()
				}
				
				if (message.error == 0) {
					clearTimeout(timer)
					regSuccess(message.text);
					// $(".reg-form-other input:submit").before("<div class='form-message success-message'>"+message.text+"</div>")
					$(".reg-form-other").find(".ajax-loader").remove();
					$(".reg-form-other").find("input:checkbox").iCheck("disable");
					$(".reg-form-other").find("input,textarea,select").not(":submit").attr("disabled",true);
					$(".reg-form-other").find(".param-selector").addClass("selector-disabled");
					$(".reg-form-other").find(".button-add").attr("disabled",false);
					
					$(".reg-form-other").before("<div class='person-registered'>"+$("#reg_other_direction option[value='"+$("#reg_other_direction").val()+"']").html()+"</div>");
					
					
				}
			}
	});
	
	$(".reg-form-other .button-add").click(function() {
		$(".reg-form-other").find("input:checkbox").iCheck("enable");
		$(".reg-form-other").find("input,textarea,select").attr("disabled",false);
		$(".reg-form-other").find(".param-selector").removeClass("selector-disabled");
		$(".reg-form-other").find("input:submit").show();
		$(".reg-form-other").find(".button-add").attr("disabled",true);
		
		$(".reg-form-other").find("input,textarea").not(":input[type=hidden], :input[type=button], :input[type=submit], :input[type=reset]").val("");
		$(".reg-form-other").find(".param-selector .dropdown div.option").eq(0).click();
		$(".reg-form-other").find("input:checkbox").iCheck("uncheck");
		
		return false;
		
	})
	
	
	
	// Форма голосования END

	// Тултипы
	
	$(".disabled-dummy").each(function() {
		var tooltipContent = $(this).attr("title");
		$(this).qtip({ // Grab all elements with a non-blank data-tooltip attr.
			content: tooltipContent,
			show: {
							event: 'mouseenter'
			},
			position: {
				at: 'bottom center',
				my: 'top center',
				adjust: {
          y: 10
        }
			}
		});
	})

	// Анимация главной
	
	TweenMax.to($(".home-about-item"),0,
		{
			y: 50,
			opacity: 0
		}
	);
	
	TweenMax.to($(".home-stages-item .num"),0,
		{
			scale: .5,
			opacity: 0
		}
	);
	
	TweenMax.to($(".home-stages-item .date"),0,
		{
			x: -70,
			opacity: 0
		}
	);
	
	TweenMax.to($(".home-stages-item .ttl"),0,
		{
			y: -10,
			opacity: 0
		}
	);
	
	TweenMax.to($(".home-news-item"),0,
		{
			y: 50,
			opacity: 0
		}
	);
	
	TweenMax.to($(".home-partners-group"),0,
		{
			y: 50,
			opacity: 0
		}
	);
	
	
	// Анимация главной END

	$(".login-link").not(".logged-in").click(function() {
		openPopup("loginPopup")
	})
	$(".forgot-link").click(function() {
		closePopup();
		openPopup("forgotPopup");
	});

	// Навигация
	
	$(".main-menu a").click(function() {
	
		$(".main-menu a").removeClass("act");
		
		$(this).addClass("act");
		
		var anchor = $(this).attr("href").replace("#","");
		
		var link = $(this);
		
		var yDiff = 50
		
		$("html,body").animate({scrollTop: $("a[name='"+anchor+"']").offset().top - yDiff},1000);

    history.pushState(null,null,$(this).attr("href"));

		return false;


	});

	// Grayscale IE 10-11

	var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);

	if (/*@cc_on!@*/false || isIE11) {
		$('.home-news-item .pic img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"5","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscaleIE10(this.src);
		});
		
		// Quick animation on IE10+ 
		$('img').hover(
			function () {
				$(this).parent().find('img:first').stop().animate({opacity:1}, 200);
			}, 
			function () {
				$('.img_grayscale').stop().animate({opacity:0}, 200);
			}
		);	
		
		function grayscaleIE10(src){
			var canvas = document.createElement('canvas');
			var ctx = canvas.getContext('2d');
			var imgObj = new Image();
			imgObj.src = src;
			canvas.width = imgObj.width;
			canvas.height = imgObj.height; 
			ctx.drawImage(imgObj, 0, 0); 
			var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
			for(var y = 0; y < imgPixels.height; y++){
				for(var x = 0; x < imgPixels.width; x++){
					var i = (y * 4) * imgPixels.width + x * 4;
					var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
					imgPixels.data[i] = avg; 
					imgPixels.data[i + 1] = avg; 
					imgPixels.data[i + 2] = avg;
				}
			}
			ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
			return canvas.toDataURL();
		};
	}


	// Верхний слайдер
	
	
	
	if ($(".top-slider").length) {
		
		$(".top-slider").waitForImages(function() {
			$(".top-slider").slick({
				fade:false,
				speed:1000,
				arrows:true,
				swipe:false
			})
			
			window.myFlux = new flux.slider('.top-slider', {
				autoplay: false,
				controls: false,
				delay: 5000,
				pagination: false,
				transitions: ['blocks2']
			});
			
			$("body").on("click",".top-slider .slick-next",function() {
				window.myFlux.next();
			});
			
			$("body").on("click",".top-slider .slick-prev",function() {
				window.myFlux.prev();
			})
			
			$(".top-slider").css({
				opacity: 1
			})
			
		})
		
		
		
	}
	
	// Табы
	
	$(".tabbed-content").each(function() {
		$(this).tabbedContent();
	})
	
	// Табы END
	
	// Шаги регистрации
	
	$("body").on("click",".reg-step.unblocked",function() {
		$(".reg-step").removeClass("act").removeClass("done")
		$(this).addClass("act")
		$(this).prevAll().addClass("done")
		
		$(".reg-form").hide();

		
		$(".reg-form[rel='"+$(this).attr("rel")+"']").fadeIn(200);
		let refereal =  $("[rel='reg-form-1'] #form2_refereal").val();
		$("[rel='reg-form-2'] #form2_refereal").val(refereal);
		
		
	})
	
	// Шаги регистрации END
	
	// Попап с юзерпиком
	
	$(".profile-photo-link").click(function() {
		openPopup("userpicPopup");
	})
	
	// Попап изменения пароля
	
	$(".profile-pass-link").click(function() {
		openPopup("changePassPopup");
	})
	
	// Показать информацию о кандидате
	
	$("body").on("click",".vote-more-trigger",function() {
		$(this).prev(".vote-more").slideToggle(250);
		$(this).toggleClass("vote-more-trigger-on");
		if ($(this).hasClass("vote-more-trigger-on")) {
			$(this).find("span").html($(this).data("collapsetext"))
		} else {
			$(this).find("span").html($(this).data("expandtext"))
		}
	})
	
	// Формы
	
	if ($("input[type=file]").length) {
		$("input[type=file]").nicefileinput({
			label : 'Выбрать фотографию'
		});
	}
	
	if ($("input:text").length) {
		$("input:text").each(function() {
			if ($(this).val()) {
				$(this).prev(".placeholder").hide();
			}
		});
	}
	
  $("input.phone").mask("+7 (999) 999-99-99",{completed:function(){this.data("completed",true);}});

	$("select").customSelect();
	
	$("input:checkbox").iCheck();
	
  validateForms();
	
	// Проверка на совпадение паролей
	
	$("input:text, input:password, textarea").each(function() {
    $(this).addClass("initial");
    
    if ($(this).prop("tagName") == "INPUT" || $(this).prop("tagName") == "TEXTAREA") {
      // if (!$(this).parents(".input-wrapper").length) $(this).wrap("<div class='input-wrapper'></div>");
      if ($(this).hasClass("phone") || $(this).hasClass("form-date")) {
        $(this).focus(function() {
          $(this).removeClass("initial");
          $(this).parents(".form-item").find(".placeholder").hide();
        });
      } else {
        $(this).focus(function() {
          $(this).parents(".form-item").find(".placeholder").addClass("placeholder-initial");
        });
        $(this).keydown(function() {
          $(this).removeClass("initial");
          $(this).parents(".form-item").find(".placeholder").hide();
        });
      }
      $(this).blur(function() {
        $(this).prev().prev(".placeholder").hide();
        $(this).parents(".form-item").find(".placeholder").removeClass("placeholder-initial");
        if (!$(this).val()) {
          $(this).addClass("initial");
          $(this).parents(".form-item").find(".placeholder").show();
        }
      });
    } else {
      $(this).focus(function() {
        $(this).removeClass("initial");
        $(this).parents(".form-item").find(".placeholder").hide();
      });
      $(this).blur(function() {
        if (!$(this).val()) {
          $(this).addClass("initial");
          $(this).parents(".form-item").find(".placeholder").show();
        }
      });
    }
      
    $(this).parents(".form-item").find(".placeholder").click(function() {
      $(this).focus();
    });
    
  });
	
	
	
	
	
	
	
});

(function( $ ) {
  $.fn.parallax = function(scrollPos) {
    
		var item = $(this);
		var origTop = parseInt(item.attr("data-origtop"));
		var pFactor = item.data("pfactor")*.5;
		var shift = item.data("shift");
		
		// item.stop().animate({
			// marginTop: (origTop - (scrollPos + window.innerHeight/2))*pFactor + shift
		// },500)
		
		mTop = (origTop - (scrollPos + window.innerHeight/2))*pFactor + shift;
		// item.css({
			// transform: "translateY("+mTop+"px)"
		// })
		
		item.stop().animate({ whyNotToUseANonExistingProperty: mTop }, {
			step: function(now,fx) {
				$(this).css('transform',"translate3d(0px, " + now + "px, 0px)");
			},
			duration:200
		});
		
    
  };
})( jQuery );

(function( jQuery ) {
  jQuery.fn.tabbedContent = function() {
		
		$(this).each(function() {
			var tabs = $(this).find(".tabs").find(".tab");
			var tabContents = $(this).find(".tabs-content").find(".tab-content");
			
			if (!tabs.hasClass("act")) {
				tabs.first().addClass("act");
			}
			
			tabContents.hide().removeClass("act");
			tabContents.filter("[rel='"+tabs.filter(".act").attr("rel")+"']").show().addClass("act");
			
			tabs.click(function() {
				tabs.removeClass("act");
				$(this).addClass("act");
				
				// window.location.hash = $(this).attr("rel");
				
				tabContents.hide().removeClass("act");
				
				tabContents.filter("[rel='"+$(this).attr("rel")+"']").fadeIn(500).addClass("act")
			})
			
		})
    
  }
})( jQuery );

function validateForms() {
  
  $("form").each(function() {
    $(this).validate({
      focusInvalid: false,
      sendForm : false,
      errorPlacement: function(error, element) {
        // element.parents(".input-wrapper").addClass("input-wrapper-error");
        if (element.attr("errortext")) {
          error.html(element.attr("errortext"))
        }
				
				if (element.hasClass("password-repeat")) {
					error.insertAfter(element);
				}
				
        //error.insertAfter(element);
        element.prev(".placeholder").addClass("placeholder-error")
        if (element[0].tagName == "SELECT") {
          element.parents(".form-item").find(".param-selector").addClass("param-sel-error")
        }
				if (element.attr("type") == "checkbox") {
          element.parents(".icheckbox").addClass("icheckbox-error")
        }
        
      },
      unhighlight: function(element, errorClass, validClass) {
        // $(element).parents(".input-wrapper").removeClass("input-wrapper-error");
        $(element).removeClass(errorClass);
				
				if ($(element).hasClass("password-repeat")) {
					$(element).next(".error").remove();
				}
				
        //$(element).next(".error").remove();
        $(element).prev(".placeholder").removeClass("placeholder-error");
        if ($(element)[0].tagName == "SELECT") {
          $(element).parents(".form-item").find(".param-selector").removeClass("selector-error")
        }
				if ($(element).attr("type") == "checkbox") {
          $(element).parents(".icheckbox").removeClass("icheckbox-error")
        }
				
      },
      invalidHandler: function(form, validatorcalc) {
				var errors = validatorcalc.numberOfInvalids();
				if (errors && validatorcalc.errorList[0].element.tagName == "INPUT") {                    
						validatorcalc.errorList[0].element.focus();
				}
      }
    });
    
    if ($(this).find("input.email").length) {
      $(this).find("input.email").rules('add', {
        email: true,
        messages: {
          required:  "Неверный e-mail"
        }
      });
    }
    
    if ($(this).find(".form-date").length) {
      $(this).find(".form-date").rules('add', {
        messages: {
          required:  "Выберите дату"
        }
      });
    }
		
		if ($(this).find("input.password").length && $(this).find("input.password-repeat").length) {
			$(this).find("input.password-repeat").rules('add', {
        equalTo: ".password"
      });
		}
    
    // if ($(this).find("input.email").length && $(this).find("input.phone").length) {
      // var thisField = $(this).find("input.phone");
      // var relatedField = $(this).find("input.email");
      // thisField.rules('add', {
        // required: function(element) {
          // if (relatedField.val() == "") {
            // return true;
          // } else {
            // return false;
          // }
        // }
      // });
      // var thisField2 = $(this).find("input.email");
      // var relatedField2 = $(this).find("input.phone");
      // thisField2.rules('add', {
        // required: function(element) {
          // if (relatedField2.val() == "") {
            // return true;
          // } else {
            // return false;
          // }
        // }
      // });
    // }
    
    // $(document).mouseup(function (e) {
      // var container = $("form");

      // if (!container.is(e.target) // if the target of the click isn't the container...
          // && container.has(e.target).length === 0) // ... nor a descendant of the container
      // {
          // $(".error-wrapper").remove();
      // }
    // });
		
		$(document).mouseup(function (e) {
      var container = $(".tooltip");

      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0) // ... nor a descendant of the container
      {
          $(".tooltip").fadeOut(150);
      }
    });
    
  });  
    
}

jQuery.extend(jQuery.validator.messages, {
    required: "Заполните поле",
    remote: "Please fix this field.",
    email: "Введите правильный e-mail",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Пароли не совпадают",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});

function countPoints(cityId) {
  var count = 0;
	for (i in pointsOfSale) {
		if (pointsOfSale[i].cityId == cityId) {
			count++
		}
	}
	
	return count;
	
}

function officesList(cityId) {
	$(".offices-table tr").remove();
  for (i in pointsOfSale) {
		if (pointsOfSale[i].cityId == cityId) {
			$(".offices-table").append("<tr data-pointid='"+pointsOfSale[i].id+"'><td class='name'>"+pointsOfSale[i].name+"</td><td class='address'>"+pointsOfSale[i].address+"</td></tr>")
		}
	}
}

function officeDetails(pointId) {
  $(".office-details .popup-content").html("");
	$(".office-details").hide();
	for (i in pointsOfSale) {
		if (pointsOfSale[i].id == pointId) {
			
			
			$(".office-details .popup-content").append("<div class='button back-link'>Все офисы города</div>");
			$(".office-details .popup-content").append("<div class='office-name'>"+pointsOfSale[i].name+"</div>")
			$(".office-details .popup-content").append("<div class='office-address'>"+pointsOfSale[i].address+"</div>")
			
			$(".office-details .popup-content").append("<div class='office-info clearfix'></div>");
			
			if (pointsOfSale[i].phone) {
				$(".office-details .office-info").append("<div class='office-phone'><h4>Телефон</h4>"+pointsOfSale[i].phone+"</div>")
			}
			
			if (pointsOfSale[i].openingHours) {
				$(".office-details .office-info").append("<div class='office-timetable'><h4>Часы работы</h4>"+pointsOfSale[i].openingHours+"</div>")
			}
			
			var ticketsList ="";
			
			if (pointsOfSale[i].airlineTickets) {
				ticketsList += ", авиабилетов"
			}
			if (pointsOfSale[i].railwayTickets) {
				ticketsList += ", железнодорожных билетов"
			}
			if (pointsOfSale[i].busTickets) {
				ticketsList += ", билетов на междугородние автобусы"
			}
			if (pointsOfSale[i].ferryTickets) {
				ticketsList += ", билетов на паром"
			}
			
			ticketsList = ticketsList.replace(", ","")
			
			
			if (ticketsList != "" ) {
				$(".office-details .office-info").append("<div class='office-services'><h4>Услуги офиса обслуживания</h4><ul class='office-services-list'></ul></div>")
				$(".office-details .office-services-list").append("<li>Бронирование и продажа "+ticketsList+"</li>")
			}
			
			if (pointsOfSale[i].hotelReservations) {
				$(".office-details .office-services-list").append("<li>Бронирование отелей</li>")
			}
			
			if (pointsOfSale[i].tours) {
				$(".office-details .office-services-list").append("<li>Продажа туров</li>")
			}
			
			if (pointsOfSale[i].theatreTickets) {
				$(".office-details .office-services-list").append("<li>Билеты в театр и на концерты</li>")
			}
			
			if (pointsOfSale[i].insurances) {
				$(".office-details .office-services-list").append("<li>Страхование</li>")
			}
			
			if (pointsOfSale[i].airportVipLounges) {
				$(".office-details .office-services-list").append("<li>VIP-залы в аэропортах</li>")
			}
			
			if (pointsOfSale[i].corporate) {
				$(".office-details .office-services-list").append("<li>Корпоративное обслуживание</li>")
			}
			
			if (pointsOfSale[i].moneyTransfers) {
				$(".office-details .office-services-list").append("<li>Денежные переводы</li>")
			}
			
			if (pointsOfSale[i].payments) {
				$(".office-details .office-services-list").append("<li>Прием платежей</li>")
			}
			
			if (pointsOfSale[i].loanPayments) {
				$(".office-details .office-services-list").append("<li>Погашение кредитов</li>")
			}
			
			if (pointsOfSale[i].giftCard) {
				$(".office-details .office-services-list").append("<li>Подарочная карта</li>")
			}
			
			$(".office-details .office-info").append("<div class='office-payments'><h4>Способы оплаты</h4><ul class='office-payments-list'></ul></div>")
			
			$(".office-details .office-payments-list").append("<li>Наличный расчет</li>")
			
			if (pointsOfSale[i].acceptsCreditCards) {
				$(".office-details .office-payments-list").append("<li>Пластиковые карты</li>")
			}
			
			
			if ($(".office-details").height() > 680) {
				$(".offices-popup").css({
					"min-height":$(".office-details").height() + "px"
				})
			}
			
			$(".office-details").fadeIn(100)
		}
	}
}

function openPopup(pupId) {
  var popup = $("#"+pupId);
  $("body").append("<div class='tint' style='display:none;' />");
  popup.addClass("popup-act").fadeTo(500,1);
  
  $(".tint").fadeTo(300,1);
  pupMakeup();
  
  jQuery(document).keydown(function(e){
    if (e == null) { // ie
      keycode = event.keyCode;
    } else { // mozilla
      keycode = e.which;
    }
    
    if(keycode == 27){ // escape, close box
      closePopup()
    }
    
  });
  
  $(".tint").on("click", function () {
    closePopup()
  });
  
  $(".popup .close, .popup .cancel").on("click", function () {
    closePopup()
  });
	
}

function pupMakeup() {
  var popup = $(".popup-act");
  var pupTop = $(window).scrollTop() + ($(window).height() - popup.outerHeight(true))/2;
  if (pupTop < $(window).scrollTop() + 20) pupTop = $(window).scrollTop() + 20;  $(".tint").css("height",$(window).height()).css("width",$("body").width());
  if (!popup.hasClass("price-popup")) {
    popup.css("top",pupTop).css("left",($(window).width()-popup.outerWidth(true))/2);
  } else {
    popup.css("margin-top",$(window).scrollTop() - popup.parent().offset().top - popup.parent().outerHeight(true) + ($(window).height()-popup.outerHeight(true))/2);
  }
  
}

function closePopup() {
  $(".tint").fadeTo(500,0,function() {
    $(this).remove();
  });
  $(".popup-act").removeClass("popup-act").fadeTo(300,0,function() {
    $(this).hide();
  });
}

// Обработчик селектов

(function( $ ) {
  $.fn.customSelect = function() {
    var selects = $(this);
    selects.each(function () {
      var select = $(this);
		console.log(select)
      
      if (!$(this).next(".param-selector").length) {
        select.css("visibility","hidden").css("position","absolute").css("z-index","-1");
        select.before("<div class='param-selector' id='" + select.attr("id") + "-selector'>");
        var selector = select.prev(".param-selector");
        
        if (select.is(":disabled")) {
          selector.addClass("selector-disabled")
        }
        
        
        selector.append("<div class='param-sel' />").append("<div class='dropdown' />");
        var dropdown = selector.find(".dropdown");
        var paramSel = selector.find(".param-sel");
        paramSel.addClass("initial");
        paramSel.append("<div class='arr' />");
        paramSel.append("<div class='sel-value' />");
        
				if (select.val()) {
					paramSel.find(".sel-value").html(select.find("option[value=" + select.val() + "]").html());
				} else {
					paramSel.find(".sel-value").html(select.find("option:not(:disabled)").first().html());
				}
        
        select.find("option").each(function (e) {
          if (select.find("option").length <= 2) {


          
            if ($(this).val() != select.val()) {
              dropdown.append("<div class='option' val='" + $(this).attr("value") + "'>" + $(this).html() + "</div>");
            } else {
              dropdown.append("<div class='option' style='display:none' val='" + $(this).attr("value") + "'>" + $(this).html() + "</div>");
            }
            
          } else {
						if ($(this).val() != select.val()) {
							dropdown.append("<div class='option' val='" + $(this).attr("value") + "'>" + $(this).html() + "</div>");
            } else {
              dropdown.append("<div class='option' class='selected' val='" + $(this).attr("value") + "'>" + $(this).html() + "</div>");
            }
          }
          
        });
				
				dropdown.jScrollPane({ autoReinitialise: true });
      
        paramSel.on("click",function() {
          $(this).parents(".common-form").find(".form-item").css("z-index",1);
          $(this).parents(".form-item").css("z-index",10);
          if (!select.is(":disabled")) {
            if (dropdown.css("display") != "block") {
              $(".dropdown").fadeOut(150);
              $(".param-open").removeClass("param-open");
              dropdown.fadeIn(150);
              selector.addClass("param-open");
              var maxWidth = 0;
              
              $(this).parents(".form-item").prevAll(".form-item").css("z-index","10");
              $(this).parents(".form-item").css("z-index","11");
              $(this).parents(".form-item").nextAll(".form-item").css("z-index","10");
              
              dropdown.find("div").each(function () {
                if ($(this).width() >= maxWidth) {
                  maxWidth = $(this).width();
                }
                if (paramSel.width() >= maxWidth) {
                  maxWidth = paramSel.width() + 1;
                }
              });
              
            } else {
              dropdown.fadeOut(150);
              selector.removeClass("param-open");
            }
          }
        });
        
        dropdown.on("click", "div.option", function() {
          selector.removeClass("param-sel-error");
          paramSel.removeClass("initial");
          var div = $(this);
          paramSel.find(".sel-value").html($(this).html());
          if ($(this).attr("flag")) {
            paramSel.find(".sel-value").attr("flag",$(this).attr("flag"));
          }
					if ($(this).attr("val")) {
						select.val($(this).attr("val")).change();
					} else {
						select.val(false).change();
					}
          if (select.hasClass("hide-ttl")) {
            dropdown.find("div[val='']").remove();
          }
          dropdown.fadeOut(150, function () {
            dropdown.find("div").show().removeClass("selected").removeClass("hidden");
            if (select.find("option").length <= 2) {
              div.addClass("hidden")
            }
            div.addClass("selected");
            div.parents(".param-open").removeClass("param-open");
          });
        });
		
				$(document).mouseup(function (e) {
					var container1 = dropdown;

					if (!container1.is(e.target) // if the target of the click isn't the container...
							&& container1.has(e.target).length === 0) // ... nor a descendant of the container
					{
							dropdown.fadeOut(150);
							$(".param-selector").removeClass("param-open")
					}
				});
				
				select.on("change",function() {

					dropdown.find("div").removeClass("selected");
					dropdown.find("div[val='"+select.val()+"']").addClass("selected");
					$('.coffe_i').attr('data-title', $('#reg_branch').find('option:selected').attr('title'))
					//console.log($('#reg_branch').find('option:selected').attr('title'));
					paramSel.find(".sel-value").html(select.find("option[value=" + select.val() + "]").html());
				});
      
      }
			
    });
    
  };
})( jQuery );



function initMap() {
  var myMap = new ymaps.Map("contactsMap", {
		center: [55.788145, 37.58879],
		zoom: 15
	});
	
	myMap.controls
        // Кнопка изменения масштаба.
        .add('zoomControl', { left: 5, top: 5 })
        // Список типов карты
        .add('typeSelector')
        // Стандартный набор кнопок
        .add('mapTools', { left: 35, top: 5 });
	
	myPlacemark = new ymaps.Placemark([55.788145, 37.58879], {
		// Свойства.
		
	}, {
		// Опции.
		// Своё изображение иконки метки.
		iconImageHref: 'images/map-pin.png',
		// Размеры метки.
		iconImageSize: [50, 57],
		// Смещение левого верхнего угла иконки относительно
		// её "ножки" (точки привязки).
		iconImageOffset: [-25, -57]
	});
	
	
  
	myMap.geoObjects.add(myPlacemark);
	
	
}

function ajaxBlock(url,element,successCallback) {
  if (!element.prev(".block-ajax-loader").length) {
		element.html("<div class='block-ajax-loader' />")
	}
	$.get( url, function(data) {
		dynamicHtml = data;
	}).done(function() {
		
		element.html(dynamicHtml).hide().waitForImages(function() {
			element.show();
			element.prev(".block-ajax-loader").remove();
			
			element.find("select").each(function() {
				if (!$(this).prev(".param-selector").length) {
					$(this).customSelect();
				}
			})
			element.find("input:checkbox").iCheck();
			
		});
		
		successCallback();
	
	});
}

function submitTrigger(el) {

	var form = el.parents("form");
	
	var btn = form.find("input:submit");
	
	var requiredFields = form.find("*[required]")
	
	emptyFeilds = requiredFields.filter(function() {
		return (!$(this).hasClass("phone") && $(this).val() == "" || $(this).val() == false || $(this).val() === undefined || $(this).val() === null || ($(this).attr("type") == "checkbox" && !$(this).is(":checked"))) || ($(this).hasClass("phone") && !$(this).data("completed"))
	});
	
	// console.log(el.val())
	
	if (emptyFeilds.length == 0) {
		//btn.attr("disabled",false)
		btn.click(function() {
			//return false;
		})
		// console.log("valid")
	} else {
		//btn.attr("disabled",true)
		// console.log("invalid")
	}
	
}

function handlePersonForm() {

  $(".vote-person-form form").each(function() {
		
		var form = $(this);
		
		form.ajaxForm({
			url : "/vote/?"+Math.random(),
			type : "POST",
			beforeSubmit: 
				function() {
					form.find(".vote-form-footer input:submit").hide().after("<div class='ajax-loader' />")
				},
			success:
				function(responseText) {
					//$("#callbackForm").find(".ajax-loader").remove();
					//$("#callbackForm").find("input[type='submit']").show();
					//formSuccess($("#subscribeForm"),"successPopup");
					//$(".subscribe-form-wrapper").html("Ваша заявка отправлена");
					form.find(".ajax-loader").remove();
					form.parent().html(responseText);
					form.find(".button-continue").show();
					form.find(".success-message").show();
				}
		});
		
	})
}

function regSuccess(message) {
  if ($(".reg-success-popup").length) {
		$(".reg-success-popup").remove();
	}
	
	$("body").append("<div class='popup reg-success-popup' id='regSuccessPopup'><div class='close'></div><div class='popup-content'>"+message+"</div></div>")
	
	openPopup("regSuccessPopup")
}





$(function (){
	var input    = document.querySelector("#reg_company"), // Selects the input.
		input2 = document.querySelector(".form-list2"); // Selects the datalist.

	// Adds a keyup listener on the input.
	input.addEventListener("keyup", (e) => {
		console.log(e.target.value.length)
		// If input value is longer or equal than 2 chars, adding "users" on ID attribute.
		if (e.target.value.length >= 2) {
			input.setAttribute("list", "list2");
		} else {
			input.setAttribute("list", "");
		}
	});


});