/*
	This example is for selecting
	
	$(document).ready(function(){
	alert($('#celebs tbody tr').length + ' elements!');
});

This example is for selecting and determining what parameters an element posseses

$(function(){
	var fontColor = $('#navigation ul li a').css('font-size');
	
	alert(fontColor);
});

*/


/*
	These are examples is for adding class

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


/*
	This example is an if else statement example using toggle, this, and var
	
$(document).ready(function() {
	
	$('#toggleButton').click(function() {
		if ($('p#disclaimer').is(':visible')) {
			$('p#disclaimer').hide();
		} else {
			$('p#disclaimer').show();
		}
		alert('COMPLETED');
	});
});

$(function(){
	$('#toggleButton').click(function(){
		
		$('p#disclaimer').toggle();
		if ($('p#disclaimer').is(':visible')){
			$('this').val('Hide');
		} else {
			$('this').val('Show');
		}
	});
});

*/

/*
	This example is using jQuery to add HTML elements to the DOM

$(document).ready(function(){
	$('<input type="button" value="toggle" id="toggleButton" />').insertBefore('#disclaimer');
	
	$('#toggleButton').click(function(){
		
		$('p#disclaimer').toggle();
		
		if ($('p#disclaimer').is(':visible')){
			$('this').val('Hide');
		}else{
			$('this').val('Show');
		}
	});
});



$(document).ready(function(){
	$('<strong>START</strong>').prependTo('#disclaimer');
	$('<strong>START</strong>').appendTo('#disclaimer');
})



$(document).ready(function(){
	$('<input>', {
		id:'specialButton',
		value: 'Click Me!',
		type: 'button',
		click: function(){
			$('#disclaimer').toggle();
			
			if($('#disclaimer').is(':visible')){
				$('#disclaimer').val('Hide');
			}else{
				$('#disclaimer').val('Show');
			}
		}
	}).insertBefore('#disclaimer');
});
<<<<<<< HEAD
=======

$('#disclaimer').animate({'height':'+=150px'}, 2000, 'easeOutBounce');
$('#disclaimer').animate({'height':'-=150px'}, 2000, 'easeInOutExpo');
*/
>>>>>>> origin/master

$('#disclaimer').animate({'height':'+=150px'}, 2000, 'easeOutBounce');
$('#disclaimer').animate({'height':'-=150px'}, 2000, 'easeInOutExpo');
*/

$(document).ready(function(){
		$('.spoiler').hide();
		
		$('<input>',{
			class: 'revealer',
			value: 'ANSWER',
			type: 'button',
			click: function(){
				if($('#disclaimer').is(':visible')){
					$(this).animate({'height':'+=150px'}, 2000, 'swing');
				}else
		}).insertBefore('#disclaimer');
});

$(document).ready(function(){
	$('p:first').toggle(function()({
		$(this).animate({'height':'+=150'}, 2000, 'linear');
	}, function(){
		$(this).animate({'height':'-=150'}, 2000, 'swing');
	});
});









