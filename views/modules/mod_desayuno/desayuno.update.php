<?php $desayuno = $this->DEmodel->readDesayunoByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR DESAYUNO</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=desayuno&a=updateData" method="post">
        <div class="form-group">
            <label for"name">Nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $desayuno['nombre']; ?>">
        </div>
            <div class="form-group">
                <label for="desc">Descripcion</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $desayuno['descripcion']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $desayuno['cod_desayuno']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=desayuno">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
