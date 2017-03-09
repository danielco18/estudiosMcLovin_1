<?php $alimento = $this->ALImodel->readAlimentoByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR ALIMENTOS</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=alimento&a=updateData" method="post">
        <div class="form-group">
            <label for"name">Nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $alimento['alimento']; ?>">
        </div>
        <div class="form-group">
            <label for="proteinas">Proteinas</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $alimento['proteinas']; ?>">
        </div>
        <div class="form-group">
            <label for="calorias">Calorias</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $alimento['calorias']; ?>">
        </div>
        <div class="form-group">
            <label for="azucares">Azucares</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $alimento['azucares']; ?>">
        </div>
        <div class="form-group">
            <label for="carbohidratos">Carbohidratos</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $alimento['carbohidratos']; ?>">
        </div>
        <div class="form-group">
            <label for="fibras">Fibras</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $alimento['fibras']; ?>">
        </div>
        <div class="form-group">
            <label for="vitaminas">Vitaminas</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $alimento['vitaminas']; ?>">
        </div>
            <input type="hidden" readonly value="<?php echo $alimento['cod_alimento']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=alimento">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
