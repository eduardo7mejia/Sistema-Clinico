<?php
$pacient = PacientData::getById($_GET["id"]);
?>
<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
        </div>
        <h2 class="text-center">Historial de Citas del Paciente</h2>
        <h4>Paciente: <?php echo $pacient->name." ".$pacient->lastname;?></h4>
        <br>
        <?php
		$users = ReservationData::getAllByPacientId($_GET["id"]);
		if(count($users)>0){
			// si hay usuarios
			?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example" width="100%">
                <thead>
                    <th>Asunto</th>
                    <th>Paciente</th>
                    <th>Medico</th>
                    <th>Fecha</th>
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
                </tr>
                <?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay citas</p>";
		}


		?>


        </div>
    </div>