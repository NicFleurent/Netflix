jQuery(document).ready(function($){
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
	
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') || $(event.target).is('.cd-popup-non') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});

	//open popup acteur
	$('.cd-popup-trigger-acteur').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-acteur').addClass('is-visible');
	});
	
	//close popup acteur
	$('.cd-popup-acteur').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup-acteur') || $(event.target).is('.cd-popup-non') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});

	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
    		$('.cd-popup-acteur').removeClass('is-visible');
	    }
    });
});