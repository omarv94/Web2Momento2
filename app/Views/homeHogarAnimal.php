<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar Animal</title>
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/home.css"))?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body>
    <header>
    <div class="menu">
    <ul class="nav">
         <li class="nav-item">
            <a class="nav-link active" href="#">Registro</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo(base_url("public/registro/listar"))?>">Animales</a>
        </li>

        <li class="nav-item">
         <a class="nav-link" href="#">Nosotros</a>
        </li>
    </ul>
    </div>

<div class="container">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo(base_url("public/img/Animales4.png"))?>" class="d-block w-100 imganimales" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Animales4.png"))?>" class="d-block w-100 imganimales" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Animales3.jpg"))?>" class="d-block w-100 imganimales" alt="...">
    </div>
  </div>
</div>
</div>


</header>
    <div class="container">
        <h2>Registro de aimales</h2>
    </div>
    <main class="container">
        <form action="<?php echo(base_url("public/registro/animales"))?>" method="POST">
        <div>
        <section>Nombre de animal</section>
        <input type="text" name="nombre" id="idnombre" class="form" >
        </div>

        <div>
        <section>Comida favorita </section>
        <input type="text" name="comida" id="idcomida" class="form" >
        </div>

        <div>
        <section>Edad</section>
        <input type="number" name="edad" id="idedad" class="form"  >
        </div>

        <div class=select>
        <section>Tipo</section>
        <select  aria-label="Default select example" class="form" name="tipo">
        <option selected>Selecciona un tipo de animal</option>
        <option value="1">Domestico</option>
        <option value="2">Salvaje</option>
        </select>
        </div>

        <div>
        <section>Descripcion</section> 
        <textarea name="descripcion" id="descripcion" rows="3" class="form"></textarea>
        </div>
        
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-success btn-block">registrar</button> 
        </div>  
        </form>
     </main>
   
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>