<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
        </div>
        <h2 class="text-center">Citas anteriores</h2>
        <br>
        <?php

		$users = ReservationData::getOld();
		if(count($users)>0){
			// si hay usuarios
			?>

        <table class="table table-bordered table-hover">
            <thead>
                <th>Organo Dentario</th>
                <th>Paciente</th>
                <th>Medico</th>
                <th>Fecha</th>
                <th></th>
            </thead>
            <?php
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
            <tr>
                <td><?php echo $user->title; ?></td>
                <td><?php echo $pacient->name." ".$pacient->lastname; ?></td>
                <td><?php echo $medic->name." ".$pacient->lastname; ?></td>
                <td><?php echo $user->date_at." ".$user->time_at; ?></td>
                <td style="width:130px;">
                    <a href="index.php?view=editreservation&id=<?php echo $user->id;?>"
                        class="btn btn-warning btn-xs">Editar</a>
                    <a href="index.php?action=delreservation&id=<?php echo $user->id;?>"
                        class="btn btn-danger btn-xs">Eliminar</a>
                </td>
            </tr>
            <?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>


    </div>
</div>