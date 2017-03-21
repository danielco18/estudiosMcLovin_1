<?php $dieta = $this->DImodel->readDietaByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR DIETA</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=dieta&a=updateData" method="post">
        <div class="form-group">
            <label for"dias">Dias</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $dieta['dias']; ?>">
        </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $dieta['estado']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $dieta['cod_miDieta']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=dieta">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
