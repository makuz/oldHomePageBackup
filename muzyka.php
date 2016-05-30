<?php
	include("includes/header.php");
?>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script type="text/javascript">
	$(document).ready (function (){
    $("#music_wrapper").hide(0).delay(1500).show(500).fadeIn(2000);
	$(".music_container").hide(0).fadeIn(2000);
});
	

 </script>


	
<article>
	
<div id="content_container">

<div id="music_all">

	<div id="music_wrapper">
	
	<figure class="moje_kompozycje">
			<h2 class="h2_black"> moje kompozycje</h2>
				<iframe class="playlist1" scrolling="no" frameborder="no" 
			src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/13129768&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
			</iframe>
		</figure>
		
	<figure class="nagrania_gitarowe">		
		<h2 class="h2_black">nagrania gitarowe</h2>
			<iframe class="playlist2" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/13106196&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
		</iframe>
	</figure>


</div>


<aside class="music_container">
<h2 class="h2_black"> Wybrana dyskografia </h2>

<hr>

<img class="img_dis" id="dis1" src="../image/dyskografia/freeway1.jpg" alt="Freeway Quintet - EP" title="Freeway Quintet - EP">
<img class="img_dis" id="dis2" src="../image/dyskografia/soundrise.jpg" title="Soundrise - NIEMEN NIEZNANY">
<img class="img_dis" id="dis3" src="../image/dyskografia/freeway2.jpg" title="Freeway Quintet - This is no ordinary jazz">
<img class="img_dis" id="dis4" src="../image/dyskografia/breslauer.png" title="Breslauer cocktail - EP">
<img class="img_dis" id="dis5" src="../image/dyskografia/hoverla.jpg" title="Hoverla - EP">


</aside>
</div>


</div>
</article>

<?php include("includes/footer.php"); ?>

	</script>
	<script type="text/javascript">
	$(document).ready(function() { 
	// 1 img		
	
	$("#dis1").toggle(
    function(){ $("#dis1").animate({"width":"40%", "margin-left":"-1%","margin-top":"0" }, 1000)
	.css('opacity', 1)
	; 	
	},
	
	
    function(){ $("#dis1").animate({"width":"20%", "margin":"0 auto"}, 1000)
	$("#dis1").hover(function(){
    $("#dis1").css("opacity","0.5");
    },function(){
    $("#dis1").css("opacity","1");
	});
	
		
  });
	
	// 2 img
	
	$("#dis2").toggle(
    function(){ $("#dis2").animate({"width":"40%", "margin-left":"-1%","margin-top":"0" }, 1000)
	.css('opacity', 1)
	; 	
	},
	
	
    function(){ $("#dis2").animate({"width":"20%", "margin":"0 auto"}, 1000)
	$("#dis2").hover(function(){
    $("#dis2").css("opacity","0.5");
    },function(){
    $("#dis2").css("opacity","1");
	});
	;
  });
  
  // 3 img
  
  $("#dis3").toggle(
    function(){ $("#dis3").animate({"width":"40%", "margin-left":"-1%","margin-top":"0" }, 1000)
	.css('opacity', 1)
	; 	
	},
	
	
    function(){ $("#dis3").animate({"width":"20%", "margin":"0 auto"}, 1000)
	$("#dis3").hover(function(){
    $("#dis3").css("opacity","0.5");
    },function(){
    $("#dis3").css("opacity","1");
	});
	;
  });
  
  // 4 img
  
 $("#dis4").toggle(
    function(){ $("#dis4").animate({"width":"40%", "margin-left":"-50%","margin-top":"-1%" }, 1000)
	.css('opacity', 1)
	; 	
	},
	
	
    function(){ $("#dis4").animate({"width":"20%", "margin":"0 auto"}, 1000)
	$("#dis4").hover(function(){
    $("#dis4").css("opacity","0.5");
    },function(){
    $("#dis4").css("opacity","1");
	});
	
	;	
  });
  
  //5 img
  
  $("#dis5").toggle(
    function(){ $("#dis5").animate({"width":"40%", "margin-left":"-60%","margin-top":"-1%" }, 1000)
	.css('opacity', 1)
	; 	
	},
	
	
    function(){ $("#dis5").animate({"width":"20%", "margin":"0 auto"}, 1000)
	$("#dis5").hover(function(){
    $("#dis5").css("opacity","0.5");
    },function(){
    $("#dis5").css("opacity","1");
	});
	
	;
  });
		
	

}); 
</script>


</body>

</html>