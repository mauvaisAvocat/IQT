$( document ).ready( function(){
	$( '#search-document' ).click( function(e){
		e.preventDefault();
		var $inputSearch = $( '#search-menu' ).val();
		alert($inputSearch);
	});
});