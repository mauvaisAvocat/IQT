$( document ).ready(function(){
	var iframe = document.createElement("iframe");
	iframe.width = '100%';
	iframe.height = '700px';
	iframe.src = 'http://localhost/estadia/static/pdf/1.10.pdf';
	$( '#show-pdf' ).append(iframe);

	var iframe2 = document.createElement("iframe");
		iframe2.width = '100%';
		iframe2.height = '700px';
		iframe2.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
		$('#show-pdf-1').append(iframe2);
});