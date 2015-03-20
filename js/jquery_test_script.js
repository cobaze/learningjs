/*
	This example is for selecting
	
	$(document).ready(function(){
	alert($('#celebs tbody tr').length + ' elements!');
});

*/

$(document).ready(function(){
	$('#celebs tbody tr:even').addClass('.even_colors')