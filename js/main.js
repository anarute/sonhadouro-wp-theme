jQuery(function(){
	
	jQuery('.post_link').mouseover(function(){
		var post_id = jQuery(this).attr('id');
		jQuery('.'+post_id+'> a').css('opacity','1');
	}).mouseout(function(){
		var post_id = jQuery(this).attr('id');
		jQuery('.'+post_id+'> a').css('opacity','0.05');
	});
	jQuery('.post > a').mouseover(function(){
		jQuery(this).css('opacity','1');
	}).mouseout(function(){
		jQuery(this).css('opacity','0.05');
	});


	jQuery("a[rel*=leanModal]").leanModal();

});
