 		<!-- table -->
				<table class="table table-hover table-sm table-bordered">
				  <thead class="table-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">NOMBRE</th>
				      <th scope="col">DETALLES</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	if(isset($res) && !is_null($res)){
					  	foreach ($res as $r) { ?>

				    <tr>
				      <th scope="row"><?php echo($r->idProveedor) ?></th>
				      <td><pre><?php echo($r->nombre) ?></pre></td>
				      <td><a href="<?=base_url('/controlador/detalleproveedor?id=')?><?php echo($r->idProveedor) ?>">Ver mas </a></td>
				      <td>
				      	
						<a href="<?=base_url('/controlador/detalleproveedor?id=')?><?php echo($r->idProveedor) ?>" type="button" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
						<button type="button" class="btn btn-outline-dark btn-sm btn-delete" data-info="<?php echo($r->idProveedor) ?>"><i class="fa-solid fa-trash"></i></button>
				      </td>
				    </tr>  
					  	<?php
					  	}
				  	}

				  	?>
				  </tbody>
				</table>
 		<!-- ./table -->