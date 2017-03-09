<?php $almuerzo = $this->ALmodel->readAlmuerzoByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR ALMUERZO</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=almuerzo&a=updateData" method="post">
        <div class="form-group">
            <label for"name">Nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $almuerzo['nombre']; ?>">
        </div>
            <div class="form-group">
                <label for="desc">Descripcion</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $almuerzo['descripcion']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $almuerzo['cod_almuerzo']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=almuerzo">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
