var main = function() {
	if($("#typeselect" ).val() == "notice")
	{
		$("#notice").show();
	}
	else
	{
		$("#notice").hide();
	}
	$("#result").hide();
	$("#blog").hide();
	$("#typeselect").change(function(){
		console.log("changed");
		if($("#typeselect" ).val() == "notice")
		{
			$("#notice").show();
			$("#result").hide();
			$("#blog").hide();
			$("#submit").show();
			console.log("notice");
		}
		if($("#typeselect" ).val() == "result")
		{
			$("#notice").hide();
			$("#result").show();
			$("#blog").hide();
			$("#submit").show();
			console.log("result");
		}
		if($("#typeselect" ).val() == "blog")
		{
			$("#notice").hide();
			$("#result").hide();
			$("#blog").show();
			$("#submit").show();
			console.log("blog");
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