$(document).ready(function(){
	$('#btn_create').click(function(){
		$('#create_form').toggleClass('hide');
	});

	$('.clickable-row').mouseenter(function(){
		$(this).css('background','#343a40');
		$(this).css('cursor', 'pointer');
	});

	$('.clickable-row').mouseleave(function(){
		$(this).css('background','none');
		$(this).css('cursor', 'default');
	});

	$('#keyword').keyup(function(){
		$.get('index.php?r=article/getArticleByTitle&keyword=' + $('#keyword').val(), function(data){
			$('#result').html(data);
		});
	});

	$('.card').mouseenter(function(){
		$('.card').not(this).css('z-index', '1');
		$(this).css({'transform':'scale(1.25)', 'z-index':'2', 'position':'relative'});
	});

	$('.card').mouseleave(function(){
		$(this).css({'transition':'0.4s', 'transform':'scale(1)'});
	});
});

