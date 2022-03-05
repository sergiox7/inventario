 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Gestión recetas</h1>
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
			<div class="table-responsive">			
 		<!-- table -->
				<table class="table table-hover table-sm table-bordered">
				  <thead class="table-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">RECETA</th>
				      <th scope="col">INGREDIENTES</th>
				      <th scope="col">PRESENTACION</th>
				      <th scope="col">DETALLES</th>
				      <th scope="col">STOCK</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 

				  	$datos = array('Pizza con piña','Cheesecake con fresas','Chilaquiles Norteños', 'Crepas de cajeta', 'Sandwich pollo', 'Dona Chocolate Carlos V');


				  	for ($i=0; $i <6 ; $i++) { ?>

				    <tr>
				      <th scope="row"><?php echo($i+1) ?></th>
				      <td><?php echo($datos[$i]) ?></td>
				      <td><?php echo(random_int(6, 18)) ?></td>
				      <td><?php echo(random_int(100, 699).' grs') ?></td>
				      <td><a href="#">Ver mas </a></td>
				      <td><?php echo(random_int(20, 45).' u') ?></td>
				      <td>
				      	
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-trash"></i></button>

				      </td>
				    </tr> 
				  	<?php
				  	}

				  	?>

				  </tbody>
				</table>
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