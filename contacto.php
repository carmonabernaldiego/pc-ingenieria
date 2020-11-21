<!DOCTYPE html>
<!--
	Contacto | Design by Diego Carmona Bernal
	Updated: April 22, 2016. Version: 1.2
-->
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<title>Contacto - PC Ingeniería</title>
	<link rel="shortcut icon" href="images/pc-ingenieria.ico" type="image/ico">
	<link rel="stylesheet" href="css/style.css" media="screen, projection" type="text/css" />
	<meta name="description" content="En PC Ingeniería queremos atenderle y servirle apoyandole con asesorías técnicas para cualquier proyecto o idea que se le presente en el área de computación y comunicaciones, desarrollo de software, instalación de redes, etc... Le ayudamos a solucionar los problemas con su computadora ahorrando tiempo y dinero. Contamos con una gran variedad de accesorios y consumibles." />
	<meta name="keywords" content="PC Ingeniería, Quienes Somos, Servicios, Calidad, Desarrollo de Software, Reparación de Computadoras, Reparación de Laptops, Venta de Software, Punto de Venta" />
	<script type="text/javascript">
		function justNumbers(e)
		{
			var keynum = window.event ? window.event.keyCode : e.which;

			if ((keynum == 8) || (keynum == 46))
			{
				return true;
			}

			return /\d/.test(String.fromCharCode(keynum));
		}

		function reload()
		{
			setTimeout('document.location.reload()',20000);
		}
	</script>
</head>
<body class="secondary">
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
					<li class="inicio"><a href="/">Inicio</a></li>
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
					<li class="contacto active last"><a href="contacto">Contacto</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<section class="section-about">
		<div class="wrapper">
			<?php
				error_reporting(0);

				session_start();

				if (!empty($_SESSION['message']) == "si")
				{
					echo '
							<div class="message">
								<h1>Gracias por tus Comentarios, hemos recibido tu mensaje, en unos instantes nos comunicaremos contigo.<br><br>Trabajamos duro para ofrecerle el mejor servicio.</h1>
							</div>
							<script language="javascript">
								reload();
							</script>
					';
				}

				$_SESSION['message'] = "";
			?>
			<h1>Contáctanos</h1>
			<span class="line"></span>
			<div class="section-form-about">
				<form class="form-contact-about" action="mail" method="POST">
					<div class="first">
						<div class="wrap-input">
							<label id="lseleccione">¿Motivo por el que nos contacta?</label>
							<select id="selectmotivo" name="selectmotivo" required>
								<option value="">Seleccione un Motivo de Contacto</option>
								<option value="Comentario">Comentario</option>
								<option value="Queja">Quejas</option>
								<option value="Pregunta">Pregunta</option>
								<option value="Sugerencia">Sugerencia</option>
							</select>
						</div>
						<div class="wrap-input">
							<label id="lmensaje">Su Mensaje</label>
							<textarea id="mensaje" name="mensaje" rows="" cols="" required><?php echo $_REQUEST['mensaje']; ?></textarea>
						</div>
						<div class="wrap-input">
							<label id="lnombre">Nombre</label>
							<input type="text" id="nombre" name="nombre" placeholder="Nombre" required autocomplete="off"/>
						</div>
						<div class="wrap-input">
							<label id="lapellido">Apellido</label>
							<input type="text" id="apellido" name="apellido" placeholder="Apellido" required autocomplete="off"/>
						</div>
					</div>
					<h2>Gracias. ¿Cómo le gustaría que nos pongamos en contacto con usted?</h2>
					<div class="last">
						<div class="wrap-input">
							<label id="lcorreo">Correo Electrónico</label>
							<input type="email" id="correo" name="correo" value="<?php echo $_REQUEST['correo']; ?>" placeholder="Correo Electronico" required autocomplete="off"/>
						</div>
						<div class="wrap-input">
							<label id="ltelefono">Telefono</label>
							<div class="wrap-numero">
								<input type="text" id="codigo" name="codigo" maxlength="2" onkeypress="return justNumbers(event);" value="52" required autocomplete="off"/>
								<input type="text" id="telefono" name="telefono" maxlength="10" onkeypress="return justNumbers(event);" placeholder="Número de Tel" required autocomplete="off"/>
							</div>
						</div>
						<div class="wrap-input">
							<label id="lentiendo">
								<input type="checkbox" id="acepto" name="acepto" value="1" required>
								Entiendo que PCIngeniería protegerá mis datos como lo dice en el Aviso de Privacidad
							</label>
							<button id="btnenviar" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="aside-about">
				<div class="info">
					<ul class="list-aside-about">
						<li>
							<h2>Domicilio</h2>
							<p>2 Av. Sur Pte N° 577, Col Centro, C.P. 29000, Tuxtla Gutierréz, Chiapas.</p>
						</li>
						<li>
							<h2>Telefonos</h2>
							<p>(961) 212 - 96 - 42</p>
						</li>
						<li>
							<h2>Correo Electrónico</h2>
							<p>ventas@pcingenieria.com.mx servicio@pcingenieria.com.mx</p>
						</li>
					</ul>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15281.954158268301!2d-93.1206071!3d16.7523527!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e0d88faaf400e1b!2sPC+Ingenier%C3%ADa!5e0!3m2!1ses-419!2smx!4v1457053147752" width="300" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
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