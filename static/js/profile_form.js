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

	$( '.btn-posts-views' ).click(function(){
		$( '#posts-views' ).load('http://localhost/estadia/post/show_posts');
	});

	$( '.btn-delete-post' ).click(function(e){
		e.preventDefault();
		var $idpost = $( '.btn-delete-post' ).attr('data-idpost');
		var $post = $( '.btn-delete-post' ).attr('data-post');
		$( '#btn-eliminar-confirmar' ).attr('data-idpost', $idpost);
		$( '#modal-nombre-post' ).html($post);
	});

	$('#btn-eliminar-confirmar').click(function(){
		var $idpost = $(this).attr('data-idpost');
		$( this ).attr('href', 'http://localhost/estadia/post/btn_delete/' + idpost);
	});
});