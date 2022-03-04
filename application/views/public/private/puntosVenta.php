 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Soy un punto de venta</h1>
	</div>
	

	<div class="pt-2">
		<div class="row m-2">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-angle-left"></i> Volver atras</li>
				</ol>
			</nav>
		</div>
		<div class="row m-2">
			<div class="row">
				<div class="col-4">
					<div class="input-group">
						<input type="text" class="form-control form-control-sm">
						<div class="input-group-prepend">
							<button class="btn btn-outline-primary btn-sm" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
						</div>
						
					</div>
				</div>
				<div class="col">
					<!-- <button class="form-control btn btn-primary btn-sm" type="button">CREAR RECETA <i class="fa-solid fa-plus"></i></button> -->
				</div>
				<div class="col">
					
				</div>
				<div class="col">
					<button class="form-control btn btn-primary btn-sm" type="button">AGREGAR <i class="fa-solid fa-chart-simple"></i></button>
					<div class="row mt-2"></div>
					<!-- <button class="form-control btn btn-outline-primary btn-sm" type="button">EXPORTAR A EXCEL <i class="fa-solid fa-file-export"></i></button> -->
				</div>
			</div>
		</div>


		<div class="row m-2">
			<div class="d-flex align-content-center flex-wrap">			
 		<!-- table -->
				 
				  	<?php 

				  	$datos = array('TAQ Norte','TAQ Sur','TAQ Este');


				  	for ($i=0; $i <3 ; $i++) { ?>

						<div class="card col-6 p-2">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						    <a href="#" class="btn btn-primary">Button</a>
						  </div>
						</div>

				  	<?php
				  	}

				  	?> 
 		<!-- ./table -->
 			</div>
		</div>


	</div>

	<div class="d-flex justify-content-around m-2">
		<a href="http://localhost/inventario/">Login</a>
		<a href="http://localhost/inventario/controlador/puntosVenta">Puntos de venta</a>
		<a href="http://localhost/inventario/controlador/insumos">Insumos</a>
		<a href="http://localhost/inventario/controlador/recetas">Recetas</a>
		<a href="http://localhost/inventario/controlador/productos">productos</a>
		<a href="http://localhost/inventario/controlador/reportes">Reportes</a>
	</div>
	

</div>