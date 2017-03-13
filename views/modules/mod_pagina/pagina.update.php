<?php $pagina = $this->Pmodel->readPaginaByCode($field) ?>
<div class="container">
    <div class="col-sm-12">
        <h1>MODIFICAR PAGINA</h1>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <form class="" action="?c=pagina&a=updateData" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['nombre']; ?>">
        </div>
        <div class="form-group">
            <label for="iconos">Iconos</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['iconos']; ?>">
        </div>
        <div class="form-group">
            <label for="menu">Menu</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['menu']; ?>">
        </div>
        <div class="form-group">
            <label for="colores">Colores</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['colores']; ?>">
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['URL']; ?>">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['foto']; ?>">
        </div>
        <div class="form-group">
            <label for="des">Descripcion</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['descripcion']; ?>">
        </div>
        <div class="form-group">
            <label for="botones">Botones</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['botones']; ?>">
        </div>
        <div class="form-group">
            <label for="propiedades">Propiedades</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['propiedades']; ?>">
        </div>
        <div class="form-group">
            <label for="seccion">Seccion</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['secciones']; ?>">
        </div>
        <div class="form-group">
            <label for="imagenes">Imagenes</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['imagenes']; ?>">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="data[]" value="<?php echo $pagina['estado']; ?>">
        </div>
            <input type="hidden" readonly value="<?php echo $pagina['cod_pagina']; ?>" name="data[]">
        <div class="col-sm-888 col-sm-offset-2">
            <a class="btn btn-primary" href="?c=pagina">Atras</a>
            <button class="btn btn-success">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
