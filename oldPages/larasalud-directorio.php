<?php
    include('php/dbmanage.php');
    header("Content-Type: text/html;charset=utf-8");
    $dir = $_GET['tipo']; //obtiene de la url si es ambulancias, clinicas, enfermeras, etc.. menos medicos
    $dirTitulo = strtoupper($dir);
    
    if(array_key_exists("buscarxCiudad",$_POST))
    {
        $ciudad= $_POST['ciudad'];
        $query= "SELECT * FROM directorio WHERE ciudad='".$ciudad."' AND tipo='".$dir."'";
        $resultado= db_query($query);
        $cont=1;
        while($filaDir=mysqli_fetch_array($resultado))
        {
            if($filaDir['premium']==1)
            {
                $logo = $filaDir['logo'];
                
                if($cont==1 || $cont%2!=0)
                $colorFondo = "rgb(11,166,156)";
                else
                $colorFondo = "rgb(157,211,175)";
                $listaPremium .= "<div class=\"row premium\" style=\"background-color:".$colorFondo."\";>
                                <div class=\"w-70 float-left\">
                                
                                <img class=\"p-2 float-left\" src=\"".$logo."\" width=\"90px\"class=\"float-left mr-2\">
                                <div class=\"col w-100 pt-2\">
                                    <h3 style=\"color:white;\">".$filaDir['nombre']."</h3>
                                </div>
                                <div class=\"w-100\"></div>
                                <div class=\"col w-100 mb-3\">
                                    <p class=\"p-small\" style=\"color: black;\">".$filaDir['descripcion']."</p>
                                </div>
                                <div class=\"w-100\"></div>
                                  <div class=\"col w-100 ml-0\">
                                      <p class=\"p-smaller\" style=\"color: black;\">".$filaDir['direccion']." ".$ciudad." 
                                         Telefonos: ".$filaDir['telefono']."</p>
                                  </div>
                                  <div class=\"w-100\"></div>
                                  <div class=\"col w-100\">
                                      <p class=\"p-smaller\" style=\"color: black;\">".$filaDir['horario']." Correo: ".$filaDir['correo']."</p>
                                  </div>
                                </div> 
                              <iframe class=\"float-left borde3d mt-3\" src=\"".$filaDir['mapa']."\" width=\"23%\" height=\"90%\" allowfullscreen>".$filaDir['nombre']."</iframe>
                              <a href=\"".$filaDir['facebook']."\"><img class=\"mt-4 pt-1 pl-1 h-25\" src=\"imagenes/iconos/sociales/face.png\"></a>
                              <a href=\"".$filaDir['instagram']."\"><img class=\"pt-1 pl-1 h-25\"src=\"imagenes/iconos/sociales/instagram.png\"></a>
                              <a href=\"".$filaDir['linkedin']."\"><img class=\"pt-1 pl-1 h-25\" src=\"imagenes/iconos/sociales/linkedin.png\"></a>
                            </div>";
            }
            if($filaDir['premium']==0)
            {
                //este if es para que alterne el color de fondo de las tarjetas del directorio
                if($cont==1 || $cont%2!=0)
                $colorFondo = "#e4e0e0";
                else
                $colorFondo = "#c0bebe";
                $listaPremium .= "<div class=\"rounded-sm d-flex p-3 ml-1 mb-3\" style=\"background-color: ".$colorFondo."\">
                                    <div class=\"float-left w-50\">
                                        <h4>".$filaDir['nombre']."</h4>
                                    <p class=\"mb-0\" style=\"color: black;\">".$filaDir['descripcion']."</p>
                                    </div>
                                    <div class=\"float-left w-50\">
                                          <p class=\"p-small\" style=\"color: black;\">".$filaDir['direccion'].". ".$ciudad."<br> 
                                         Telefonos: ".$filaDir['telefono']."</p>
                                    </div>
                                </div>";
            }
            $cont++;
        }
    }


?>

<!DOCTYPE html>
<html lang="es">

