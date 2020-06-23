<div class="row">
    <div class="col-md-12">
        <h2 class="text-succcess text-center ">Reportes</h2>
        <br>
        <form class="form-horizontal" role="form">
            <input type="hidden" name="view" value="reports">
            <?php
				$pacients = PacientData::getAll();
				$medics = MedicData::getAll();
				$statuses = StatusData::getAll();
				$payments = PaymentData::getAll();
       		 ?>
            <div class="form-group responsive">
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon">INICIO</span>
                        <input type="date" name="start_at"
                            value="<?php if(isset($_GET["start_at"]) && $_GET["start_at"]!=""){ echo $_GET["start_at"]; } ?>"
                            class="form-control" placeholder="Palabra clave">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon">FIN</span>
                        <input type="date" name="finish_at"
                            value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){ echo $_GET["finish_at"]; } ?>"
                            class="form-control" placeholder="Palabra clave">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon">ESTADO</span>
                        <select name="status_id" class="form-control">
                            <?php foreach($statuses as $p):?>
                            <option value="<?php echo $p->id; ?>"
                                <?php if(isset($_GET["status_id"]) && $_GET["status_id"]==$p->id){ echo "selected"; } ?>>
                                <?php echo $p->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon">PAGO</span>
                        <select name="payment_id" class="form-control">
                            <?php foreach($payments as $p):?>
                            <option value="<?php echo $p->id; ?>"
                                <?php if(isset($_GET["payment_id"]) && $_GET["payment_id"]==$p->id){ echo "selected"; } ?>>
                                <?php echo $p->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-primary btn-block">Buscar</button>
                </div>
            </div>
        </form>

        <?php
    $users= array();
    if((isset($_GET["status_id"]) && isset($_GET["payment_id"]) && isset($_GET["pacient_id"]) && isset($_GET["medic_id"]) && isset($_GET["start_at"]) && isset($_GET["finish_at"]) ) && ($_GET["status_id"]!="" ||$_GET["payment_id"]!="" || $_GET["pacient_id"]!="" || $_GET["medic_id"]!="" || ($_GET["start_at"]!="" && $_GET["finish_at"]!="") ) ) {
    $sql = "select * from reservation where ";
    if($_GET["status_id"]!=""){
        $sql .= " status_id = ".$_GET["status_id"];
    }

    if($_GET["payment_id"]!=""){
    if($_GET["status_id"]!=""){
        $sql .= " and ";
    }
        $sql .= " payment_id = ".$_GET["payment_id"];
    }


    if($_GET["pacient_id"]!=""){
    if($_GET["status_id"]!=""||$_GET["payment_id"]!=""){
        $sql .= " and ";
    }
        $sql .= " pacient_id = ".$_GET["pacient_id"];
    }

    if($_GET["medic_id"]!=""){
    if($_GET["status_id"]!=""||$_GET["pacient_id"]!=""||$_GET["payment_id"]!=""){
        $sql .= " and ";
    }

        $sql .= " medic_id = ".$_GET["medic_id"];
    }



    if($_GET["start_at"]!="" && $_GET["finish_at"]){
    if($_GET["status_id"]!=""||$_GET["pacient_id"]!="" ||$_GET["medic_id"]!="" ||$_GET["payment_id"]!="" ){
        $sql .= " and ";
    }

        $sql .= " ( date_at >= \"".$_GET["start_at"]."\" and date_at <= \"".$_GET["finish_at"]."\" ) ";
    }

//echo $sql;
		$users = ReservationData::getBySQL($sql);

}else{
		$users = ReservationData::getAllPendings();

}
		if(count($users)>0){
			// si hay usuarios
			$_SESSION["report_data"] = $users;
			?>
        <!-- <div class="panel panel-default"> -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example" width="100%">
                <thead>
                    <th>Organo dentario</th>
                    <th>Paciente</th>
                    <!-- <th>Medico</th> -->
                    <th>Diagnostico</th>
                    <!-- <th>Estado</th> -->
                    <th>Tratamiento y Costo</th>
                    <th>Pago</th>
                    
                </thead>
                <?php
			$total = 0;
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
                <tr>
                    <td><?php echo $user->title; ?></td>
                    <td><?php echo $pacient->name." ".$pacient->lastname; ?></td>
                    <!-- <td><?php echo $medic->name." ".$medic->lastname; ?></td> -->
                    <!-- <td><?php echo $user->date_at." ".$user->time_at; ?></td> -->
                    <td><?php echo $user->symtoms; ?></td>
                    <!-- <td><?php echo $user->getStatus()->name; ?></td> -->
                    
                    <td><?php echo $user->medicaments."  ","     $"."".number_format($user->price,2,".",",");?></td>
                    <td><?php echo $user->getPayment()->name; ?></td>                   
                </tr>
                <?php
				$total += $user->price;

			}
			echo "</table>";
			?>
                <table class="table table-striped table-bordered" id="example" width="100%">
                    <h3>Total: $ <?php echo number_format($total,2,".",",");?></h3>
                </table>

                <?php
		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}
		?>
        </div>
    </div>
</div>
