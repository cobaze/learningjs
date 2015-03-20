/*
	This example is for selecting
	
	$(document).ready(function(){
	alert($('#celebs tbody tr').length + ' elements!');
});

*/

/*
	This example is for adding class

$(document).ready(function(){
	$('#celebs tbody tr:even').css({
		'background-color':'blue',
		'color':'white'
		});
});

$(document).ready(function(){
	$('#celebs tbody tr:even').addClass('even_colors');
});

$(document).ready(function(){
	$('#celebs tbody tr:even').removeClass('even_colors');
});

*/

$(document).ready(function(){
	$('#hideButton').click(function(){
		$('p#disclaimer').hide();
	});
});