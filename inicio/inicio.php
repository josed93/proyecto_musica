<?php
  include_once("../plantilla/db_configuration.php");
?>
<?php
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["rol"] == "admin"){
            header("Location:../admin/ausuarios.php");
        }

    }

?>
<?php
  //include_once("./db_configuration.php");
?>

<!DOCTYPE html>
<html lang="">
<title>Inicio</title>
<?php include("../plantilla/header.php");?>
<!--<link rel="stylesheet" href="estilo_reg.css">-->
<body>

    <div id="top" class="container">
        <div id="logo">
            <a href="../inicio/inicio.php"><img src="../images/prueba.png"></a>

        </div>
        <div id="logo2">
            <a href="../inicio/inicio.php"><img src="../images/logo2.PNG"></a>

        </div>
        <?php include("../plantilla/searchnbar.php");?>
       <?php
    if(isset($_POST["user"])){

        $userlogin=$_POST["user"];
        $passlogin=$_POST["password"];

    //CREATING THE CONNECTION
     $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Conexión fallida %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */

        $consulta="SELECT * FROM usuario where username='".$userlogin."'and password=md5('".$passlogin."') and estado='activo';";

      if ($result = $connection->query($consulta)) {
          if($result->num_rows===0){

              ?>
              <script type="text/javascript">
                  $(document).ready( function() {
                    $('#failedlogin').show();
                    $('#failedlogin').delay(3000).fadeOut();

                  });
            </script>

              <?php


          }else{

           while($obj = $result->fetch_object()) {
                $rol=$obj->ROL;
                $estado=$obj->ESTADO;


                $_SESSION["user"]=$userlogin;
                $_SESSION["rol"]=$rol;
                $_SESSION["estado"]=$estado;


                  }

           /* while($obj = $result->fetch_object()) {
                  $rol=$obj->ROL;
              if($_POST["alargar_sesion"] == true){
                    $_SESSION["user"]=$userlogin;
                    $_SESSION["rol"]=$rol;
                    setcookie("PHPSESSID",$userlogin,time() +3600,"/","","",TRUE);

              }
               else{
                   $_SESSION["user"]=$userlogin;
                    $_SESSION["rol"]=$rol;


               }
            }*/




               if ($rol == "admin"){
                   header("Location:../admin/ausuarios.php");
               }
               else{
                    header("Location:../inicio/inicio.php");
               }


            }





      }else{
        ?>
              <script type="text/javascript">
                  $(document).ready( function() {
                    $('#novalido').show();
                    $('#novalido').delay(3000).fadeOut();

                  });
            </script>

              <?php
        }
    }



    ?>
    <?php

    if(isset($_SESSION["user"])){
    ?>

        <div>
          <ul id="ent" class="navbar-left">
            <li class="dropdown">
              <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $_SESSION["user"]?></b> <span class="caret"></span></a>
                <ul id="login-dp2" class="dropdown-menu" style="width:100px;">
                    <li>
                         <div class="row">
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li id="uno"><a href="../perfil/perfil.php"><span class="glyphicon glyphicon-user"></span>Ver perfil</a></li>
                                        <li id="dos"><a href="../plantilla/logout.php"><span class="glyphicon glyphicon-log-in"></span>Cerrar sesión</a></li>

                                    </ul>



                                </div>

                         </div>
                    </li>
                </ul>
            </li>
          </ul>
        </div>



    <?php
    }
    else{
    ?>
        <div>
          <ul id="ent" class="navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                    <li>
                         <div class="row">
                                <div class="col-md-12">


                                        <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                 <label class="sr-only" for="exampleInputUsername2">Usuario</label>
                                                 <input type="text" class="form-control" id="name" name="user" placeholder="Usuario" required>
                                            </div>
                                            <div class="form-group">
                                                 <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                                 <input type="password" class="form-control" id="pass" name="password" placeholder="Contraseña" required>
                                                 <div class="help-block text-right"><a href="">Olvidaste la contraseña ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                 <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                            </div>
                                            <div class="checkbox">
                                                 <label>
                                                 <input type="checkbox" name="alargar_sesion"> Mantener en sesión
                                                 </label>
                                            </div>
                                     </form>
                                </div>

                         </div>
                    </li>
                </ul>
            </li>
          </ul>
        </div>
        <div id="reg">
               <a href="../registro/registro.php" id="regbutton"><span><img src="../images/iconos_menu/reg.PNG"><b>Registrarse</b></span><em></em></a>
        </div>


    <?php
    }


?>




        <div id="carrito" class="rotateinfinite">
                <a href="#"><img src="../images/carrito.PNG"></a>

        </div>






    </div>
        <?php include("../plantilla/menu.php");?>
        <?php include("../plantilla/alerts.php");?>

    <div id="center">
       <div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>
    <p>Some text that represents "Me"...</p>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

    </div>
    <?php include("../plantilla/footer.php");?>
    <div class="ir-arriba"><img src="../images/icon_up.PNG"></div>







</body>
</html>
<?php
ob_end_flush();
?>
