 		<!-- table -->
				<table class="table table-hover table-sm table-bordered">
				  <thead class="table-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">NOMBRE</th>
				      <th scope="col">UNIDAD DE MEDIDA</th>
				      <th scope="col">PROVEEDOR</th>
				      <th scope="col">PRECIO DE VENTA</th>
				      <th scope="col">DETALLES</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody id="tabla-datos">
				  	<?php 
				  	if(isset($res) && !is_null($res)){
					  	foreach ($res as $r) { ?>
					    <tr>
					      <th scope="row"><?php echo($r->idProducto) ?></th>
					      <td><?php echo($r->nombreproducto) ?></td>
					      <td><?php echo($r->unidadMedida) ?></td>
					      <td><?php echo($r->nombreproveedor) ?></td> 
					      <td><?php echo('$'.number_format($r->precioVenta,2)) ?></td>
					      <td><a href="<?=base_url('/controlador/detalleproducto?id=')?><?php echo($r->idProducto) ?>">Ver mas </a></td>
					      <td>
					      	
							<a href="<?=base_url('/controlador/detalleproducto?id=')?><?php echo($r->idProducto) ?>" type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
							<button type="button" class="btn btn-outline-dark btn-sm btn-delete" data-info="<?php echo($r->idProducto) ?>"><i class="fa-solid fa-trash"></i></button>
							<button type="button" class="btn btn-outline-dark btn-sm" data-info="<?php echo($r->idProducto) ?>"><i class="fa-solid fa-dollar-sign"></i></button>
							<button type="button" class="btn btn-outline-dark btn-sm" data-info="<?php echo($r->idProducto) ?>" >Merma</button>
							<button type="button" class="btn btn-outline-dark btn-sm" data-info="<?php echo($r->idProducto) ?>" >Historial Merma</button>

					      </td>
					    </tr> 
					  	<?php
					  	}
				  	}

				  	?>

				  </tbody>
				</table>
 		<!-- ./table -->