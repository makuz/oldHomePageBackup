<?php
	include("includes/header.php");
?>

<article>

<div id="content_container">

	
	<div id="wrapper_contact">
	
	<?php include("../includes/mail_form.php"); ?>
			

	<figure class="figure_contact">
		<img class="img_contact" src="../image/contact.jpg" alt="">
		</figure>
	</div>

</div>

</article>
<?php include("includes/footer.php"); ?>


	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready (function () {
	$(".contact1").hide(0).show(800).fadeIn(1000);
	});
	</script>





</body>

</html>