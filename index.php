<?php
	$tip[0] = "Evita sobrecargar la batería, no uses tu equipo todo el tiempo conectado.";
	$tip[1] = "Cuando lleves tu equipo de un lugar a otro, recuerda apagarlo.";
	$tip[2] = "Protege tu equipo utilizando un regulador de voltaje.";
	$tip[3] = "Apaga tu equipo correctamente, así evitas perdida de información.";
	$tip[4] = "Instala un buen antivirus, mantén la seguridad de tu equipo al día.";
	$tip[5] = "Evita golpear tu equipo cuando este se congele.";
	$tip[6] = "Evita mantener tu equipo encendido por prolongadas horas.";
	$tip[7] = "Evita tener alimentos cerca de tu equipo.";
	$tip[8] = "Evita instalar Software basura, así tu equipo estará siempre al día.";
	$tip[9] = "Envía cada tres meses tu equipo a soporte técnico.";


	$rand1 = rand(1, 10);

	$rand2 = rand(1, 10);

	$rand3 = rand(1, 10);

	$j = 1;

	for ($i = 0; $i < $j ; $i++)
	{
		if ($rand2 == $rand1 or $rand2 == $rand3)
		{
			$rand2 = rand(1, 10);
			
			$j += 1;
		}
		else
		{
			break;
		}
	}

	$j = 1;

	for ($i = 0; $i < $j ; $i ++)
	{
		if ($rand3 == $rand1 or $rand3 == $rand2)
		{
			$rand3 = rand(1, 10);
			
			$j += 1;
		}
		else
		{
			break;
		}
	}
?>
<!DOCTYPE html>
<!--
	Home | Design by Diego Carmona Bernal
	Updated: April 22, 2016. Version: 1.2
-->
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<title>Inicio - PC Ingeniería</title>
	<link rel="shortcut icon" href="images/pc-ingenieria.ico" type="image/ico">
	<link rel="stylesheet" href="css/style.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="css/camera.css" id="camera-css" media="all" type="text/css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/camera.min.js"></script>
	<script>
		jQuery(function()
			{
				jQuery('#home-slider').camera(
				{
					thumbnails: false
				});
			});
	</script>
	<meta name="description" content="En PC Ingeniería queremos atenderle y servirle apoyandole con asesorías técnicas para cualquier proyecto o idea que se le presente en el área de computación y comunicaciones, desarrollo de software, instalación de redes, etc... Le ayudamos a solucionar los problemas con su computadora ahorrando tiempo y dinero. Contamos con una gran variedad de accesorios y consumibles." />
	<meta name="keywords" content="PC Ingeniería, Quienes Somos, Servicios, Calidad, Desarrollo de Software, Reparación de Computadoras, Reparación de Laptops, Venta de Software, Punto de Venta" />
