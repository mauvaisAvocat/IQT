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
		location.href = "http://10.255.0.187/estadia/post/btn_delete/" + $( this ).attr('data-idpost');
	});

	$( '.btn-unable-user' ).click(function(){
		$( '#modal-nombre-usuario' ).html($( this ).attr('data-user'));
		$( '#btn-confirm-unable' ).attr('data-user', $( this ).attr('data-user'));
	});

	$( '#btn-confirm-unable' ).click(function(){
		location.href = "http://10.255.0.187/estadia/main/lock_user";
	});

	$( '#btn-upload-post' ).click(function(){
		$( '#form-post' ).submit();
	});

	$( '#btn-upload-file' ).click(function(){
		$( '#form-file' ).attr('action', 'http://10.255.0.187/estadia/file/load_files/' + $( '.send-id-carpeta' ).attr('data-idcarpeta'));
		$( '#form-file' ).submit();
	});

	$( '#btn-submit-contact' ).click(function(){
		$( '#contact-form' ).append('<div class="alert alert-success" role="alert">Se ha enviado correctamente</div>');
	});

	$( '.url-info' ).click(function(){
		$( '#image-post-user' ).attr('src', $(this).attr('data-route'));
		$( '.username-post' ).html($( this ).attr('data-username'));
		$( '.date-post' ).html($( this ).attr('data-date'));
		$( '.tittle-post' ).html($( this ).attr('data-tittle'));
		$( '.message-post' ).html($( this ).attr('data-message'));
	});

	$( '#new-folder' ).click(function(){
		$( '#folder-form' ).submit();
		$( '.show-alert' ).append("<div class='alert alert-success' role='alert'>Se agregó carpeta exitosamente</div>");
	});

	$( '.send-id-carpeta' ).click(function(){
		location.href = "http://10.255.0.187/estadia/file/show_files/" + $( this ).attr('data-idcarpeta');
	});

	$( '.url-direction' ).click(function(){
		location.href = "http://10.255.0.187/estadia/main/directory/" + $( this ).attr('data-iddirection');
	});
    
});