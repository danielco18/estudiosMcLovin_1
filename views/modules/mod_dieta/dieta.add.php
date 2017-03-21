<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR DIETA</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=dieta&a=create" method="post">
                <div class="form-group">
                    <label for="dias">Dias</label>
                    <input type="text" class="form-control" name="data[]" id="dia" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="data[]" id="est" required>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readDesayuno() as $row) { ?>
                            <option value="<?php echo $row['cod_desayuno']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Desayuno</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readAlmuerzo() as $row) { ?>
                            <option value="<?php echo $row['cod_almuerzo']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Almuerzo</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readComida() as $row) { ?>
                            <option value="<?php echo $row['cod_comida']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Comida</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readSnack() as $row) { ?>
                            <option value="<?php echo $row['cod_snack']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Snack</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readUsuario() as $row) { ?>
                            <option value="<?php echo $row['cod_usu']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Usuario</label>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <table id="dataTable" class="displat table-hover" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Dias</th>
                        <th>Estado</th>
                        <th>cod_desayuno</th>
                        <th>cod_almuerzo</th>
                        <th>cod_comida</th>
                        <th>cod_snack</th>
                        <th>cod_usu</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 0;
                        foreach ($this->DImodel->readDieta() as $row) {
                            $item++;
                    ?>
                        <tr>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $row["dias"]; ?></td>
                            <td><?php echo $row["estado"]; ?></td>
                            <td><?php echo $row["cod_desayuno"]; ?></td>
                            <td><?php echo $row["cod_almuerzo"]; ?></td>
                            <td><?php echo $row["cod_comida"]; ?></td>
                            <td><?php echo $row["cod_snack"]; ?></td>
                            <td><?php echo $row["cod_usu"]; ?></td>
                            <td>
                                <a href="?c=dieta&a=update&dicode=<?php echo $row['cod_miDieta'];?>">
                                    <i class="material-icons">border_color</i>
                                </a>
                                <a href="?c=dieta&a=delete&dicode=<?php echo $row['cod_miDieta'];?>">
                                    <i class="material-icons">delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
