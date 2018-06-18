


<?php

$curl = curl_init("https://randomuser.me/api/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$response = json_decode($result);
/*echo $response->results[0]->gender;
echo " ";
echo $response->results[0]->name->first;
echo " ";
echo $response->results[0]->name->last;
echo " ";
echo $response->results[0]->location->street;
echo " ";
echo $response->results[0]->location->city;
echo " ";
echo $response->results[0]->email;
echo " ";
echo $response->results[0]->picture->thumbnail;
echo " ";*/

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Api Consumer</title>
    <meta name="viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="base/css/bootstrap.min.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">

                <!--ENCABEZADO DEL MENU-->
                <div class="navbar-header">
                    <h2 style="color:#fff; font-size: 30px;">
                        <?php 
                            $str = $response->results[0]->name->first;
                            $str = ucfirst($str);
                            echo $str;
                            echo " ";
                            $str = $response->results[0]->name->last;
                            $str = ucfirst($str);
                            echo $str; 
                        ?>
                    </h2>

                    <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btn-colapsar">
                        <span class="sr-only">Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>-->

                <!--ELEMENTOS DEL MENU-->
         <!-- <div class="collapse navbar-collapse" id="btn-colapsar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Inicio</a></li>-->
                       <!--<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Productos <span class="caret"></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Computadoras</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Smartphones</a></li>
                                    <li><a href="#">Drones</a></li>
                                    <li><a href="#">Accesorios</a></li>
                                </ul>
                            </a>
                       </li>
                        <li><a href="#">Contacto</a></li>
                    </ul>-->

                    <!--Formulario de Busqueda-->
                    <!--<form action="" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <button type="submit" class="btn btn-default">Buscar</button>
                        </div>
                    </form>
                </div>

            </div>
        </nav>
    </header>-->

    <section class="main">
        <div class="conteiner">
            <!--Slideshow-->
            <!--<div class="row">
                <div class="col-md-12">
                   <div id="slider" class="carousel slide" data-ride="carousel">
                        <!--Indicadores-->
                       <!--<ol class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1"></li>
                            <li data-target="#slider" data-slide-to="2"></li>
                        </ol>

                        <!--Contenedor de Slides-->
                        <!--<div class="carousel-inner">
                            <div class="item active">
                                <img src="img/s1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/s2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/s3.jpg" alt="">
                            </div>
                        </div>

                        <!--Controles-->
                        <!--<a href="#slider" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a href="#slider" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                   </div> 
                </div>
            </div>-->
            <!--Galeria-->
            <div class="col-md-12">
                    <div class="page-header">
                        <h2 style="color: #fff; font-size: 30px; text-align: center;">Galeria</h2>
                    </div>

                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo $response->results[0]->picture->large; ?>" alt="<?php echo $response->results[0]->picture->thumbnail; ?>">
                        </a>
                        <div class="caption">
                            <h3>
                                <?php 
                                    $str = $response->results[0]->name->first;
                                    $str = ucfirst($str);
                                    echo $str;
                                    echo " ";
                                    $str = $response->results[0]->name->last;
                                    $str = ucfirst($str);
                                    echo $str; 
                                ?>
                            </h3>
                            <p>
                                <?php 
                                    echo $response->results[0]->location->street;
                                    echo " , ";
                                    echo $response->results[0]->location->city;
                                ?>
                            </p>
                            <p><?php echo $response->results[0]->location->state; ?></p>
                            <p>
                                <?php 
                                    echo $response->results[0]->location->street;
                                    echo " , ";
                                    echo $response->results[0]->location->city;
                                ?>
                            </p>
                            <p><?php echo $response->results[0]->location->state; ?></p>
                        </div>
                    </div>
               
                
                
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    
                    <p class="pull-right">
                        <a href="#">Volver</a>
                    </p>
                </div>  
            </div>
        </div>
    </footer>

    <script src="base/js/jquery.js"></script>
    <script src="base/js/bootstrap.min.js"></script>
</body>
</html>


  