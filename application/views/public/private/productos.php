 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Gestión productos</h1>
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
					<!-- <button class="form-control btn btn-primary btn-sm" type="button">CREAR PRODUCTO <i class="fa-solid fa-plus"></i></button> -->
				</div>
				<div class="col">
					<button class="form-control btn btn-primary btn-sm" type="button">HISTORIAL <i class="fa-solid fa-chart-simple"></i></button>
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
				      <th scope="col">NOMBRE</th>
				      <th scope="col">UNIDAD DE MEDIDA</th>
				      <th scope="col">PROVEEDOR</th>
				      <th scope="col">ESTADO</th>
				      <th scope="col">DETALLES</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 

				  	$datos = array('Coca-cola','Sabritas','Pastelito Marinela Chocoroles 4 pzas.', 'Pastelito Marinela Chocoroles 4 pzas.', 'Pastelito Marinela Gansito 50 g.', 'Chocolate Carlos V');
 				  	$marcas = array('Coca-Cola Company','PepsiCo','Grupo Bimbo');

				  	for ($i=0; $i <6 ; $i++) { ?>

				    <tr>
				      <th scope="row"><?php echo($i+1) ?></th>
				      <td><?php echo($datos[$i]) ?></td>
				      <td>Unidades</td>
				      <td><?php $temp = array_rand($marcas); echo($marcas[$temp]) ?></td>
				      <td>Activo</td>
				      <td><a href="#">Ver mas </a></td>
				      <td>
				      	
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-trash"></i></button>
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-dollar-sign"></i></button>
						<button type="button" class="btn btn-outline-dark btn-sm">Merma</button>
						<button type="button" class="btn btn-outline-dark btn-sm">Historial Merma</button>

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