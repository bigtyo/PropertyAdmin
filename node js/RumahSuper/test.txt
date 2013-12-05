var json = {};

$.post('http://localhost:3000/listing',{
		jsondata : JSON.stringify(json)
},function(res){
	var json = JSON.parse(res);
});