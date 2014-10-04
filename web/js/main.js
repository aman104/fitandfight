$(function() {

	// $('.infinite-scroll').jscroll({
	//     loadingHtml: 'Loading',
	//     padding: 20,
	//     nextSelector: 'a.jscroll-next:last',
	//     contentSelector: 'li',
	//     debug: true
	// });

	$('.grafik a').on('click', function(event) {
		//event.preventDefault();		
		$('.grafik-desc').hide();
		$(this).next('.grafik-desc').show();	
		return false;	
	});

	$('body').not('a').on('click', function(event) {
		if (!$(event.target).is(".grafik a")) {
	       $('.grafik-desc').hide();
	    }
	});

});
