<?php
	include("includes/header.php");
?>

	
<article>
<div id="content_container">

	
	<div class="gallery_wrapper">
	
	
	
	
	<img class="img_gallery" id="img1" src="../image/gallery/1.jpg">
	<img class="img_gallery" id="img2" src="../image/gallery/g.jpg">
	<img class="img_gallery" id="img3" src="../image/gallery/10.jpg">
	<img class="img_gallery" id="img4" src="../image/gallery/5.jpg">
	<img class="img_gallery" id="img5" src="../image/gallery/12.jpg">
	<img class="img_gallery" id="img6" src="../image/gallery/11.jpg">



</div>
</div>


</article>
<?php include("includes/footer.php"); ?>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	
	<script type="text/javascript">
	// img gallery animation
	$(document).ready(function() { 
	
	// 1 img		
	
	$("#img1").toggle(
    function(){ $("#img1").animate({width:"+95%", "margin-left":"-1%","margin-top":"-15%" }, 1000)
	.css('opacity', 1)
	; 
	$("#img2, #img3, #img4, #img5, #img6").hide(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"0.5"}, 1000);
	
	
	},
    function(){$("#img1").animate({width:"default", "margin":"0 auto"}, 1000)
	$("#img1").hover(function(){
    $("#img1").css("opacity","0.5");
    },function(){
    $("#img1").css("opacity","1");
	});
	;
	$("#img2, #img3, #img4, #img5, #img6").show(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"1"}, 1000);
	});
	
	// 2 img
		
	$("#img2").toggle(
    function(){ $("#img2").animate({width:"+95%", "margin-left":"-1%","margin-top":"-15%" }, 1000)
	.css('opacity', 1)
	; 
	$("#img1, #img3, #img4, #img5, #img6").hide(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"0.5"}, 1000);
	
	},
    function(){$("#img2").animate({width:"default", "margin":"0 auto"}, 1000)
	$("#img2").hover(function(){
    $("#img2").css("opacity","0.5");
    },function(){
    $("#img2").css("opacity","1");
	});
	;
	$("#img1, #img3, #img4, #img5, #img6").show(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"1"}, 1000);
  });
	// 3 img
	
	$("#img3").toggle(
    function(){ $("#img3").animate({width:"+95%", "margin-left":"-1%","margin-top":"-15%" }, 1000)
	.css('opacity', 1)
	; 
	$("#img1, #img2, #img4, #img5, #img6").hide(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"0.5"}, 1000);
	
	},
    function(){$("#img3").animate({width:"default", "margin":"0 auto"}, 1000)
	$("#img3").hover(function(){
    $("#img3").css("opacity","0.5");
    },function(){
    $("#img3").css("opacity","1");
	});
	;
	$("#img1, #img2, #img4, #img5, #img6").show(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"1"}, 1000);
  });
	
	//4 img
	
		
	$("#img4").toggle(
    function(){ $("#img4").animate({width:"+95%", "margin-left":"-1%","margin-top":"-15%" }, 1000)
	.css('opacity', 1)
	; 
	$("#img1, #img2, #img3, #img5, #img6").hide(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"0.5"}, 1000);
	
	},
    function(){$("#img4").animate({width:"default","margin":"0 auto"}, 1000)
	$("#img4").hover(function(){
    $("#img4").css("opacity","0.5");
    },function(){
    $("#img4").css("opacity","1");
	});
	;
	$("#img1, #img2, #img3, #img5, #img6").show(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"1"}, 1000);
  });
  
  // img 5
  
  $("#img5").toggle(
    function(){ $("#img5").animate({width:"+95%", "margin-left":"-1%","margin-top":"-15%" }, 1000)
	.css('opacity', 1)
	; 
	$("#img1, #img2, #img3, #img4, #img6").hide(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"0.5"}, 1000);
	
	},
    function(){$("#img5").animate({width:"default","margin":"0 auto"}, 1000)
	$("#img5").hover(function(){
    $("#img5").css("opacity","0.5");
    },function(){
    $("#img5").css("opacity","1");
	});
	;
	$("#img1, #img2, #img3, #img4, #img6").show(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"1"}, 1000);
  });
  
  // img 6
  $("#img6").toggle(
    function(){ $("#img6").animate({width:"+95%", "margin-left":"-1%","margin-top":"-15%" }, 1000)
	.css('opacity', 1)
	; 
	$("#img1, #img2, #img3, #img4, #img5").hide(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"0.5"}, 1000);
	
	},
    function(){$("#img6").animate({width:"default","margin":"0 auto"}, 1000)
	$("#img6").hover(function(){
    $("#img6").css("opacity","0.5");
    },function(){
    $("#img6").css("opacity","1");
	});
	;
	$("#img1, #img2, #img3, #img4, #img5").show(100);
	$("nav.menu_bar, hgroup.home_header").animate({"opacity":"1"}, 1000);
  });  
 }); 
</script>
</body>

</html>