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

	$( '.btn-delete-post' ).click(function(){
		$( '#modal-nombre-post' ).html($( '.btn-delete-post' ).attr('data-post'));
		$( '#btn-confirm-delete' ).attr('data-idpost', $( '.btn-delete-post' ).attr('data-idpost'));
	});     

	$( '#btn-confirm-delete' ).click(function(){
		location.href = "http://localhost/estadia/post/btn_delete/" + $( this ).attr('data-idpost');
	});

	$( '.btn-unable-user' ).click(function(){
		$( '#modal-nombre-usuario' ).html($( this ).attr('data-user'));
		$( '#btn-confirm-unable' ).attr('data-user', $( this ).attr('data-user'));
	});

	$( '#btn-confirm-unable' ).click(function(){
		location.href = "http://localhost/estadia/main/lock_user";
	});       
});