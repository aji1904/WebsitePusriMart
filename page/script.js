$(document).ready(function() {

	$(".list-inovasi").hide();
	$(".list").hide();
	$(".list-urea").hide();
	$(".list-amonia").hide();
	$(".list-npk").hide();


	$("#list").click(function(){
		$(".list").toggle(500);
	});
	$("#list-inovasi").click(function(){
		$(".list-inovasi").toggle(500);
	});
	$("#list-urea").click(function(){
		$(".list-urea").toggle(500);
	});
	$("#list-amonia").click(function(){
		$(".list-amonia").toggle(500);
	});
	$("#list-npk").click(function(){
		$(".list-npk").toggle(500);
	});

});



