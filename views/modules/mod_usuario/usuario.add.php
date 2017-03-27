<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR USUARIO</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=usuario&a=create" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="data[]" id="ema" required>
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="form-control" name="data[]" id="con" required>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->USmodel->readRol() as $row) { ?>
                            <option value="<?php echo $row['cod_rol']; ?>"><?php echo $row["rolNom"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Cod_rol</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->USmodel->readCiudad() as $row) { ?>
                            <option value="<?php echo $row['cod_ciudad']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Ciudad</label>
                </div>
                <div class="form-group">
                    <label for="contraseña">Repetir Contraseña</label>
                    <input type="password" class="form-control" name="data[]" id="con" required>
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
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>contraseña</th>
                        <th>cod_rol</th>
                        <th>cod_ciudad</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 0;
                        foreach ($this->USmodel->readUsuario() as $row) {
                            $item++;
                    ?>
                        <tr>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td><?php echo $row["cod_rol"]; ?></td>
                            <td><?php echo $row["cod_ciudad"]; ?></td>
                            <td>
                                <a href="?c=usuario&a=update&uscode=<?php echo $row['cod_usu'];?>">
                                    <i class="material-icons">border_color</i>
                                </a>
                                <a href="?c=usuario&a=delete&uscode=<?php echo $row['cod_usu'];?>">
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
