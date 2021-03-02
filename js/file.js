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
		console.log('ok');
		$.get('http://laptop-309vt38d/jonathan/index.php?r=article/getArticleByTitle&keyword=' + $('#keyword').val(), function(data){
			$('#result').html(data);
		});
	});
});