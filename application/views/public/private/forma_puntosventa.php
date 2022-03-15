 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Detalle punto de venta</h1>
	</div>
	

	<div class="pt-2">
		<div class="row m-2">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page" onclick="window.history.back();"><i class="fa-solid fa-angle-left" ></i> Volver atras</li>
				</ol>
			</nav>
		</div>

		<div class="row m-2">
			<div class="card p-2">
				<div class="row">
					<div class="col-12">

						<?php if(isset($editable) && $editable != false){ ?>
					    <div class="form-group">
					      <label for="id_registro" class="form-label mt-4">ID</label>
					      <input type="text" class="form-control" id="id_registro" aria-describedby="emailHelp" placeholder="ID del punto de venta" value="<?php if(isset($id)) echo($id); ?>">
						</div>
						<?php }else{ ?>

						<input type="hidden" class="form-control" id="id_registro" aria-describedby="emailHelp" placeholder="ID del punto de venta" value="" readonly>
						<?php } ?>

					    <div class="form-group">
					      <label for="exampleInputEmail1" class="form-label mt-4">Nombre</label>
					      <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre del punto de venta">
					    </div>

					</div>
					<div class="row m-4"></div>


					<div class="col">
					</div>
					<div class="col">
						<?php if(isset($editable) && $editable != false){ ?>
							<button class="form-control btn btn-outline-primary btn-sm btn-update" type="button">GUARDAR <i class="fa-solid fa-chart-simple"></i></button>
						<?php }else{ ?>
							<button class="form-control btn btn-outline-primary btn-sm btn-add" type="button">GUARDAR <i class="fa-solid fa-chart-simple"></i></button>
						<?php } ?>
						<div class="row mt-2"></div>
						<!-- <button class="form-control btn btn-outline-primary btn-sm" type="button">EXPORTAR A EXCEL <i class="fa-solid fa-file-export"></i></button> -->
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row m-3"></div>

<!-- 	<div class="d-flex justify-content-around m-2">
		<a href="http://localhost/inventario/">Login</a>
		<a href="http://localhost/inventario/controlador/puntosVenta">Puntos de venta</a>
		<a href="http://localhost/inventario/controlador/insumos">Insumos</a>
		<a href="http://localhost/inventario/controlador/recetas">Recetas</a>
		<a href="http://localhost/inventario/controlador/productos">productos</a>
		<a href="http://localhost/inventario/controlador/reportes">Reportes</a>
	</div> -->
	

</div>