</head>
<body class="main">
	<header class="header">
		<div class="header-top">
		</div>
		<div class="header-main">
			<div class="container wrapper">
				<div class="logo">
					<a href="/"><img src="images/pc-ingenieria.png" alt="PC INGENIERIA"></a>
				</div>
			</div>
		</div>
		<nav class="nav-main">
			<div class="container wrapper">
				<ul class="top-nav-main">
					<li class="inicio active"><a href="/">Inicio</a></li>
					<li class="quienes-somos"><a href="quienes-somos">Quiénes Somos</a></li>
					<li class="servicios"><a href="#">Servicios</a>
						<ul class="sub-nav-main">
							<li><a href="servicios-reparacion-laptops">Reparación de Laptops</a></li>
							<li><a href="servicios-punto-de-venta">Punto de Venta</a></li>
							<li><a href="servicios-seguridad">Seguridad</a></li>
							<li><a href="servicios-sistemas">Sistemas</a></li>
							<li><a href="servicios-sitios-web">Sitios Web</a></li>
						</ul>
					</li>
					<li class="contacto last"><a href="contacto">Contacto</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<section class="section-slider-aside">
		<div class="wrapper">
			<section class="home-slider">
				<div class="camera_wrap camera_grey_skin" id="home-slider">
					<div data-src="images/home-slider/servicios-en-reparacion.jpg">
					</div>
					<div data-src="images/home-slider/servicios-pc-ingenieria.jpg">
					</div>
					<div data-src="images/home-slider/servicios-en-desarrollo-de-software.jpg">
					</div>
					<div data-src="images/home-slider/servicios-en-todas-las-marcas.jpg">
					</div>
					<div data-src="images/home-slider/servicios-en-desarrollo-de-sitios-web.jpg">
					</div>
					<div data-src="images/home-slider/servicios-en-venta-de-equipos-y-accesorios.jpg">
					</div>
				</div>
			</section>
			<aside class="aside-tips-store">
				<div class="tips">
					<ul class="list">
						<li class="first">
							<h1>Tip #<?php echo $rand1; ?></h1>
							<p><?php echo $tip[$rand1 - 1]; ?></p>
						</li>
						<li>
							<h1>Tip #<?php echo $rand2; ?></h1>
							<p><?php echo $tip[$rand2 - 1]; ?></p>
						</li>
						<li>
							<h1>Tip #<?php echo $rand3; ?></h1>
							<p><?php echo $tip[$rand3 - 1]; ?></p>
						</li>
					</ul>
				</div>
				<div class="store-online">
					<span class="button">
						<a href="http://listado.mercadolibre.com.mx/_CustId_18810124" target="_blank">
							<span class="image">Tienda en Linea</span>
						</a>
					</span>
				</div>
			</aside>
		</div>
	</section>
	<section class="section-conozcanos">
		<div class="wrapper">
			<ul class="list">
				<li>
					<h1>Conózcanos</h1>
					<p>En PC Ingeniería queremos atenderle y servirle apoyandole con asesorías técnicas para cualquier proyecto o idea que se le presente en el área de computación y comunicaciones, desarrollo de software, instalación de redes, etc...</p>
					<p>Le ayudamos a solucionar los problemas con su computadora ahorrando tiempo y dinero. Contamos con una gran variedad de accesorios y consumibles.</p>
				</li>
				<li>
					<span class="circle-a">People</span>
				</li>
				<li>
					<span class="circle-b">Time</span>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-about-home">
		<div class="wrapper">
			<div class="article-about-home">
				<h1>Sobre Nosotros</h1>
				<span class="line"></span>
				<div class="text">
					<p>Somos una empresa que se ha comprometido en ofrecer a nuestros clientes el mejor servicio en todo el estado de Chiapas y de México, logrando así, el consolidarnos como un equipo humano eﬁcaz y de gran valor en donde unimos nuestra experiencia profesional y técnica, justamente para ofrecer soluciones reales para su empresa.</p>
					<p>Para PC Ingeniería, nos hemos comprometido con el elemento humano caliﬁcándolo de extraordinario. Las modernas instalaciones, los avances tecnológicos integrados a la labor diaria, y los numerosos esfuerzos que realizamos son posibles gracias al elemento humano que conforman nuestra empresa.</p>
					<p>Hoy existe la tarea de fomentar el desarrollo integral de los colaboradores. Cada uno de ellos es el ejemplo vivo de la misión que se persigue. En Ia medida en que predomine el compromiso con el entorno, se cumplirá la tarea en los próximos años y será el sentimiento reinante en nuestro clima organizacional.</p>
				</div>
				<div class="aside-services">
					<ul class="list">
						<li>Reballing Profesional</li>
						<li>Desarrollo de Software</li>
						<li>Mantenimiento a Equipos de Computo</li>
						<li>Desarrollo de Sitios Web</li>
						<li>Instalación de Redes</li>
						<li>Venta de Partes y Accesorios</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="top-footer">
			<div class="section-items">
				<div class="wrapper">
					<div class="items">
						<ul class="list">
							<li>
								<h1>Nuestras Oficinas</h1>
								<div class="group">
									<span class="icon-work">Work</span>
									<p>2 AV. Sur Poniente # 577</p>
									<p>Col. Centro, CP. 29000</p>
									<p>Tuxtla Gutierréz, Chiapas</p>
									<p>Tel. 961 212 96 42</p>
								</div>
							</li>
							<li>
								<h1>Acceso Rápido</h1>
								<ul class="nav-acceso-rapido">
									<li><a href="/">Inicio</a></li>
									<li><a href="quienes-somos">Quienés Somos</a></li>
									<li><a href="servicios-reparacion-laptops">Servicios</a></li>
									<li><a href="contacto">Contacto</a></li>
									<span class="circle-decoration"></span>
								</ul>
							</li>
							<li class="last">
								<h1>Contacto</h1>
								<form class="form-contact-home" action="contacto" method="POST">
									<input type="email" name="correo" placeholder="Correo Electronico" required autocomplete="off"/>
									<textarea name="mensaje" rows="4" cols="40" placeholder="Mensaje" required autocomplete="off"></textarea>
									<button type="submit">Enviar Mensaje</button>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="wrapper">
				<span>© Derechos Reservados | PC Ingeniería</span>
				<div class="logo">
					<a href="/"><img src="images/pc-ingenieria-black.png" alt="PC INGENIERIA"></a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>