<?php
session_start();
if (!isset($_SESSION['Logado'])) {
	header("Location: index.php");}
	session_destroy();

 ?> 



<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/52a7b8fb5c.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href=" styles/style5.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Solway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="gallery.theme.css"> 
	<link rel="stylesheet" href="gallery.min.css"> 
</head>
<body>
	<header class="cabecalho">
		<a href="#"> <h1 class="logo"></h1></a>
		<nav>
			<ul>
			<li>
				<a href="#">Início</a>
				<a href="#serviços">Suporte</a>
				<a href="#work">Entenda</a>
				<a href="#contato">Contato</a>
			</li>
		</nav>
	</ul>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb231ec81d25c0e58492dd1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</header>°°

	<section class= "banner-area">
	<div class="img-area"></div>
	<div class= "banner-text" id="blur">
		<div class="content">
	<h1>SYSHELP</h1>
	<h3>Prezamos por você.</h3>
	<a href="#" onclick="toggle()" class="btn">Saiba Mais</a>
</div>
</div>
</section>
<div id="popup">
	<h2>SYSHELP</h2>
	<br>
	<p> Esta é uma plataforma totalmente anônima, onde, você só se identifica se for de sua vontade. Nosso objetivo é te auxiliar em relação a alguma situação desconfortável a qual você tenha passado em seu serviço, seja ela: Algum tipo de discriminação, preconceito ou assédio. Nós acreditamos em você, iremos encaminhar sua queixa para alguém responsável pela situação prezando seu conforto e anonimato. Será feito de tudo para que a situação seja resolvida. Não se cale, você não está sozinho(a).</p>
	<br>
	<a href="#" onclick="toggle()" class="btn">Fechar</a>
	
</div>
</div>

<script type="text/javascript">
	function toggle(){
		var blur = document.getElementById('blur');
		blur.classList.toggle('active');
		var popup = document.getElementById('popup');
		popup.classList.toggle('active');
	}
</script>

	
	</section>

	<section class="serviços-area" id="serviços">
	<h3 class="header-text">Psicólogos</h3>
	<p>  </p>
	<div class="content-area"> 

		<div class="single-service">
			<div class="icon-area">
				<i class="fas fa-user"></i>
			</div>
			<h2>João Victor Silveira</h2>
			<h4> EMAIL: ***@gmail.com <h4>
			<h4> +55 11 9******** <h4>
	</div>
		<div class="single-service">
			<div class="icon-area">
				<i class="fas fa-user"></i>
			</div>
			<h2>Cauã Oliveira</h2>
			<h4> EMAIL: ***@gmail.com <h4>
			<h4> +55 11 9******** <h4>

	</div>
		<div class="single-service">
			<div class="icon-area">
				<i class="fas fa-user"></i>
			</div>
			<h2>Caio Sant'Ana</h2>
			<h4> EMAIL: ***@gmail.com <h4>
			<h4> +55 11 9******** <h4>
         </div>
         
     </div>
</section>
<section class="serviços-area" id="serviços">
	<h3 class="header-text">Advogados</h3>
	<p>  </p>
	<div class="content-area"> 

		<div class="single-service">
			<div class="icon-area">
				<i class="fas fa-user"></i>
			</div>
			<h2>João Victor Silveira</h2>
			<h4> EMAIL: ***@gmail.com <h4>
			<h4> +55 11 9******** <h4>

	</div>
		<div class="single-service">
			<div class="icon-area">
				<i class="fas fa-user"></i>
			</div>
			<h2>Cauã Oliveira</h2>
			<h4> EMAIL: ***@gmail.com <h4>
			<h4> +55 11 9******** <h4>
	</div>
		<div class="single-service">
			<div class="icon-area">
				<i class="fas fa-user"></i>
			</div>
			<h2>Caio Sant'Ana</h2>
			<h4> EMAIL: ***@gmail.com <h4>
			<h4> +55 11 9******** <h4>
         </div>
         
     </div>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
</section>
<section class="work-area" id="work">
	<h3 class="header-text">Entenda</h3>
	<br>
	<div class="contencao">
		<div id="imageBg"></div>
		<div class="anterior" onclick="anterior()"></div>
		<div class="proximo" onclick="proximo()"></div>
		

	</div>
	<br>
	<ul id="botoes">
		<li></li>
		<li></li>
	</ul>
	  <script type ="text/javascript" src="home.js"></script>

	 </section>
		 <section class="serviços-area" id="contato">
	<h3 class="header-text">Contato</h3>
	<p>  </p>
	<div class="content-area"> 

		<div class="single-service">
			<div class="icon-area">
				<a href="https://instagram.com/system.help.emp?igshid=4h189xh87qff"><i class="fa fa-instagram"></i></a>
			</div>
			<h2>Instagram</h2>
	</div>
		<div class="single-service">
			<div class="icon-area">
				<a href="https://www.linkedin.com/in/system-help-7616571b5"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<h2>Linkedin</h2>

	</div>
		<div class="single-service">
			<div class="icon-area">
				<a href="https://facebook.com/"><i class="fab fa-facebook-square"></i> </a>
			</div>
			<h2>Facebook</h2>
         </div>
     </div>
</section>
	 <footer>
	 	<p> @CopyRight Todos Direitos Reservados <a href="#">SYSHELP</a></p>
	 </footer>
</body>
</html>
