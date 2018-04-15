$("#products .nav a").click(function() 
{
	var category = $(this).data("category");

	$("#products .nav a").css("background-color", "#f7f7f7");

	$(this).css("background-color", "#f3d64c");

	$("#products .tab-content div.product").not("div." + category).hide(500);

	$("#products .tab-content div." + category).show(500);
	
	return false;
});