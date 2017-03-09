<?php $ejercicio = $this->EJmodel->readEjercicioByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR EJERCICIO</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=ejercicio&a=updateData" method="post">
        <div class="form-group">
            <label for"name">Nombre</label>
            <input  type="text" class="form-control" name="data[]" value="<?php echo $ejercicio['nomEjercicio']; ?>">
        </div>
            <div class="form-group">
                <label for="ejercicio">Ejercicio</label>
                <input type="text" class="form-control" name="data[]" value="<?php echo $ejercicio['ejercicio']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $ejercicio['cod_ejer']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=ejercicio">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
