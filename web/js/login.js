$("#btn").click(function(){
	var user = $("#user").val();
	var password = $("#password").val();

	$.post("./login.php",
	{
		"user":user,
		"password":password
	},
	function(data){
		if(data=="2"){
			$("#user")
			.val("")
			.attr("placeholder","账号错误");
		}else if(data=="1"){  
			$("#password")
			.val("")
			.attr("placeholder","密码错误");
		}else if(data=="0"){
			// setcookie("user",$user,time()+3600);
			window.open("./index.php", "_self")
		}else{
			alert(data);
		}
	}
)
});
		
