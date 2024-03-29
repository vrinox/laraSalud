<!DOCTYPE html>
<html lang="es">

<head>
<title>Lara Salud</title>

<?php include("php/header.php"); ?>

<section id="Articulos">
    <!--Carrusel con los destacados de la semana-->
    <div class="container">
    <div class="row pt-4">
      <div class="col-sm-475">
        <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagenes/carrusel/antivacuna.jpg" class="d-block w-100" alt="antivacuna">
            </div>
            <div class="carousel-item">
              <img src="imagenes/carrusel/menopausia.jpg" class="d-block w-100" alt="menopausia">
            </div>
            <div class="carousel-item">
              <img src="imagenes/carrusel/intoxicacion.jpg" class="d-block w-100" alt="intoxicacion">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
        <!--Articulos resumen del inicio-->
        <!--Tarjeta numero 1 (abajo del carrusel)-->
        <div class="card mb-2 mt-4" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <img src="imagenes/tarjetas/hielo.jpg" class="card-img" alt="hielo">
            </div>
            <div class="col-lg-8">
              <div class="card-body pt-1">
                <h7 class="card-title font-weight-bold">Card title</h7>
                <p class="card-text p-small e-1 text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Tarjeta numero 1 (a la derecha del carrusel)-->
      <div class="col-sm-475">
        <div class="card mb-2" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <img src="imagenes/tarjetas/hielo.jpg" class="card-img" alt="hielo">
            </div>
            <div class="col-lg-8">
              <div class="card-body pt-1">
                <h7 class="card-title font-weight-bold">Card title</h7>
                <p class="card-text p-small e-1 text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
        <!--Tarjeta numero 2 (a la derecha del carrusel)-->
        <div class="card mb-2" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <img src="imagenes/tarjetas/hielo.jpg" class="card-img" alt="hielo">
            </div>
            <div class="col-lg-8">
              <div class="card-body pt-1">
                <h7 class="card-title font-weight-bold">Card title</h7>
                <p class="card-text p-small e-1 text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
        <!--Tarjeta numero 3 (a la derecha del carrusel)-->
        <div class="card mb-2" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <img src="imagenes/tarjetas/hielo.jpg" class="card-img" alt="hielo">
            </div>
            <div class="col-lg-8">
              <div class="card-body pt-1">
                <h7 class="card-title font-weight-bold">Card title</h7>
                <p class="card-text p-small e-1 text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
        <!--Tarjeta numero 4 (a la derecha del carrusel)-->
        <div id="prueba" class="card mb-2" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <img src="imagenes/tarjetas/hielo.jpg" class="card-img" alt="hielo">
            </div>
            <div class="col-lg-8">
              <div class="card-body pt-1">
                <h7 class="card-title font-weight-bold">Card title</h7>
                <p class="card-text p-small e-1 text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <!--1er banner a la derecha-->
      <div class="col-sm-25 text-right pl-2 pr-0">
        <img class="img-fluid publicidad" src="https://via.placeholder.com/230x588">
        </div>
      </div>
      <div class="row p-0">
        <div class="col-md-9 mt-2 pb-0">
            <img class="img-fluid align-self-center" src="https://via.placeholder.com/830x188">
        </div>
        <div class="col-md-3 p-0">
          <div class="embed-container mt-1"> 
          <iframe src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FCaracas&amp;src=NHNtYTF1MTU2c2x0ajliMjBkMmIzdXU2dWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23009688&amp;showNav=1&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0" style="border-width:0" width="400" height="200" frameborder="0" scrolling="no"></iframe>                   
          </div>
        </div>
      </div>
    </div>
   </section>
   
  <section id="Colaboradores">
    
    <div class="container pb-3">
    <div class="row mt-3">
      <div class="col-sm-7">
          <!--Video y descripcion-->
          <div class="row no-gutters">
            <div class="col-lg-6 mb-3 text-center">
            <video class="w-100 h-100" autoplay preload="auto" controls="controls">
                <source src="imagenes/videos/cuellodetexto.webm" type='video/webm'>Tu navegador no puede reproducir el video, por favor actualiza la versión!</video>
            </div>
            <div class="col-lg-6">
              <div class="card-body pt-1">
                <h7 class="card-title font-weight-bold">Card title</h7>
                <p class="card-text p-small e-1 text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
         <!--Carrusel con los destacados de la semana-->
        <div id="carouselIndicators" class="carousel slide w-99" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active w-33">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100 mr-2" alt="antivacuna">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100 mr-2" alt="antivacuna">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100" alt="menopausia">
            </div>
            <div class="carousel-item w-33">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100 mr-2" alt="menopausia">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100 mr-2" alt="antivacuna">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100" alt="menopausia">
            </div>
            <div class="carousel-item w-33">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100 mr-2" alt="intoxicacion">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100 mr-2" alt="antivacuna">
              <img src="imagenes/carrusel/hemosvuelto.jpg" class="d-block w-100" alt="menopausia">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
  <div class="col-sm-25 p-0" style="background-color: rgb(199,237,227)">    
  <div class="margenColaboradores"> </div>  
  <div class="mt-3 text-center pt-1" style="background-color:white;"><h6 class="alert-link">COLABORADORES EN REDACCIÓN</h6></div>
      <div class="vertical-menu m-0">
      <!--  <div class="flechas">
            <span class="up">^</span>
            <span class="down">v</span>
        </div>-->
        <div class="contenedor">
          <div class="row no-gutters active">
            <div class="col-lg-4 mb-4 mr-0 pl-2">
              <img src="imagenes/medicos/ESTEFANY ECHEVERRIA - ECOGRAFISTA.jpg" class="w-90" style="border-radius:50%;" alt="estefany">
            </div>
            <div class="col-lg-8">
              <div class="card-body pt-1 ml-1 pl-1 pr-1">
                <h6 class="card-title font-weight-bold h5 mb-1">Dra. Estefany Echeverria</h6>
                <p class="card-text p-small e-1 text-justify">Médico Ecografista</p>
                <span class="badge badge-info float-right">Sus Articulos</span>
              </div>
            </div>      
          </div>    
      </div>
    </div>
  </div>
    <div class="col-sm-25 pl-2 pr-0">
     <img class="img-fluid publicidad" src="https://via.placeholder.com/230x550">
    </div>
  </div>  
</div>
</section>
<?php include("php/footer.php"); ?>
<!-- JQuery script -->
<script src="js/jQuery.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/myJQuery.js"></script>
</body>
</html>
