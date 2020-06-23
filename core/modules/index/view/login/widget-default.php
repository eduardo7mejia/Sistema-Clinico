<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<img src="" alt="">
<div class="vertical-offset-100">
    <div class="col-md-4 visible-md visible-lg">
        <img class="formaDos" src="images/Online Doctor-amico.svg" alt="" class="forma">
    </div>
    <div class="col-md-5 izquierda">
        <?php if(isset($_COOKIE['password_updated'])):?>
        <div class="alert alert-success">
            <p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
            <p>Pruebe iniciar sesion con su nueva contraseña.</p>
        </div>
        <?php setcookie("password_updated","",time()-18600);
		 endif; ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center responsive">Iniciar Sesion</h3>
            </div>
            <div class="panel-body ">
                <form class="" accept-charset="UTF-8" role="form" method="post"
                    action="index.php?view=processlogin">
                        <div class="form-group inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i><input class="form-control" placeholder="Usuario"
                                name="mail" type="text" required>
                        </div>
                        <div class="form-group inner-addon right-addon">
                            <span class="glyphicon glyphicon-lock"></span><input class="form-control"
                                placeholder="Contraseña" required name="password" type="password" value="">
                        </div>
                        <input class="btn sesion  btn-block" type="submit" value="Ingresar">
                </form>
            </div>
        </div>
    </div>
</div>