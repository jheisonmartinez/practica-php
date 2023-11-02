<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my pet&#180;s app</title>
    <link rel="stylesheet" href="../css/estilosencabezado.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  
</head>
<body >
<?php 
  $url="http://".$_SERVER['HTTP_HOST']."/mypetsapp"
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>My pet's app</a></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $url."/vista/inicio.php";?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url."/vista/mascotas.php";?>">Mis mascotas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url."/vista/adoptame.php";?>">Adoptame</a>
        </li>
        </div>
        </div>
        
      </ul>
     
    </div>
    <div class="dropdown " >
  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" 
          data-bs-toggle="dropdown" aria-expanded="false">
    Usuario
  </button>
  <ul class="dropdown-menu " >
    <li><img src="../imagenes/user.jpg" class="img-fluid rounded-top" alt="50" width="50" id="imagendropdown"></li>
    <li><a class="dropdown-item" href="#">usuario activo</a></li>
    <li><a class="dropdown-item" href="#">actualizar</a></li>
    <div class="divider"></div>
    <li><a class="dropdown-item" href="../Index.php">cerrar sesion</a></li>
  </ul>
</div>
  
</nav>
<div class ="container">
  <br>


    <div class="row">