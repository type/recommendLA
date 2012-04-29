window.jsonp = function(uri, params, cb) {
	apikey = "recommendla";
	$("head").append("<script src=http://crowdfront.herokuapp.com/" + apikey + "/" + uri + "?" + params + " ></script>");
	window.p = cb
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



//jsonp("user_likeiness", "userID=Shea", function(data){
	//console.log(data);
//});



jsonp("thing_likeiness", "userID=Shea", function(data){
	data = ["gyu", "some other place"];
	console.log(data);
});
