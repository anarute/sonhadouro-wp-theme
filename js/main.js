jQuery(function(){
    
    jQuery('.post_link').mouseover(function(){
	var post_id = jQuery(this).attr('id');
	jQuery('.'+post_id+'> a').css('opacity','1');
	window.clearInterval(interval);
    }).mouseout(function(){
	var post_id = jQuery(this).attr('id');
	jQuery('.'+post_id+'> a').css('opacity','0.05');
	interval = window.setInterval(animation, 10000);
    });
    jQuery('.post > a').mouseover(function(){
	jQuery(this).css('opacity','1');
	window.clearInterval(interval);
    }).mouseout(function(){
	jQuery(this).css('opacity','0.05');
	interval = window.setInterval(animation, 10000);
    });
    
    jQuery("a[rel*=leanModal]").leanModal();
    /*jQuery("a[rel=leanModal]").click(function(){
	console.log("click link");
	window.clearInterval(interval);
    });
    jQuery("#lean_overlay").click(function(){
	console.log("click overlay");
	interval = window.setInterval(animation, 10000);
    });*/

    jQuery('.post > a').css({"display" :  "block"});

    var animation = function(){
	var n =  Math.floor(Math.random()*100%jQuery('.post > a').size());
	
	jQuery('.post > a :eq(' + (n) + ')').css({opacity: 0.5});
	jQuery('.post > a :eq(' + (n) + ')').animate({
	    "margin-left": '+=4',
	    "margin-top": '-=2',
	}, 250, function() {
	    jQuery(this).animate({
                "margin-left": '-=3',
		"margin-top": '+=5',
	    }, 150, function(){
		jQuery(this).animate({
		    "margin-left": '-=2',
		    "margin-top": '-=6',
                }, 150, function(){
		    jQuery(this).animate({
                        "margin-left": '+=1',
                        "margin-top": '+=3',
		    }, 300);
		});
	    });
	});
	setTimeout(function(){
	    jQuery('.post > a').css({opacity: 0.05});
	}, 900);
    }
    
    var interval = window.setInterval(animation, 10000);
    //window.clearInterval(interval);
});
