<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
       
    <form action="" method="post">

    <div class="mb-3">
      <label for="id" class="form-label">ID:</label>
      <input type="text"
        class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID empleado">
      
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" value="<?php echo $empleado->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Empleado">
      
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $empleado->correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">

    </div>

    <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
    </form>
    </div>
</div>