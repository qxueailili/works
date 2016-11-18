	$(document).ready(function() {
		$(".nav1 li").hide();
		$(".nav2").mouseover(function(){
			$(".nav1 li").show();
			$(".nav2").addClass("selected");
		})
		$(".nav2").mouseout(function(){
			$(".nav1 li").hide();
			$(".nav2").removeClass("selected");
		})
});