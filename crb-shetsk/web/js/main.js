$(function(){
		$(document).on('click', '.language', function(){
			var lang = $(this).attr('id');
			// var context = $(this).attr('name');
			// console.log(context);
			$.post('index.php?r=site/language', {'lang': lang}, function(data){
				location.reload();
			});
		});
});