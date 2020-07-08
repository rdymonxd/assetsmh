<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto QR Activos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<?php 
    if(isset($_SESSION['administrador'])):
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

  <a class="navbar-brand" href="<?php echo urlsite ?>">QR MINISTERIO DE HIDROCARBUROS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?page=index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=product">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=promotion">Promotion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo urlsite ?>processes/logout.php">Cerrar Session</a>
      </li>
    </ul>
  </div>
</div>
</nav>




<?php endif;?>