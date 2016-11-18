$("#btn").click(function(){
			var user = $("#user").val();
			var password = $("#password").val();
			var repassword = $("#repassword").val();

			$.post("./resok.php",
			{
				"user": user,
				"password": password,
				"repassword": repassword
			},
			function(data){
				if(data == "1"){
					$("#user")
						.val("")
						.attr("placeholder", "用户已经存在");
				}else if(data == "0"){
					$("#password").val("").attr("placeholder", "密码不一致");
					$("#repassword").val("").attr("placeholder", "密码不一致");
					// alert($("#password").attr("placeholder"));
				}else if(data == "2"){
					window.open("./index.php", "_self");		
				}else{
					alert("请输入 账号，密码");
				}
			}	
		);
	});