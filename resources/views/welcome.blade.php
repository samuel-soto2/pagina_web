<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tours</title>
    
    <<link rel="stylesheet" href="{{ asset('css/style.css') }}">




    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--boostrap-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!--google fonts-->

</head>
 

<body>
 
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>JAMES</span>TOURS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#paquetes">Paquetes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Servicios">Promociones</a>
              </li>
              <!--
              <li class="nav-item">
              <a class="nav-link" href="#Galeria">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li> -->

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Buscar">
              <button class="btn btn-primary" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    

      
      <!--home section stard-->

      <div class="home">
        <div class="content">
          <h5>HUÁNUCO LA CIUDAD DE LA ETERNA PRIMAVERA</h5>
          <h1> ENCANTATE CON <span class="changecontent"></span></h1>
          <p>Conozca Huánuco y sus encantos<br> Ven y vive de esta maravillosa experiencia con JAMES TOURS</p>
          <a href="#book">DISFRUTA</a>
        </div>
      </div>

      <!--home section end-->


      <!-- section book stard -->
      <section class="book" id="book">
        <div class="container">

          <div class="main-text">
            <h1><span>R</span>egistro</h1>
          </div>
          <div class="row">
            <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/negrito.jpg') }}" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <form action="#">
              <input type="text" class="form-control" placeholder="where to" required><br>
              <input type="text" class="form-control" placeholder="How Many" required><br>
              <input type="date" class="form-control" placeholder="Arrivals" required><br>
              <input type="date" class="form-control" placeholder="Leaving" required><br>
              <textarea class="form-control" rows="5" name="text" placeholder="entrer you name & detalles"></textarea><br>
              <input type="submit" value="Aceptar" class="submit" required>

            </form>
          </div>
        </div>
        </div>
      </section>
      <!-- section book end -->



      <!-- section paquetes stard -->

      <section class="paquetes" id="paquetes">
        <div class="container">
          
          <div class="main-text">
            <h1><span>N</span>uestros paquetes y destinos</h1>
          </div>

          <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
              <img src="{{ asset('imagenes/kotosh.jpg') }}" alt="">
              
               <!-- <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/1.webp') }}" alt="">
-->
                <div class="card-body">
                  <h3> KOTOSH </h3>
                  <p>Kotosh, en Huanuco, Perú, es un antiguo sitio arqueológico con un templo destacado llamado "Templo de las Manos Cruzadas". Se cree que data del período Arcaico Tardío (3500-1800 a.C.) y ofrece información sobre la cultura andina temprana.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                  </div>
                  <h6>Precio: <strong>$50.00</strong></h6>
                  <a href="#book">Reserva ahora</a>
                </div>
              </div>

            </div>
          
          </div>
          
        </div>
      </section>

      <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
              <img src="{{ asset('imagenes/cueva.jpg') }}" alt="">
              
               <!-- <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/1.webp') }}" alt="">
-->
                <div class="card-body">
                  <h3> CUEVA DE LAS LECHUZAS </h3>
                  <p>La Cueva de las Lechuzas en Huánuco, Perú, es una cueva conocida por sus pinturas rupestres antiguas y su población de lechuzas. Es importante tanto para la arqueología como para la observación de aves.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                  </div>
                  <h6>Precio: <strong>$100.00</strong></h6>
                  <a href="#book">Reserva ahora</a>
                </div>
              </div>

            </div>
          
          </div>
          
        </div>
      </section>

      <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
              <img src="{{ asset('imagenes/perricholi.jpg') }}" alt="">
              
               <!-- <img src="./images/1.webp" alt="">
                <img src="{{ asset('imagenes/1.webp') }}" alt="">
-->
                <div class="card-body">
                  <h3> LA CASA DE LA PERRICHOLI </h3>
                  <p>La Casa de la Perricholi se encuentra en el distrito de Tomayquichua, que se sitúa en la provincia de Ambo. Esta construcción es una pieza de la primera mitad del siglo XVIII, que por la notable mujer que un día poblara sus ambientes, es considerada hoy en día parte del Patrimonio Monumental de la Nación.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                  </div>
                  <h6>Precio: <strong>$30.00</strong></h6>
                  <a href="#book">Reserva ahora</a>
                </div>
              </div>

            </div>
          
          </div>
          
        </div>
      </section>


      


      <!-- section paquetes end -->

      





      



</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>