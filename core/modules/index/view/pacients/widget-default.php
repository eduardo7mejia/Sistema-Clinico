<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <a href="index.php?view=newpacient" class="btn btn-primary"><i class='fa fa-male'></i> Nuevo Paciente</a>
        </div>
        <h1 class="text-center">Pacientes</h1>
        <br>
        <?php

		$users = PacientData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example" width="100%">
                <thead>
                    <th>Nombre completo</th>
                    <th>Telefono</th>
                    <th>Motivo de consulta</th>
                    <th></th>
                </thead>
                <?php
			foreach($users as $user){
				?>
                <tr>
                <!-- $user->sick = $_POST["sick"]; -->
                    <td><?php echo $user->name." ".$user->lastname; ?></td>
                    <td><?php echo $user->phone; ?></td>
                    <td><?php echo $user->sick; ?></td>
                    <td style="width:200px;">
                        <a href="index.php?view=pacienthistory&id=<?php echo $user->id;?>"
                            class="btn btn-default btn-xs">Historial</a>
                        <a href="index.php?view=editpacient&id=<?php echo $user->id;?>"
                            class="btn btn-warning btn-xs">Editar</a>
                        <a href="index.php?view=delpacient&id=<?php echo $user->id;?>"
                            class="btn btn-danger btn-xs">Eliminar</a>
                    </td>
                </tr>
                <?php

			}
		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>
            </table>
        </div>
    </div>
</div>