$(document).ready(function(){
	$('#progress-table .step-desc a').hover(
		function(){
			$(this).next().fadeIn();
		}, 
		function(){
			$(this).next().fadeOut();
		}
	);
});
