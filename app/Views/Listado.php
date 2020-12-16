<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/listado.css"))?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <header>
    <div class="menu">
    <ul class="nav">
         <li class="nav-item">
            <a class="nav-link active" href="<?php echo(base_url("public/registro"))?>">Registro</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Animales</a>
        </li>

        <li class="nav-item">
         <a class="nav-link" href="#">Nosotros</a>
        </li>
    </ul>
    </div>
    </header>
    <main>
        <div class="container">
            <div  class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($animales as $animal):?>     
                    <div class="col">
                        <div class="card h-100">
                             <img src="..." class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <h5 class="card-title"><?php echo("Nombre: ".$animal["nombre"])?></h5>
                                     <h6 class="card-text"><?php echo("Tipo: ".$animal["tipo"])?></h6>
                                     <h6 class="card-text"><?php echo("Edad: ".$animal["edad"]." Años")?></h6>
                                     <h6 class="card-text"><?php echo("Comida favorita: ".$animal["comida"])?></h6>
                                     <h6 class="card-text"><?php echo("Descripcion: ".$animal["descripcion"])?></h6>
                                        <div>
                                            <a href="<?php echo(base_url("public/registro/eliminar/".$animal["id"]))?>" class="btn btn-danger">Eliminar</a>

                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar<?php echo($animal["id"])?>">
                                                Editar
                                            </button>
                                        </div> 
                                </div>
                        </div>
                        <div class="modal fade" id="editar<?php echo($animal["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edición de animales</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                     </div>
                                 <div class="modal-body">
                         <form action="<?php echo(base_url("public/registro/editar/".$animal["id"]))?>" method="POST">
                            <div class="form-group">
                                 <label>Nombre:</label>
                                 <input type="text" class="form-control" name="nombreEditar" value="<?php echo($animal["nombre"])?>">
                            </div>
                            <div class="form-group">
                                 <label>Comida favorita:</label>
                                 <input type="text" class="form-control"  name="comidaEditar" value="<?php echo($animal["comida"])?>">
                            </div>
                            <div class="form-group">
                                <label>Descripcion:</label>
                                <textarea class="form-control" rows="3"  name="descripcionEditar"> <?php echo($animal["descripcion"])?></textarea>
                             </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                         </form>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                    </div>    
                <?php endforeach ?>               
            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>