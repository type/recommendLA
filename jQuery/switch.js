var contentSwitch = function(scriptSource) {
	$("head").append("<script src=" + scriptSource + " ></script>");
};

$(function(){
	$("#findNav").click(function(){
		$("#add").hide();
		$("#find").show();
	});
	$("#addNav").click(function(){
		$("#find").hide();
		$("#add").show();
	});
});

