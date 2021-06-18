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
		$( '#modal-nombre-post' ).html($( this ).attr('data-post'));
		$( '#btn-confirm-delete' ).attr('data-idpost', $( this ).attr('data-idpost'));
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

	$( '#btn-upload-post' ).click(function(){
		$( '#form-post' ).submit();
	});

	$( '#btn-upload-file' ).click(function(){
		$( '#form-file' ).submit();
	});

	$( '#btn-submit-contact' ).click(function(){
		$( '#form-contact' ).submit();
		$( '#form-contact' ).append('<div class="alert alert-success" role="alert">Se ha mandado correctamente</div>');
	});

	$( '.url-image' ).click(function(){
		$( '.img-post' ).attr('src', $(this).attr('data-route'));
		$( '.username-post' ).html($( this ).attr('data-username'));
	});
    
});