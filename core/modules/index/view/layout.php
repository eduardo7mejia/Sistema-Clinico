<?php date_default_timezone_set("America/Mexico_City"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clinica | Hernández</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="main.css">
    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/scripts.js"></script>
    <?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
    <link href='res/fullcalendar.min.css' rel='stylesheet' />
    <link href='res/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='res/js/moment.min.js'></script>
    <script src='res/fullcalendar.min.js'></script>
    <script src='res/lang.js'></script>
    <?php endif; ?>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./" style="color: white;">Clinica Hernández</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php 
$u=null;
if(Session::getUID()!=""):
  $u = UserData::getById(Session::getUID());
?>
                <ul class="nav navbar-nav">
                    <li><a href="index.php?view=newreservation" style="color: white;"><i class="far fa-file-alt"></i>
                            Nueva Cita</a></li>
                </ul>
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php?view=home" style="color: white;"><i class="fa fa-home"></i> Inicio</a></li>
                    <li><a href="index.php?view=reservations" style="color: white;"><i class="fa fa-calendar"></i> Consultas</a></li>
                    <li><a href="index.php?view=pacients" style="color: white;"><i class="fa fa-male"></i> Pacientes</a>
                    </li>
                    <li><a href="index.php?view=medics" style="color: white;"><i class="fa fa-user-md"></i> Medicos</a>
                    </li>
                    <li><a href="index.php?view=categories" style="color: white;"><i class="fas fa-tooth"></i></i>
                            Especialidad</a></li>
                    <li><a href="index.php?view=reports" style="color: white;"><i class="far fa-file-word"></i>
                            Reportes</a></li>
                    <?php if($u->is_admin):?>

                    <li><a href="index.php?view=users" style="color: white;"><i class="fa fa-user"></i> Administrador</a></li>
                    <?php endif;?>
                </ul>




                <?php endif;?>


                <ul class="nav navbar-nav navbar-right navbar-user">

                    <?php if(Session::getUID()!=""):?>
                    <?php 
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
  $user = "<span class='glyphicon glyphicon-user'></span>"." ". $u->name." ".$u->lastname;


  }?>
                    <li class="dropdown user-dropdown">
                        <a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo $user; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?view=configuration">Configuracion</a></li>
                            <li><a href="logout.php">Salir</a></li>
                        </ul>
                    </li>
                    <?php else:?>
                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="res/bootstrap3/js/bootstrap.min.js"></script>
    <!-- para usar botones en datatables JS -->
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <!-- <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script> -->
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <!-- <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script> -->
    <!-- código JS propìo-->
    <script type="text/javascript" src="main.js"></script>
</body>

</html>