<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <a href="index.php?view=newcategory" class="btn btn-primary"><i class='fa fa-th-list'></i> Nueva
                Categoria</a>
        </div>
        <h2 class="text-center">Especialidad</h2>
        <?php

		$users = CategoryData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
        <table class="table table-bordered table-hover">
            <thead>
                <th>Nombre</th>
                <th></th>
            </thead>
            <?php
			foreach($users as $user){
				?>
            <tr>
                <td><?php echo $user->name." ".$user->lastname; ?></td>
                <td style="width:130px;"><a href="index.php?view=editcategory&id=<?php echo $user->id;?>"
                        class="btn btn-warning btn-xs">Editar</a> <a
                        href="index.php?view=delcategory&id=<?php echo $user->id;?>"
                        class="btn btn-danger btn-xs">Eliminar</a></td>
            </tr>
            <?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Categorias</p>";
		}


		?>


    </div>
</div>