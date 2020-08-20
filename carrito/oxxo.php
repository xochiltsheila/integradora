<?php
session_start();
include '../conexion.php';
if (isset($_SESSION['carrito'])) {
	if(isset($_GET['id'])){
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		for ($i=0; $i < count($arreglo); $i++) { 
			if ($arreglo[$i]['Id']==$_GET['id']) {
				$encontro=true;
				$numero=$i;
			}
		}
		if($encontro==true){
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['carrito']=$arreglo;
		}
		else{

			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from producto where idProd =".$_GET['id'])or die(mysql_error());
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['desProd'];
				$precio=$f['preProd'];
				$imagen=$f['imgProd'];
			}
			$datosNuevos=array('Id'=>$_GET['id'],
				'Nombre'=>$nombre,
				'Precio'=>$precio,
				'Imagen'=>$imagen,
				'Cantidad'=>1);
			array_push($arreglo, $datosNuevos);
			$_SESSION['carrito']=$arreglo;
		}
	}
}	
else{
	if (isset($_GET['id'])) {
		$nombre="";
		$precio=0;
		$imagen="";
		$re=mysql_query("select * from producto where idProd =".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
			$nombre=$f['desProd'];
			$precio=$f['preProd'];
			$imagen=$f['imgProd'];
		}
		$arreglo[]=array('Id'=>$_GET['id'],
			'Nombre'=>$nombre,
			'Precio'=>$precio,
			'Imagen'=>$imagen,
			'Cantidad'=>1);
		$_SESSION['carrito']=$arreglo;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" >
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/can.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>

</head>
<body class="animated fadeIn">
	<!--Inicio de la barra de navegacion-->
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

					<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
					<ul  id="enlaces_menu" class="hide-on-med-and-down">
						<li><a href="../catalogo/index.php">Tienda</a></li>
						<li><a href="../ofertas/index.php">Ofertas</a></li>
						<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
						<ul id="" class="hide-on-med-and-down right">	
							<li><a href="index.php" id="BotonCarrito" title="Ver Carrito de Compras"></a></li>
							<li><a href="#modal1" class="waves-effect waves-light modal-trigger" id="BotonSignUp" ><?php echo $usu; ?></a></li>
							<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
						</ul>		
					</ul>

					<ul class="side-nav" id="mobile-demo">
						<a href="index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>
						<li><a href="#modal1" class="waves-effect waves-light modal-trigger" id="BotonSignUp" ><?php echo $usu; ?></a></li>
						<li><a href="../catalogo/index.php">Tienda</a></li>
						<li><a href="../ofertas/index.php">Ofertas</a></li>	
						<li><a href="../tutoriales/index.php">Tutoriales</a></li>
						<li><a href="../cerrar.php" id="BotonLogin">Cerrar de sesión</a></li>
					</ul>

				</div>		
			</nav>	
		</div>
		<script type="text/javascript">$(".button-collapse").sideNav();</script>

		<?php
	}else{ ?>
	<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
	<ul  id="enlaces_menu" class="hide-on-med-and-down">
		<li><a href="../catalogo/index.php">Tienda</a></li>
		<li><a href="../ofertas/index.php">Ofertas</a></li>
		<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
		<ul id="" class="hide-on-med-and-down right">	
			<li><a href="index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
			<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>
			<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>				
		</ul>		
	</ul>

	<ul class="side-nav" id="mobile-demo">
		<a href="index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>	
		<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>		
		<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>	
		<li><a href="../catalogo/index.php">Tienda</a></li>
		<li><a href="../ofertas/index.php">Ofertas</a></li>	
		<li><a href="../tutoriales/index.php">Tutoriales</a></li>
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



	<!--Perfil-->

	<div id="modal1" class="modal">
		<div class="modal-content">
			<h5 class="center">Perfil</h5>
			<div class="col s12 m16 l16">
				<div class="center">
					<img src="../img/profile.png" class="circle" width="150px">
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
						<input type="submit" name="" value="Editar perfil" class="waves-effect waves-light btn green">
						<br><br>
						<input type="submit" name="" value="Eliminar perfil" class="waves-effect waves-light btn red">
						<br>
						<br>
						<input type="submit" name="" value="Cambiar contraseña" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text">
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


			<!-- Productos carrito -->


			<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
				$datos=$_SESSION['carrito'];

				for ($i=0; $i < count($datos); $i++) { 
					?>



					<?php
					$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
				}
			}
			else{
				echo '
				<div>
				<center><h4 class="grey-text">No hay nada que pagar</h4></center>
					<center><h5 class="grey-text">Ve a la tienda para agregar productos :)</h5></center>
					<center><img src="../img/carritovacio.png" width="25%" style="opacity: 0.5;"></center>
					<center><a href="../catalogo/index.php" class="waves-effect waves-light btn-large">Regresar a la tienda</a></center>
				</div>

				';
			}



			?>


			<?php
			if ($total!=0) {

				?>
				<!-- DAtos de compra oxxo -->
				<h5 class="center grey-text">Paga en cientos de establecimientos de todo México</h5>
				<h4 class="center red-text">Recuerda dar clic en "continuar comprando" para terminar tu compra</h4>
				<center><img src="https://darkarcompanystore.com/wp-content/uploads/2014/07/07.png" class="responsive-img"></center>
				<form action="https://compropago.com/comprobante" method="post">
					<input type="hidden" name="public_key" value="pk_live_6902141283784293c6">
					<input type="hidden" name="product_price" value="<?php echo $total ?>">
					<input type="hidden" name="product_name" value="Compra">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="customer_name" value="<?php echo $usu; ?>">
					<input type="hidden" name="customer_email" value="<?php echo $cor; ?>">
					<input type="hidden" name="customer_phone" value="">
					<input type="hidden" name="image_url" value="">
					<input type="hidden" name="success_url" value="http://ncubico.com/carrito/direc.php">
					<input type="hidden" name="failed_url" value="">
					<center><input type="submit" class="waves-effect btn-large center" name="submit" value="Pagar en efectivo" alt="Pagar con ComproPago"></center>
				</form>
				<!-- Datos de compra oxxo -->
				<?php
			}
			?>
		</div>
	</div>



	<!-- Productos carrito -->

</body>
</html>