$( document ).ready(function(){
	$( '#address' ).click(function(){
		$('#address').val('');
	});

	$( '#phone' ).click(function(){
		$('#phone').val('');
	});

	$( '#extension' ).click(function(){
		$( '#extension' ).val('');
	});

	$( '#rfc' ).click(function(){
		$('#rfc').val('');
	});

	$( '#curp' ).click(function(){
		$('#curp').val('');
	});
	
	$( '#password' ).click(function(){
		$('#password').val('');
	});

	$( '.btn-posts-views' ).click(function(event){
		$( '#posts-views' ).load('http://localhost/estadia/post/show_posts');
	});
});