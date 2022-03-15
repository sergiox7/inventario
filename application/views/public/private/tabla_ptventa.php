 		<!-- table -->
				  	<?php 
				  	if(isset($res) && !is_null($res)){
					  	foreach ($res as $r) { ?>

				   		<div class="card col-md-6 col-sm-12 p-2">
							<div class="card-header text-white bg-secondary">INVENTARIO PUNTO DE VENTA <?php echo($r->idPtVenta) ?></div>
						  <div class="card-body">
						    
						    <div class="d-flex flex-row justify-content-between">
						    	<div>
						    		<h5 class="card-title"><?php echo($r->nombre) ?></h5>
						    	</div>
						    	<div class="d-flex flex-column col-6">
						    		<div class="d-flex justify-content-end"> 
									    <a href="<?=base_url('/controlador/detalleptventa?id=')?><?php echo($r->idPtVenta) ?>" type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa-solid fa-pen-to-square"></i></a>
										<button type="button" class="btn btn-outline-dark btn-sm m-1 btn-delete" data-info="<?php echo($r->idPtVenta) ?>"><i class="fa-solid fa-trash"></i></button>
						    		</div>
						    		<a href="#" class="btn btn-outline-primary m-1">Opciones</a>
						    	</div>
						    </div>
						    
						  </div>
						</div>
					  	<?php
					  	}
				  	}

				  	?>
 
 		<!-- ./table -->