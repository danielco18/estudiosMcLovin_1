<?php $snack = $this->Smodel->readSnackByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR DESAYUNO</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=snack&a=updateData" method="post">
        <div class="form-group">
            <label for"name">Nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $snack['nombre']; ?>">
        </div>
            <div class="form-group">
                <label for="desc">Descripcion</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $snack['descripcion']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $snack['cod_snack']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=snack">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
