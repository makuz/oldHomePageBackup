<?php
	include("includes/header.php");
?>
	
<article>	

<div id="content_container">
	
	<div id="lesson_wrapper_up">
	
	<header class="class_header">
		<h1 align="left">Profesjonalne lekcje gry na gitarze</h1>
	</header>	


	<figure class="figure_lesson">
		<img class="img_lesson" src="../image/lesson.jpg" alt="">
	</figure>
		
	<div class="lessons_right">		
			<header><p>Zapraszam na lekcje gry na gitarze 
			tych, którzy chcą dopracować swój warsztat, jak i zupełnie początkujących. 
			Zapraszam chętnych w każdym wieku!</header>
						
			<header><p><b><big>Czego uczę:</big></b></header>
			Na moich zajęciach przede wszystkim nauczysz się jak mądrze ćwiczyć,
			tak aby robić szybkie postępy.
			
			<header><p><big><b>Oprócz tego poznasz:</b></big></p></header>
			<p align="left">
			- &nbsp jaka jest prawidłowa postawa z instrumentem<br>
			- &nbsp jak właściwie ćwiczyć i co warto ćwiczyć, a czego nie<br>
			- &nbsp jak pracować nad wybranym utworem<br>
			- &nbsp ćwiczenia techniczne<br>
			- &nbsp dowiesz się co to frazowanie<br>
			- &nbsp techniki gitarowe: gra solistyczna, gra akordowa, <br>
			&nbsp &nbsp kostkowanie obustronne, legato, sweep picking,<br> 
			&nbsp &nbsp economy picking, technika klasyczna,<br> 
			&nbsp &nbsp technika hybrydowa, arpeggio<br>
			- &nbsp improwizacja<br>
			- &nbsp skale modalne<br>
			- &nbsp dowiesz się jak grać jak jazz, blues, funck, rock, folk<br>
			- &nbsp poznasz teorię muzyki<br>
			- &nbsp dowiesz się co to jest kształcenie słuchu<br>
			- &nbsp Pomogę w analizie stylu ulubionych gitarzystów,<br> 
			&nbsp &nbsp nauczenia się ich zagrywek i tricków <b>od Hendrixa po <br>
			&nbsp &nbsp Pata Metheny.</b></p>
	</div>
	
	</div>
	
<aside class="lesson_wrapper_under">
	
	<table class="table_lesson_under">
			<tr>
			<td class="td_lessons">
			<header><p>	<b><big>&nbsp Moje doświadczenie pedagogiczne:</big></b><br></header>
			Uczę od kilku lat w ośrodkach kulturalnych działających pod patronatem Dolnośląskiego Towarzystwa
			Muzycznego na terenie Wrocławia i okolic.<br>
			Oprócz tego byłem wykładowcą w klasie gitary na
			Warsztatach Muzycznych Druga Strona Ulicy w Głogowie oraz na 
			Obozie Gitarowym Vauge Travel w Murzasichle.
			Prowadziłem zajęcia indywidualne jak i grupowe.<br> 
			Miałem uczniów w każdym przedziale wiekowym od 5 do 55...<br>
			Prowadzę lekcje mistrzowskie z dziedziny techniki i 
			improwizacji dla zaawansowanych. <br>
			Uczę również podstaw dla początkujących.</p></td>
			
			<td class="td_lessons"> 
			<header><p>	<b><big>&nbsp Moje wykształcenie muzyczne:</big></b><br></header>
			Posiadam Wyższe Wyksztłcenie Muzyczne.
			Jestem absolwentem <b>Edukacji Artystycznej w Zakresie Sztuki Muzycznej</b> 
			oraz <b>Muzykologii</b>. Uczestniczyłem w wielu <b>Ogólnopolskich warsztatach Gitarowych 
			i Jazzowych</b>: w Gdyni, Chodzieży, Puławach, Zielonej Górze...
			Zapraszam na mój kanał youtube: </p><br><br>
			<a href="http://www.youtube.com/user/martinkuzdowicz"><center><img class="button_lesson" src="../image/buttons/youtube2.jpg"></a><br><br>
			<p>Tam dowiesz się o mnie więcej</p>
			</td>
			</tr>
			
			<tr>	<td class="td_lessons"><header><p><b><big>Gdzie uczę:</big></b></p></header>
			<p align="left">Zajęcia odbywają się w moim domowym studio w centrum Wrocławia 
			w okolicach Sky Tower, gdzie posiadam odpowiedni sprzęt. 
			Na miejscu mam wzmacniacz, kilka gitar, efekty gitarowe 
			oraz sprzęt do nagrywania. <br>
			<mark class="mark_lesson"> <b>&nbsp Nie musisz przynosić ze sobą instrumentu!!!! 
			Wszystko mam na miejscu.</b></mark> &nbsp Jestem młody i komunikatywny, 
			więc zajęcia na pewno będą odbywać się bez spięć</p>	</td>
			
			<td class="td_lessons">	<p align="left">
			<header><p><big>Zainteresowany? Zainteresowana? <bt>Masz pytania</big><header>
			pisz na maila &nbsp &nbsp&nbsp  &nbsp <b>marcin.kuzdowicz@wp.pl</b><br>
			lub dzwoń:   &nbsp  &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp<b>665 410 836</b>
			<br>	
			Cena:<br>
			1h (60minut) &nbsp-&nbsp&nbsp 50zł<br>
			(45 minut) &nbsp&nbsp&nbsp&nbsp&nbsp-&nbsp&nbsp 40 zł<br>
			<br>
			W cenie są materiały jakie uczeń będzie ode mnie otrzymywać, mam na miejscu skaner i drukarkę.</p>	</td>
			</tr>
	</table>

</aside>
</div>
</article>

<?php include("includes/footer.php"); ?>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script type="text/javascript">
	$(document).ready (function () {
	$(".figure_lesson").hide(0).fadeIn(800);
	$(".lessons_right").hide(0).show(1000);
	$(".lesson_wrapper_under").hide(0).show(800);
	$("footer").hide(0).delay(800).show(800);
	
	
	});

</script>



</body>

</html>