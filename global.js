$(document).ready(function() {					// is the document ready?
	

	var oldphrase = $("#whaleroot").text();		// stores the original phrase
	var newphrase = "WHALEROOT";				// stores an exciting, patriotic new phrase

	$("#whaleroot").mouseover(function(){
		$(this).text(newphrase);				// sets the new phrase
	}).mouseout(function(){
		$(this).text(oldphrase);				// puts the original phrase back
	});


});