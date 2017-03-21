<?php $rol = $this->Rmodel->readRolByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR ROL</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=rol&a=updateData" method="post">
        <div class="form-group">
            <label for"name">Nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $rol['rolNom']; ?>">
        </div>
            <div class="form-group">
                <label for="rol">Ejercicio</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $rol['estado']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $rol['cod_rol']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=rol">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
