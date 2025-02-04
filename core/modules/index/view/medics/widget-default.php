<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <a href="index.php?view=newmedic" class="btn btn-primary"><i class='fa fa-support'></i> Nuevo Medico</a>
        </div>
        <h2 class="text-center">Medicos</h2>
        <br>
        <?php

		$users = MedicData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

        <table class="table table-bordered table-hover">
            <thead>
                <th>Nombre completo</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Area</th>
                <th></th>
            </thead>
            <?php
			foreach($users as $user){
				?>
            <tr>
                <td><?php echo $user->name." ".$user->lastname; ?></td>
                <td><?php echo $user->address; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->phone; ?></td>
                <td><?php if($user->category_id!=null){ echo $user->getCategory()->name; } ?></td>
                <td style="width:200px;">
                    <a href="index.php?view=medichistory&id=<?php echo $user->id;?>"
                        class="btn btn-default btn-xs">Historial</a>
                    <a href="index.php?view=editmedic&id=<?php echo $user->id;?>"
                        class="btn btn-warning btn-xs">Editar</a>
                    <a href="index.php?view=delmedic&id=<?php echo $user->id;?>"
                        class="btn btn-danger btn-xs">Eliminar</a>

                </td>
            </tr>
            <?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay medicos</p>";
		}


		?>


    </div>
</div>