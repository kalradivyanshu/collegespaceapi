var main = function() {
	$("#typeselect").change(function(){
		if($("#typeselect" ).val() == "notice")
		{
			$("#notice").show();
			$("#result").hide();
			$("#blog").hide();
			$("#submit").show();
		}
		if($("#typeselect" ).val() == "result")
		{
			$("#notice").hide();
			$("#result").show();
			$("#blog").hide();
			$("#submit").show();
		}
		if($("#typeselect" ).val() == "blog")
		{
			$("#notice").hide();
			$("#result").hide();
			$("#blog").show();
			$("#submit").show();
		}
		if($("#typeselect" ).val() == "select")
		{
			$("#notice").hide();
			$("#result").hide();
			$("#blog").hide();
			$("#submit").hide();
		}
	});
}
$(document).ready(main);