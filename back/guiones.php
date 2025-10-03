<?php

    $usuario="admin";
    $nombreUsuario="Paco";


    $i=0;
    while($i<=5){
        echo $i;
        $i++;
    }


    $frutas=["limon","pera","fresa"];

    foreach($frutas as $fruta){
        echo $fruta;
    }


    $aArticulo=["nombre"=> "HP 17 notebook","precio"=>500,"url_imagen"=>"https://www.hp.com/es-es/shop/Html/Merch/Images/c08522780_1750x1285.jpg","stock"=>20,"descripcion"=>"Descripción breve"];

    foreach($aArticulo as $p){
        echo $p;
    }

?>

<?php




$aArticulo=["nombre"=> "HP 17 notebook","precio"=>500,"url_imagen"=>"https://www.hp.com/es-es/shop/Html/Merch/Images/c08522780_1750x1285.jpg","stock"=>20,"descripcion"=>"Descripción breve"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Artículo - Producto</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
      <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Imagen del producto" />
      <div class="card-body">
        <h2 class="card-title"></h2>
        <h4 class="text-success">$99.99</h4>
        <p><strong>Stock:</strong> <?php echo $aArticulo["stock"];?></p>
        <p class="card-text"><?php echo $aArticulo["descripcion"];?>
          
        </p>
        <a href="#" class="btn btn-primary">Comprar ahora</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>














<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo$nombreUsuario="Paco"?></title>

  <!-- Bootstrap CSS desde CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MiSitio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>





      <h1><?php if ($usuario=="admin"):  ?>
    
   <!-- Código si la condición es verdadera -->
    <p>Bienvenido administrador</p>
<?php else: ?>


<!-- Código si la condición es falsa -->
    <p>Bienvenido usuario</p>


<?php endif; ?>     </h1>
      <p class="lead">Un proyecto básico con HTML y Bootstrap</p>
    </div>
  </header>

  <!-- Tarjetas -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <!-- Tarjeta 1 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 1">
            <div class="card-body">
              <h5 class="card-title">Título 1</h5>
              <p class="card-text">Descripción breve del contenido de la tarjeta.</p>
              <a href="#" class="btn btn-primary">Leer más</a>
            </div>
          </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 2">
            <div class="card-body">
              <h5 class="card-title">Título 2</h5>
              <p class="card-text">Otra descripción breve del contenido.</p>
              <a href="#" class="btn btn-primary">Leer más</a>
            </div>
          </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 3">
            <div class="card-body">
              <h5 class="card-title">Título 3</h5>
              <p class="card-text">Un tercer ejemplo de contenido en tarjeta.</p>
              <a href="#" class="btn btn-primary">Leer más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 MiSitio. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS desde CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
    
    
    
    
    
    
    
   