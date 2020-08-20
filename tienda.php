<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicatalogo.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css" >
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
					<nav>
					<div class="nav-wrapper">
					<?php	
						if (isset($_SESSION['Comprador'])) {
							$arreglo=$_SESSION['Comprador'];

							$usu=$arreglo[0]['Nombre'];
					?>

					<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">Mercadona</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="../carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../Carrito-de-compras-master/img/carrito.png"></a></li>
								<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
								<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../Carrito-de-compras-master/img/carrito.png">></a>
							<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>
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
						<a href="index.php" id="Logo" class="brand-logo left" title="Inicio">Mercadona</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../Carrito-de-compras-master/tienda.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../Carrito-de-compras-master/img/carrito.png"></a></li>
								<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
						|	<a href="carrito/index.php" id="BotonCarrito"><img height="50px" src="../Carrito-de-compras-master/img/carrito.png"></a>	
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

			<div class="site-section">
				<div class="container">
					<div class="row-mb-5">
						<form class="col-md-12" method="pos">
						<div class="site-blocks-table">
							<table class="table table-bordered">
								<thead>
									<tr>
									<th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Productos</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-thumbnail">
											<!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
											</td>
											<td class="product-name">
												<h2 class="h5 text-black">Azúcar</h2>
											</td>
											<td>$10.00</td>
											<td>
												<div class="input-group mb-3" style="max-width: 120px;">
												<div class="input-group-prepend">
													<!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
												</div>
												<input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
												<div class="input-group-append">
													<!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
												</div>
												</div>
											</td>
											<td>$00.0</td>
											<td><a href="../Carrito-de-compras-master/tienda.php" class="btn btn-primary btn-sm">X</a></td>
									</tr>

									<tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Café</h2>
                    </td>
                    <td>$10.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                        <!--  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                         <!-- <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="../Carrito-de-compras-master/tienda.php" class="btn btn-primary btn-sm">X</a></td>
				  </tr>
				  <tr>
											<td class="product-thumbnail">
												<!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
											</td>
											<td class="product-name">
												<h2 class="h5 text-black">Arina</h2>
											</td>
											<td>$10.00 kg</td>
											<td>
												<div class="input-group mb-3" style="max-width: 120px;">
												<div class="input-group-prepend">
												<!--	<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
												</div>
												<input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
												<div class="input-group-append">
													<!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
												</div>
												</div>
											</td>
											<td>$0.0</td>
											<td><a href="../Carrito-de-compras-master/tienda.php" class="btn btn-primary btn-sm">X</a></td>
									</tr>
									<tr> 
                    <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Mayonesa</h2>
                    </td>
                    <td>$22.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                        <!--  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                         <!-- <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
				  </tr>
				  <tr> 
                    <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Mermelada</h2>
                    </td>
                    <td>$22.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                        <!--  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                        <!--  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
					  </div>
					  </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Huevo</h2>
                    </td>
                    <td>$30.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Pastas</h2>
                    </td>
                    <td>$06.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                         <!-- <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Aceitunas</h2>
                    </td>
                    <td>$20.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                         <!-- <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Frijoles enlatados</h2>
                    </td>
                    <td>$20.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                   <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Sardinas</h2>
                    </td>
                    <td>$20.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Atún en agua/aceite</h2>
                    </td>
                    <td>$15.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Chiles enlatados</h2>
                    </td>
                    <td>$13.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Vegetales en lata</h2>
                    </td>
                    <td>$14.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Leche condesada</h2>
                    </td>
                    <td>$18.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Leche deslactosada</h2>
                    </td>
                    <td>$18.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                         <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Leche en polvo</h2>
                    </td>
                    <td>$14.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Crema</h2>
                    </td>
                    <td>$13.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Yogurt</h2>
                    </td>
                    <td>$8.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Mantequilla</h2>
                    </td>
                    <td>$13.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <<!--button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Margarina</h2>
                    </td>
                    <td>$13.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Media crema</h2>
                    </td>
                    <td>$15.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                         <!-- <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Queso</h2>
                    </td>
                    <td>$0.0</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Toallas femeninas</h2>
                    </td>
                    <td>$20.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Rastrillos</h2>
                    </td>
                    <td>$10.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Papel higiénico</h2>
                    </td>
                    <td>$25.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">PAsta dental</h2>
                    </td>
                    <td>$25.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                     <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Gel</h2>
                    </td>
                    <td>$10.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Jabones corporales</h2>
                    </td>
                    <td>$16.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Suavizante</h2>
                    </td>
                    <td>$23.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <tr>
                  <tr>
                    <td class="product-thumbnail">
                      <!--<img src="images/cloth_1.jpg" alt="Image" class="img-fluid">-->
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Jabón de limpieza</h2>
                    </td>
                    <td>$27.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <!--<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>-->
                        </div>
                        <input type="text" class="form-control text-center" value="" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!--<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>-->
                        </div>
                      </div>

                    </td>
                    <td>$0.0</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
				  </tr>

				</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-6 pl-5">
	<div class="row justify-content-end">
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-12 text-right border-bottom mb-5">
				<h3 class="text-black h4 text-uppercase">Total de carrito</h3>
				</div>
			</div>
			<div class="row mb-3">
			<div class="col-md-6">
			<span class="text-black">Subtotal</span>
			</div>
			<div class="col-md-6 text-right">
			<strong class="text-black">$0.00</strong>
			</div>
			</div>
			<div class="row mb-5">
			<div class="col-md-6">
			<span class="text-black">Total</span>
			</div>
			<div class="col-md-6 text-right">
				<strong class="text-black">$0.00</strong>
			</div>
			</div>

			<div class="row">
			<div class="col-md-12">

      <a href="https://miguel-a12.github.io/PagosEnLinea/"><button class="btn btn-primary btn-lg py-3 btn-block">Pasar a pagar</button></a>
			</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


	
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
                  <li><a class="grey-text text-lighten-3" href="#!">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Empresa</a></li>
                  <li><a class="grey-text text-lighten-3" href="terminos.php">Términos de uso</a></li>
                </ul>
					</div>
					<div class="col l4 m12 s12">
						<form name="contacto" action="" method="POST">
							<p class="grey-text text-lighten-4"><h4 class="white-text">Contacto: </h4></p>
							<font color="white"><input type="text" name="" placeholder="Nombre"></font>
							<font color="white"><input type="text" name="" placeholder="Correo"></font>
							<font color="white"><input type="text" name="" placeholder="Asunto"></font>
							<font color="white"><textarea name="Mensaje" rows="10" cols="40" placeholder="Escribe tus comentarios..."></textarea></font>
							<br>
							<br>
							<button class="btn waves-effect waves-light" type="submit" name="action" id="Enviar">Enviar
								<i class="material-icons right">send</i>
							</button>
						</form>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					© 2016 Packet Tracer
					<a class="grey-text text-lighten-4 right" href="index.php">Inicio</a>
				</div>
			</div>
		</footer>

		<!-- Footer -->
	</body>
	</html>