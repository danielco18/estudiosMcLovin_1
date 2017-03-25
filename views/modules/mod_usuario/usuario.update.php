<?php $usuario = $this->USmodel->readUsuarioByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR USUARIO</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=usuario&a=updateData" method="post">
        <div class="form-group">
            <label for"nombre">nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $usuario['nombre']; ?>">
        </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $usuario['email']; ?>">
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $usuario['password']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $usuario['cod_usu']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=usuario">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
