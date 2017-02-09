$(function(){
	$.ajax({
		url: 'http://119.29.26.196/mugua/frontend/web/index.php?r=rank/levelrank',
		type: 'GET',
		dataType: 'json',
		success:function(object){
			console.log(object[0].Name);
		}
	})
})