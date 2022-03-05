 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Gestión puntos de venta</h1>
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

						<div class="card col-md-6 col-sm-12 p-2">
							<div class="card-header text-white bg-secondary">INVENTARIO PUNTO DE VENTA <?php echo($i+1) ?></div>
						  <div class="card-body">
						    
						    <div class="d-flex flex-row justify-content-between">
						    	<div>
						    		<h5 class="card-title"><?php echo($datos[$i]) ?></h5>
						    	</div>
						    	<div class="d-flex flex-column col-6">
						    		<div class="d-flex justify-content-end">
									    <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa-solid fa-pen-to-square"></i></button>
										<button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa-solid fa-trash"></i></button>
						    		</div>
						    		<a href="#" class="btn btn-outline-primary m-1">Opciones</a>
						    	</div>
						    </div>
						    
						  </div>
						</div>

				  	<?php
				  	}

				  	?> 
 		<!-- ./table -->
 			</div>
		</div>


	</div>

<!-- 	<div class="d-flex justify-content-around m-2">
		<a href="http://localhost/inventario/">Login</a>
		<a href="http://localhost/inventario/controlador/puntosVenta">Puntos de venta</a>
		<a href="http://localhost/inventario/controlador/insumos">Insumos</a>
		<a href="http://localhost/inventario/controlador/recetas">Recetas</a>
		<a href="http://localhost/inventario/controlador/productos">productos</a>
		<a href="http://localhost/inventario/controlador/reportes">Reportes</a>
	</div> -->
	

</div>