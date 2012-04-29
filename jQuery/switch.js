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



/*jsonp("thing_likeiness", "userID=Shea", function(data){
	data = ["gyu", "some other place"];
	console.log(data);
});*/

var addPlace = function(){
	var data = $("#formAdd").children("input:not([type=submit]), select");
	var reviewObject = {attr:{}};
	data.each(function(){
		if (this.tagName === "SELECT")
			reviewObject.attr[this.name]=this.value;
		else
			reviewObject[this.name]=this.value;
	});

	var jsonData = JSON.stringify(reviewObject);
	jsonp("rate", "data=" +  encodeURIComponent(jsonData), function(data){
		console.log(data);
		$("#addResult").show();
	});
};

var findPlace = function(){
	var data = $("#formFind input[name=userID]");
	/*May add attributes later, but only userID for now*/
	jsonp("thing_likeiness", "userID="+encodeURIComponent(data.val()), function(data){
		console.log(data);
		$('#findResults').show();
		var obj = data;
		for(var i=0;i<obj.length;i++){
			var attrhtml="";
			for(attr in obj[i]){
				if(attr==="placeName") continue;
				attrhtml+= attr+": "+obj[i][attr]+"<br>";
			}
			$('#findResults').html("<div style='text-align:left;margin:20px'><h3>"+obj[i].placeName+"</h3>"+attrhtml+"</div>");
		}
	});

	//send query to API
	//print out results to div
};

