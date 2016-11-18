$(document).ready(function(){
	$(".con2,.con3,.con4").hide();

	$(".fanye li").click(function(){
		$(".fanye li:not(this)").removeClass("active1");
		$(this).addClass("active1");

		console.log($(this).attr('id').slice(-1));

		$(".content>div:not(.con"+$(this).attr('id').slice(-1)+")").hide();
		// $(".content>div:not(.con"+$(this).attr('id').slice(-1)+")").hide();

		$(".con"+$(this).attr('id').slice(-1)).show();
		
	})
})