 
<div class="container-fluid mt-4 pt-2 col-12">

	<div class="page-header" id="banner">

		<h1>Detalle receta</h1>
	</div>
	

	<div class="pt-2">
		<div class="row m-2">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page" onclick="window.history.back();"><i class="fa-solid fa-angle-left"></i> Volver atras</li>
				</ol>
			</nav>
		</div>

		<div class="row m-2">
			<div class="card p-2">
				<div class="row">
					<div class="col-12">
					    <div class="form-group">
					      <label for="exampleInputEmail1" class="form-label mt-4">Nombre</label>
					      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la receta">
					      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    </div>


					    <div class="form-group">
					      <label for="exampleInputEmail1" class="form-label mt-4">Precio de venta</label>
					      <input type="number" step="0.1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Precio de venta">
					      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    </div>					    


						    <!-- Insumos/ingredientes -->
						    <div class="row m-2 p-1">
								<div class="col-10">
								</div>
								<div class="col">
									<button class="form-control btn btn-info btn-sm rounded-pill" type="button">AGREGAR INGREDIENTE <i class="fa-solid fa-chart-simple"></i></button>
									<div class="row mt-2"></div>
									<!-- <button class="form-control btn btn-outline-primary btn-sm" type="button">EXPORTAR A EXCEL <i class="fa-solid fa-file-export"></i></button> -->
								</div>
							</div>

					    <div class="row">
						    <div class="form-group col-md-6 col-sm-12">
						      <label for="exampleSelect2" class="form-label mt-4">Ingrediente</label>
						      <select class="form-select" id="exampleSelect2">
						        <option value="lts">Litro (lts.)</option>
						        <option value="ml">Mililitro (ml.)</option>
						        <option value="cc">Centímetros cúbicos (c.c.)</option>
						        <option value="kg">Kilogramos(kg.)</option>
						        <option value="gr">Gramos (gr.)</option>
						        <option value="lb">Libra (lb.)</option>
						        <option value="oz">Onza (oz.)</option>
						      </select>
						    </div>

						    <!--  -->

						    <div class="row col-md-6 col-sm-12">
						    <div class="form-group col-md-8">
						      <label for="exampleInputEmail1" class="form-label mt-4">Cantidad</label>
						      <input type="number" step="0.1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cantidad">
						      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						    </div>	
						    <div class="form-group col-md-4">
						    	<label for="exampleInputEmail1" class="form-label mt-4">Eliminar ingrediente</label>
						      <button class="form-control btn btn-dark btn-sm" type="button"><i class="fa-solid fa-xmark fa-2x"></i></button>
						    </div>	


						    </div>

						</div>

					    <div class="row">
						    <div class="form-group col-md-6 col-sm-12">
						      <label for="exampleSelect2" class="form-label mt-4">Ingrediente</label>
						      <select class="form-select" id="exampleSelect2">
						        <option value="lts">Litro (lts.)</option>
						        <option value="ml">Mililitro (ml.)</option>
						        <option value="cc">Centímetros cúbicos (c.c.)</option>
						        <option value="kg">Kilogramos(kg.)</option>
						        <option value="gr">Gramos (gr.)</option>
						        <option value="lb">Libra (lb.)</option>
						        <option value="oz">Onza (oz.)</option>
						      </select>
						    </div>

						    <!--  -->

						    <div class="row col-md-6 col-sm-12">
						    <div class="form-group col-md-8">
						      <label for="exampleInputEmail1" class="form-label mt-4">Cantidad</label>
						      <input type="number" step="0.1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cantidad">
						      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						    </div>	
						    <div class="form-group col-md-4">
						    	<label for="exampleInputEmail1" class="form-label mt-4">Eliminar ingrediente</label>
						      <button class="form-control btn btn-dark btn-sm" type="button"><i class="fa-solid fa-xmark fa-2x"></i></button>
						    </div>	


						    </div>

						</div>


					</div>
					<div class="row m-4"></div>


					<div class="col">
					</div>
					<div class="col">
						<button class="form-control btn btn-outline-primary btn-sm" type="button">GUARDAR <i class="fa-solid fa-chart-simple"></i></button>
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