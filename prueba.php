


<?php


$curl = curl_init("https://randomuser.me/api/?results=17");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$response = json_decode($result);
$posicion = 0;
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
                    <h2 style="color:#fff; font-size: 30px;">Perfiles</h2>

                   
                </div>-->

                <!--Galeria-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2 style="color: #fff; font-size: 30px; text-align: center;">Galeria</h2>
                        </div>
                    </div>
                    <?php for ($posicion = 0; $posicion <16; $posicion++){ ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="<?php echo $response->results[$posicion]->picture->large; ?>" alt="<?php echo $response->results[0]->picture->thumbnail; ?>">
                            </a>
                            <div class="caption">
                                <h3>
                                    <?php
                                        $str = $response->results[$posicion]->name->first;
                                        $str = ucfirst($str);
                                        echo $str;
                                        echo " ";
                                        $str = $response->results[$posicion]->name->last;
                                        $str = ucfirst($str);
                                        echo $str; 
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                        $str = $response->results[$posicion]->location->street;
                                        $str = ucwords($str);
                                        $str = substr($str, 0, 30);
                                        echo $str;
                                    ?>
                                </p>
                                <p>
                                    <?php 
                                    $str = $response->results[$posicion]->location->city;
                                    $str = ucfirst($str);
                                    echo substr($str, 0, 30);
                                    ?>
                                </p>
                                <p><?php 
                                        $str = $response->results[$posicion]->location->state;
                                        $str = ucfirst($str); 
                                        echo $str; 
                                    ?>
                                </p>
                                <a href="http://api-consumer.local/detalle.php?posicion=15" class="btn btn-primary">Ver perfil completo</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                

                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                </div>  
                            </div>
                        </div>
                    </footer>

        <script src="base/js/jquery.js"></script>
        <script src="base/js/bootstrap.min.js"></script>
</body>
</html>