<head>
<title>LS - <?php echo $dir; ?></title>
<?php include 'php/header.php'; ?>
 <section id="Directorio">
    <!--Tarjetas de cada laboratorio-->
   <div class="container" style="margin-right:20%; margin-left:0.2%;">
    <h1 class="ml-4 mt-4 mb-2" style="color:#969494;">DIRECTORIO / <?php echo $dirTitulo; ?></h1>
   
    <div class="row pt-4 ml-2">
      <div class="col-sm-9 pr-0 h-80">
        <form method="POST" class="form-inline ml-1">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Buscar por ciudad:</label>
          <select name="ciudad" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Elegir</option>
            <option value="Barquisimeto">Barquisimeto</option>
            <option value="Cabudare">Cabudare</option>
            <option value="Carora">Carora</option>
            <option value="Duaca">Duaca</option>
            <option value="Tocuyo">El tocuyo</option>
            <option value="Quibor">Quibor</option>
            <option value="Sanare">Sanare</option>
            <option value="Sarare">Sarare</option>
            <option value="Siquesique">Siquesique</option>
          </select>
          <button type="submit" class="btn btn-info my-1" name="buscarxCiudad"><i class="fa fa-xs fa-search" aria-hidden="true"></i></button>
        </form>
        <?php echo $listaPremium; ?>
         <div class="row premium" style="background-color: rgb(11,166,156);">
            <div class="w-70 float-left">  
            <img class="p-2 float-left" src="imagenes/logos/Medicos/eduard.jpg" width="90px"class="float-left mr-2">
            <div class="col w-100 pt-2">
                <h3 style="color:white;">Psicologo Eduard Guerrero</h3>
            </div>
            <div class="w-100"></div>
            <div class="col w-100 mb-3">
                <p class="p-small" style="color: black;">Especialista en cognitivo conductual,terapia de parejas.</p>
            </div>
            <div class="w-100"></div>
              <div class="col w-100 ml-0">
                  <p class="p-smaller" style="color: black;">Avenida 1 entre Calle 7 y 8
                      casa Número 7-20, Centro Médico Los Pinos.
                      Urb. La Mata
                      Cabudare, estado Lara. Telefonos: 0251-6350113 / 0414-0714813</p>
              </div>
              
              <div class="w-100"></div>
              <div class="col w-100">
                  <p class="p-smaller" style="color: black;">Atención Presencial: 
                  Martes, Jueves y Viernes (2pm a 6pm) 
                  Atención Online: 
                  Lunes a Viernes (8pm a 10pm) hora de Venezuela  Correo: psicologoeduard@gmail.com</p>
              </div>
            </div> 
          <iframe class="float-left borde3d mt-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3928.372610433305!2d-69.2993667!3d10.0685238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93b1da16e104de99!2sRepuestos+Solo+Chevrolet+GML+C.A!5e0!3m2!1ses-419!2sve!4v1561524164284!5m2!1ses-419!2sve" width="190" height="190" allowfullscreen> Blossom</iframe>
          <img class="mt-4 pt-1 pl-1 h-25" src="imagenes/iconos/sociales/face.png">
          <img class="pt-1 pl-1 h-25"src="imagenes/iconos/sociales/instagram.png">
          <img class="pt-1 pl-1 h-25" src="imagenes/iconos/sociales/linkedin.png">
        </div>
         <div class="row premium" style="background-color: rgb(157,211,175);">
            <div class="w-70 float-left">  
            <img class="p-2 float-left" src="imagenes/logos/Medicos/eduard.jpg" width="90px"class="float-left mr-2">
            <div class="col w-100 pt-2">
                <h3 style="color:white;">Psicologo Eduard Guerrero</h3>
            </div>
            <div class="w-100"></div>
            <div class="col w-100 mb-3">
                <p class="p-small" style="color: black;">Especialista en cognitivo conductual,terapia de parejas.</p>
            </div>
            <div class="w-100"></div>
              <div class="col w-100 ml-0">
                  <p class="p-smaller" style="color: black;">Avenida 1 entre Calle 7 y 8
                      casa Número 7-20, Centro Médico Los Pinos.
                      Urb. La Mata
                      Cabudare, estado Lara. Telefonos: 0251-6350113 / 0414-0714813</p>
              </div>
              
              <div class="w-100"></div>
              <div class="col w-100">
                  <p class="p-smaller" style="color: black;">Atención Presencial: 
                  Martes, Jueves y Viernes (2pm a 6pm) 
                  Atención Online: 
                  Lunes a Viernes (8pm a 10pm) hora de Venezuela  Correo: psicologoeduard@gmail.com</p>
              </div>
            </div> 
          <iframe class="float-left borde3d mt-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3928.372610433305!2d-69.2993667!3d10.0685238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93b1da16e104de99!2sRepuestos+Solo+Chevrolet+GML+C.A!5e0!3m2!1ses-419!2sve!4v1561524164284!5m2!1ses-419!2sve" width="190" height="190" allowfullscreen> Blossom</iframe>
          <img class="mt-4 pt-1 pl-1 h-25" src="imagenes/iconos/sociales/face.png">
          <img class="pt-1 pl-1 h-25"src="imagenes/iconos/sociales/instagram.png">
          <img class="pt-1 pl-1 h-25" src="imagenes/iconos/sociales/linkedin.png">
        </div>
          
        <div class="clinicas p-3 pl-4 rounded-sm ml-1 d-flex mb-3" style="background-color: #e4e0e0;">
            <div class="float-left w-50">
                <h4>Dermatología</h4>
            <p class="mb-0" style="color: black;">Especialista en cognitivo conductual,terapia de parejas.</p>
            </div>
            <div class="float-left w-50">
                  <p class="p-small" style="color: black;">Avenida 1 entre Calle 7 y 8
                      casa Número 7-20, Centro Médico Los Pinos.
                      Urb. La Mata
                      Cabudare, estado Lara.<br> Telefonos: 0251-6350113 / 0414-0714813</p>
            </div>
        </div>
        <div class="rounded-sm d-flex p-3 ml-1 mb-3" style="background-color: #c0bebe;">
            <div class="float-left w-50">
                <h4>Dermatología</h4>
            <p class="mb-0" style="color: black;">Especialista en cognitivo conductual,terapia de parejas.</p>
            </div>
            <div class="float-left w-50">
                  <p class="p-small" style="color: black;">Avenida 1 entre Calle 7 y 8
                      casa Número 7-20, Centro Médico Los Pinos.
                      Urb. La Mata
                      Cabudare, estado Lara.<br> Telefonos: 0251-6350113 / 0414-0714813</p>
            </div>
        </div>
        
        
        
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div> 
    <div class="col-sm-3 pl-4 pr-0 text-right">
        <img class="img-fluid publicidad" src="https://via.placeholder.com/230x588">
        <img class="img-fluid publicidad mt-4 mb-2" src="https://via.placeholder.com/230x550">
      </div>
    </div>
    </div>
  </section>
  <?php include 'php/footer.php'; ?>
  <!-- JQuery script -->
<script src="js/jQuery.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="js/myJQuery.js"></script>
</body>
</html>