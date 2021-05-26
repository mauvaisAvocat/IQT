$( document ).ready(function(){
	var iframe = document.createElement("iframe");
	iframe.width = '100%';
	iframe.height = '700px';
	iframe.src = 'http://localhost/estadia/static/pdf/1.10.pdf';

	$( '#primer-link' ).click(function(){
		$( '#show-pdf-2' ).append(iframe);
	});

	$( '#segundo-link' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
		$('show-pdf-2').append(iframe);
	});

	$( '#tercer-link' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.10.pdf';
		$( 'show-pdf-2' ).append(iframe);
	});

	$( '#search-document' ).click( function(e){
		e.preventDefault();
		var $inputSearch = $( '#search-menu' ).val();
		var $li = $( '#menu' ).find('li').length;
		//var $doc = $( '#menu' ).find('li.p').text();
		
		alert($( '#menu > li' ).text());


	});

});