$( document ).ready(function(){
	var iframe = document.createElement("iframe");
        iframe.width = '100%';
        iframe.height = '700px';
        iframe.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
        $( '#show-pdf' ).append(iframe);
});