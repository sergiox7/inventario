 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Soy un reporte</h1>
	</div>
	

	<div class="pt-2">
		<div class="row m-2">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-angle-left"></i> Volver atrás</li>
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
					<!-- <button class="form-control btn btn-primary btn-sm" type="button">CREAR INSUMO <i class="fa-solid fa-plus"></i></button> -->
				</div>
				<div class="col">
					<button class="form-control btn btn-primary btn-sm" type="button">AGREGAR</button>
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
				      <th scope="col">PRODUCTOS</th>
				      <th scope="col">FECHA INICIAL</th>
				      <th scope="col">FECHA FINAL</th>
				      <th scope="col">DETALLE</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 

				  	$datos = array('Azucar','Harina de trigo','Harina de maiz', 'Aceite', 'Pollo', 'Chocolate');
				  	$marcas = array('Mars','Kraft','General Mills');
					$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

				  	for ($i=0; $i <6 ; $i++) { ?>

				    <tr>
				      <th scope="row"><?php echo($i+1) ?></th>
				      <td><?php echo($datos[$i]) ?></td>
				      <td><?php echo $i+1 ?> de <?php echo $meses[$i+2] ?> del 2022</td>
				      <td><?php echo $i+2 ?> de <?php echo $meses[$i+3] ?> del 2022</td>
				      <td><a href="#">Ver más </a></td>
				      <!--random_int(1, 31)-->
				      <td>
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
						<button type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-trash"></i></button>
						<button type="button" class="btn btn-outline-dark btn-sm">Gráficar</button>
						<button type="button" class="btn btn-outline-dark btn-sm">Exportar</button>
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

	<div class="d-flex justify-content-around m-2">
		<a href="http://localhost/inventario/">Login</a>
		<a href="http://localhost/inventario/controlador/puntosVenta">Puntos de venta</a>
		<a href="http://localhost/inventario/controlador/insumos">Insumos</a>
		<a href="http://localhost/inventario/controlador/recetas">Recetas</a>
		<a href="http://localhost/inventario/controlador/productos">productos</a>
		<a href="http://localhost/inventario/controlador/reportes">Reportes</a>
	</div>
	

</div>