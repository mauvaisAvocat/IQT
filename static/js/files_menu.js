$( document ).ready(function(){
	var iframe = document.createElement("iframe");
	iframe.width = '100%';
	iframe.height = '700px';
	iframe.src = '';

	$( '#primer-link' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.10.pdf';
		$( '#show-pdf-2' ).append(iframe);
	});

	$( '#segundo-link' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
		$('#show-pdf-2').append(iframe);
	});

	$( '#tercer-link' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.10.pdf';
		$( '#show-pdf-2' ).append(iframe);
	});

	$( '#carpeta1' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
		$( '#show-pdf-3' ).append(iframe);
	});

	$( '#carpeta2' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.10.pdf';
		$( '#show-pdf-3' ).append(iframe);
	});

	$( '#carpeta3' ).click(function(){
		iframe.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
		$( '#show-pdf-3' ).append(iframe);
	});

	$( '#carpeta-1' ).click(function(){
		var subcarpetas = '<ul id="menu"><li id="sub-1"><a href="http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf" target="_blank">Subcarpeta 1</a></li><li id="sub-2"><a href="#">Subcarpeta 2</a></li><li id="sub-3"><a href="#">Subcarpeta 3</a></li></ul>';
		$( '#show-subcarpetas' ).append(subcarpetas);

	});

	$( '#search-document' ).click( function(e){
		e.preventDefault();
		var $inputSearch = $( '#search-menu' ).val();
		var $li = $( '#menu' ).find('li').length;
		//var $doc = $( '#menu' ).find('li.p').text();
		var $array = [];
		$array.push($('#primer-link').text());
		$array.push($('#segundo-link').text());
		$array.push($('#tercer-link').text());

		for (var i = 0; i < $li; i++) {
			if ($inputSearch.trim() === $array[i].trim()) {
				iframe.src = 'http://localhost/estadia/static/pdf/1.3_PresentPerfectTense.pdf';
				$( '#show-pdf-2' ).append(iframe);
			}
		}
		
	});


});