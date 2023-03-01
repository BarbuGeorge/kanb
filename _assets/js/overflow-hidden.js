jQuery(document).ready(function($){
	$('.navbar-toggler').click(function(){
		if ($(".js").hasClass('overflow-hidden')) {
			$(".js").removeClass('overflow-hidden');
		}
		else
		 {
		  $(".js").addClass('overflow-hidden');
		 }
	});
});

