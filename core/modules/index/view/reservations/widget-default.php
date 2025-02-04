<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
        </div>
        <a href="./index.php?view=oldreservations" class="btn btn-success pull-right">Citas Anteriores</a>
        <h2 class="text-center">Consultas</h2>
        <br>
        <form class="form-horizontal" role="form">
            <input type="hidden" name="view" value="reservations">
            <?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$statuses = StatusData::getAll();
$payments = PaymentData::getAll();
        ?>

            <div class="form-group">
                <div class="col-lg-2">
                    <div class="input-group">
                        <input type="text" name="q"
                            value="<?php if(isset($_GET['q']) && $_GET['q']!=''){ echo $_GET['q']; } ?>"
                            class="form-control" placeholder="Palabra clave">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-male"></i></span>
                        <select name="pacient_id" class="form-control">
                            <option value="">PACIENTE</option>
                            <?php foreach($pacients as $p):?>
                            <option value="<?php echo $p->id; ?>"
                                <?php if(isset($_GET["pacient_id"]) && $_GET["pacient_id"]==$p->id){ echo "selected"; } ?>>
                                <?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-support"></i></span>
                        <select name="medic_id" class="form-control">
                            <option value="">MEDICO</option>
                            <?php foreach($medics as $p):?>
                            <option value="<?php echo $p->id; ?>"
                                <?php if(isset($_GET["medic_id"]) && $_GET["medic_id"]==$p->id){ echo "selected"; } ?>>
                                <?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 visible-sm">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="date" name="date_at"
                            value="<?php if(isset($_GET["date_at"]) && $_GET["date_at"]!=""){ echo $_GET["date_at"]; } ?>"
                            class="form-control" placeholder="Palabra clave">
                    </div>
				</div> 
            </div>
				<div class="form-group">
                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-addon">INICIO</span>
                        <input type="date" name="start_at"
                            value="<?php if(isset($_GET["start_at"] ) && $_GET["start_at"]!="" && isset($_GET["date_at"]) && $_GET["date_at"]!="" ){ echo $_GET["start_at"] , $_GET["date_at"]; } ?>"
                            class="form-control" placeholder="Palabra clave">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-addon">FIN</span>
                        <input type="date" name="finish_at"
                            value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""  && isset($_GET["date_at"]) && $_GET["date_at"]!=""){ echo $_GET["finish_at"], $_GET["date_at"]; } ?>"
                            class="form-control" placeholder="Palabra clave">
                    </div>
                </div>
                <div class="col-lg-3">
                    <button class="btn btn-primary btn-block">Buscar</button>
                </div>
            </div>
        </form>

        <?php
	$users= array();
		if((isset($_GET["q"]) && isset($_GET["pacient_id"]) && isset($_GET["medicaments"]) && isset($_GET["start_at"]) && isset($_GET["finish_at"]) && isset($_GET["date_at"])) && ($_GET["q"]!="" || $_GET["pacient_id"]!="" || $_GET["medic_id"]!="" ||  ($_GET["start_at"]!="" && $_GET["finish_at"]!="") || $_GET["date_at"]!="") ) {
				$sql = "select * from reservation where ";
					if($_GET["q"]!=""){
						$sql .= " title like '%$_GET[q]%' or note like '%$_GET[q] %' ";
				}

			if($_GET["pacient_id"]!=""){
				if($_GET["q"]!=""){
					$sql .= " and ";
				}
				$sql .= " pacient_id = ".$_GET["pacient_id"];
			}

			if($_GET["medic_id"]!=""){
				if($_GET["q"]!=""||$_GET["pacient_id"]!=""){
					$sql .= " and ";
				}

					$sql .= " medic_id = ".$_GET["medic_id"];
			}
// if($_GET["date_at"]!=""){
// if($_GET["q"]!=""||$_GET["pacient_id"]!="" ||$_GET["medic_id"]!="" ){
// 	$sql .= " and ";
// }

// 	$sql .= " date_at = \"".$_GET["date_at"]."\"";
// }
	if($_GET["start_at"]!="" && $_GET["finish_at"]){
    if($_GET["q"]!=""||$_GET["pacient_id"]!="" ||$_GET["medic_id"]!="" ){
        $sql .= " and ";
    }

        $sql .= " ( date_at >= \"".$_GET["start_at"]."\" and date_at <= \"".$_GET["finish_at"]."\" ) ";
    }


		$users = ReservationData::getBySQL($sql);

}else{
		$users = ReservationData::getAll();

}
		if(count($users)>0){
			// si hay usuarios
			?>
        <!-- <div class="panel panel-default"> -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example" width="100%">
                <thead>
                    <th>Organo dentario</th>
                    <th>Paciente</th>
                    <th>Medico</th>
                    <th>Fecha</th>
                    <!-- <th></th> -->
                </thead>
                <?php
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
                <tr>
                    <td><?php echo $user->title; ?></td>
                    <td><?php echo $pacient->name." ".$pacient->lastname; ?></td>
                    <td><?php echo $medic->name." ".$medic->lastname; ?></td>
                    <td><?php echo $user->date_at." ".$user->time_at; ?></td>
                    <!-- <td style="width:130px;">
                        <a href="index.php?view=editreservation&id=<?php echo $user->id;?>"
                            class="btn btn-warning btn-xs">Editar</a>
                        <a href="index.php?action=delreservation&id=<?php echo $user->id;?>"
                            class="btn btn-danger btn-xs">Eliminar</a>
                    </td> -->
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