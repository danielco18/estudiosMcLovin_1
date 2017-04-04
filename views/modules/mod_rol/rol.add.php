<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR ROL</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=rol&a=create" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" required>
                </div>
                <div class="form-group">
                    <label for="estatus">Estado</label>
                    <input class="form-control" name="data[]" id="estado" required>
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
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 0;
                        foreach ($this->Rmodel->readRol() as $row) {
                            $item++;
                    ?>
                        <tr>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $row["rolNom"]; ?></td>
                            <td><?php echo $row["estado"]; ?></td>
                            <td>
                                <a href="?c=rol&a=update&rcode=<?php echo $row['cod_rol'];?>">
                                    <i class="material-icons">border_color</i>
                                </a>
                                <a href="?c=rol&a=delete&rcode=<?php echo $row['cod_rol'];?>">
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
