<?php
	session_start();

?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Tienda online</title>
		<meta name="theme-color" content="#ff6431">
			<link rel="shortcut icon" href="favicon.png" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css" >
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript"  src="js/jquery.js"></script>
	<script type="text/javascript" src="js/cargarModulos.js"></script>
	<script type="text/javascript" src="js/modificar.js"></script>
	<script type="text/javascript"  src="js/materialize.js"></script>
        <script type="text/javascript" src="js/perfil.js"></script>
	</head>
	<body class="animated fadeIn">

			<!--Inicio de la barra de navegacion-->
	<?php
	if (isset($_SESSION['Usuario'])) {
		$arreglo=$_SESSION['Usuario'];
		$usu=$arreglo[0]['Nombre'];	
	?>
			<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper">
					<a href="index.php" id="Logo" class="brand-logo left animated fadeIn">Mercadona</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
					<ul  id="enlaces_menu" class="hide-on-med-and-down">
						<li><a href="index.php"><h5>Administración</h5></a></li>
						<ul id="" class="hide-on-med-and-down right">	
							<li><a href="#" id="add">Registrar Administrador</a></li>
							<li><a href="admin/cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
						</ul>		
					</ul>

					<ul class="side-nav" id="mobile-demo">
						<li><a href="index.php">Administración</a></li>
						<li><a href="#" id="add1">Registrar Administrador</a></li>
						<li><a href="admin/cerrar.php" id="BotonLogin">Cerrar sesión</a></li>

					</ul>
				</div>		
			</nav>	
		</div>
		<script type="text/javascript">$(".button-collapse").sideNav();</script>
		<!-- Fin de la barra de navegacion-->
		<br>

		<div class="container">
			<div class="row" id="resultado">
			
<?php
		if (isset($_GET['Datos'])) {
			echo "<div class='col s12 center'><h5 class='red-text'>Datos No Validos</h5></div>";
		}
		if (isset($_GET['Formato'])) {
			echo "<div class='col s12 center'><h5>Formato no valido</h5></div>";
		}
		if (isset($_GET['Bien'])) {
			echo "<div class='col s12 green-text center'><h5>Se guardo el producto</h5></div>";
		}

	?>
				<div class="col s12 m4 center" id="pedidos">			
						<div class="card-panel grey lighten-2 hoverable">
							<span class="black-text">
								<img src="img/document.png" >
								<h5><p>Pedidos</p></h5>
							</span>
						</div>  	
				</div>
				<div class="col s12 m4 center" id="registrar">		
						<div class="card-panel grey lighten-2 hoverable">
							<span class="black-text">
								<img src="img/plus.png" >
								<h5><p>Registrar</p></h5>
							</span>
						</div>   	
				</div>
				<div class="col s12 m4 center" id="editar">		
						<div class="card-panel grey lighten-2 hoverable">
							<span class="black-text">
								<img src="img/edit.png" >
								<h5><p>Editar</p></h5>
							</span>
						</div>  	
				</div>
			</div>
		</div>
		<?php
					}
					else
					{
						?>
					<div class="navbar-fixed">
					<nav>
					<div class="nav-wrapper">
					<?php	
						if (isset($_SESSION['Comprador'])) {
							$arreglo=$_SESSION['Comprador'];
							$usu=$arreglo[0]['Nombre'];
                                                        $cor=$arreglo[0]['Correo'];
                                                        $app=$arreglo[0]['Apellido'];
                                                        $apm=$arreglo[0]['Apm'];
                                                        $pas=$arreglo[0]['Pass'];
                                                        $use=$arreglo[0]['Usu'];
					?>

					<a href="index.php" id="Logo" class="brand-logo left" title="Inicio">Mercadona</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Cursos</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="img/carrito.png"></a></li>
								<li><a href="modal1" class="waves-effect waves-light modal-trigger" id="BotonSignUp" ><?php echo $usu; ?></a></li>
								<li><a href="cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="carrito/index.php" id="BotonCarrito"><img height="50px" src="img/carrito.png"></a>
							<li><a href="#modal1" class="waves-effect waves-light modal-trigger" id="BotonSignUp" ><?php echo $usu; ?></a></li>
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>		
							<li><a href="ofertas/index.php">Ofertas</a></li>	
							<li><a href="tutoriales/index.php">Tutoriales</a></li>
							<li><a href="cerrar.php" id="BotonLogin">Cerrar de sesión</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>

					<?php
						}else{ ?>
						<a href="index.php" id="Logo" class="brand-logo left" title="Inicio">Mercadona</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="img/carrito.png"></a></li>
								<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="carrito/index.php" id="BotonCarrito"><img height="50px" src="img/carrito.png"></a>	
							<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>		
							<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>	
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>	
							<li><a href="tutoriales/index.php">Tutoriales</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>
					<?php
						}
					?>	
					<!-- Fin de la barra de navegacion-->
			<noscript>
				<div class="container">
					<center class="animated pulse infinite">
				<h5><p>ATENCIÓN</p></h5>
				<font color="red"><h5 class="red-text"><p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. 
				Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p></h5></font>
				</center>
				</div>
			</noscript>
			<!--  Inicio del  slide -->
			<div>
				<div class="slider">
					<ul class="slides">
						<li>
							<img src="../Carrito-de-compras-master/img/1.jpg"> 
							<div class="caption center-align">
								<h3 class="animated flip">Todo lo que buscas</h3>
								<h5 class="light grey-text text-lighten-3 ani">Mercadona</h5>
								<a class="waves-effect waves-light btn animated bounceIn" href="../Carrito-de-compras-master/tienda.php">Comprar</a>
							</div>
						</li>
						<li>
							<img src="../Carrito-de-compras-master/img/3.jpg"> 
							<div class="caption left-align">
								<h3>Consigue tus productos.</h3>
								<h5 class="light grey-text text-lighten-3">Productos de calidad en Mercadona</h5>
							</div>
						</li>
						<li>
							<img src="../Carrito-de-compras-master/img/2.jpg"> 
							<div class="caption right-align">
								<h3>Descuentos fabulosos</h3>
								<h5 class="light grey-text text-lighten-3">Descubre todo lo que tenemos</h5>
							</div>
						</li>
						<li>
							<img src="../Carrito-de-compras-master/img/5.jpg"> 
							<div class="caption left-align">
								<h3 class="white-text">Compra lo que requieras</h3>
								<h5 class="light white-text text-lighten-3">Cuida el planeta</h5>
							</div>
						</li>
					</ul>
				</div>	
			</div>
			<script type="text/javascript">

				$(document).ready(function(){
					$('.slider').slider({full_width: true});
				});
			</script>

<!-- Fin del slide -->


<!--Perfil-->

			<div id="modal1" class="modal">
				<div class="modal-content">
					<h5 class="center">Perfil</h5>
					<div class="col s12 m16 l16">
						<div class="center">
							<img src="img/profile.png" class="circle" width="150px">
							<h6 class="grey-text">Correo: <?php echo $cor; ?></h6>
							<hr>
						</div>
						<div id="datos" class="col s12 m12 l12">
							<div class="col s6 m6 l6  left" >
								<h6 class="grey-text">Nombre:</h6>
								<h5><?php echo $usu; ?></h5>
								<h6 class="grey-text">Apellido Paterno: </h6>
								<h5><?php echo $app; ?></h5>
								<h6 class="grey-text">Apellido Materno: </h6>
								<h5><?php echo $apm; ?></h5>
								<h6 class="grey-text">Nombre usuario: </h6>
								<h5><?php echo $use; ?></h5>
							</div>
							<div class="col s12 m12 l12 right">
								<input type="submit" name="" value="Editar perfil" class="waves-effect waves-light btn green"> -->
								<br><br>
								<input type="submit" name="" value="Eliminar perfil" class="delete waves-effect waves-light btn red" data-nombre="<?php echo $arreglo[0]['Nombre'];?>">-->
								<br>
								<br>
							<input type="submit" name="" value="Cambiar contraseña" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text"> -->
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function(){
			    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal-trigger').leanModal();});
			</script>

<!--PERFIL -->

<!--Inicio contenido -->
			<div id="contenido">
				<div id="servicios" class="col s12 m12 l12">
					<div class="row center">
						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/carro.png" class="responsive-img animated bounceInLeft">
							<br>Compra
						</div>
						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/tarjeta.png" class="responsive-img animated bounceInLeft">
							<br>
							Paga
						</div>

						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/camion.png" class="responsive-img animated bounceInLeft">
							<br>
							Espera
						</div>	
						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/buzon.png" class="responsive-img animated bounceInLeft">
							<br>
							Disfruta
						</div>		
					</div>	
				</div>
				<div id="productos">
					<div class="container">
						<div class="row">
							<div id="separador" class="col s12 m12 l12"></div>
							<div id="ofertas" class="col s6  m6 l6  left">
								Productos
							</div>
							<div id="masofertas" class="col s6  m6 l6 right">
								<a href="ofertas/index.php">Todas los productos</a>
							</div>
							<div class="row">
								<!--Proucto 1-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../Carrito-de-compras-master/img/producto/2.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Aceite vegetal<i class="material-icons right"></i></span>
											<p><a href="carrito/index.php?id=6"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Aceite vegetal<i class="material-icons right"></i></span>
											<p>Precio: $25.00</p>
											<p>Marca: 123</p>
											<p>Categoría: vegetal</p>
							<p><a href="carrito/index.php?id=6"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Proucto 2-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../Carrito-de-compras-master/img/producto/Salvo.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Lavatrastes<i class="material-icons right"></i></span>
											<p><a href="carrito/index.php?id=12"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Lavatrastes<i class="material-icons right"></i></span>
											<p>Precio: $30.00</p>
											<p>Marca: Salvo</p>
											<p>Categoría: Limpieza </p>
							<p><a href="carrito/index.php?id=12"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Proucto 3-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../Carrito-de-compras-master/img/producto/4.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Papel higienico<i class="material-icons right"></i></span>
											<p><a href="carrito/index.php?id=13"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Papel higienico<i class="material-icons right"></i></span>
											<p>Precio: $32.50</p>
											<p>Marca: Petalo</p>
											<p>Categoría: Higiene</p>
							<p><a href="carrito/index.php?id=13"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Proucto 4-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../Carrito-de-compras-master/img/producto/gel.jpeg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Gel<i class="material-icons right"></i></span>
											<p><a href="carrito/index.php?id=14"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Gel Ego<i class="material-icons right"></i></span>
											<p>Precio: $10.00</p>
											<p>Marca: Ego</p>
											<p>Categoría: Belleza</p>
							<p><a href="carrito/index.php?id=14"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Fin productos -->
							</div>
							<h4>¡Compra ahora! <font size="5" class="right"><a class="waves-effect waves-light btn-large" href="../Carrito-de-compras-master/tienda.php">¡Comprar!</a></font></h4>
							<br>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Fin contenido -->


		<!-- Footer -->



		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l4 m6 s6">
						<h class="white-text"><a href="index.php"><h1 class="white-text">Mercadona</h1></a></h>
							<h6 class="white-text">Siguenos en:</h6>
							<br>
							<a class="grey-text text-lighten-3" href="https://www.facebook.com/enealcubon3"><img src="icons/fb.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://twitter.com/enealcubon3"><img src="icons/tw.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://www.instagram.com/enealcubon3/"><img src="icons/ig.png" height="64px"></a>				
					</div>
					<div class="col l4 m6 s6">
					<br>
				 <h5 class="white-text">Más</h5>
				 <br>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="aviso.php">Aviso de privacidad</a></li>
                  <li><a class="grey-text text-lighten-3" href="aviso.php">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="empresa/index.php">Empresa</a></li>
                  <li><a class="grey-text text-lighten-3" href="terminos.php">Terminos de uso</a></li>
                </ul>
					</div>
					<div class="col l4 m12 s12">
						<form name="contacto" action="correo.php" method="POST">
							<p class="grey-text text-lighten-4"><h4 class="white-text">Contacto: </h4></p>
							<font color="white"><input type="text" name="name" id="name" placeholder="Nombre"></font>
							<font color="white"><input type="text" name="email" id="email" placeholder="Correo"></font>
							<font color="white"><input type="text" name="subject" id="subject" placeholder="Asunto"></font>
							<font color="white"><textarea name="comments" rows="10" cols="40" placeholder="Escribe tus comentarios..."></textarea></font>
							<br>
							<br>
							<button class="btn waves-effect waves-light" type="submit" name="action" id="Enviar" >Enviar
								<i class="material-icons right">send</i>
							</button>
						</form>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					© 2020 Packet Tracer
					<a class="grey-text text-lighten-4 right" href="index.php">Inicio</a>
				</div>
			</div>
		</footer>

		<!-- Footer -->
<?php

	}

?>
	<script type="text/javascript" async src="js/admin.js"></script>
	<script src="dist/sweetalert.min.js"></script> 
	<noscript><h2 class="center red-text animated pulse infinite">Por favor activa javascript</h2></noscript>
	</body>
	</html>




	