$(function() {

	// ANCHOR TAGS
    $("#navigation ul li a, a.scroll").click(function(event) {
		event.preventDefault();
	
		var full_url = this.href;
	
		var parts = full_url.split("#");
		var trgt = parts[1];
		 
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top - 150;
		
	
		$('html, body').animate({
			scrollTop: target_top}, 2000);
    	});
		
		$(".navigation ul li:not('.last') a").live('click',function() {
			$('.navigation ul li').removeClass('active');
			$(this).parent().addClass('active');																
		});
		
	// PAGE - on the move
	$('#container').animate({
		paddingTop: '140px'
	},1000);
	
	$("#portfolio .bucket a").hover(function() { 
		$(this).children(".overlay").show(); }, function() { 
		$(this).children(".overlay").hide(); 
	});

	
});