<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR ALMUERZOS</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=almuerzo&a=create" method="post" onsubmit="return validar();">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" >
                </div>
                <div class="form-group">
                    <label for="desc">Descripción</label>
                    <textarea class="form-control" name="data[]" id="desc" ></textarea>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
<<<<<<< HEAD
                    <a class="btn btn-primary" href="index.php">ATRÁS</a>
                    <button class="btn btn-success"
                    >GUARDAR</button>
=======
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
>>>>>>> refs/remotes/origin/master
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
                        <th>Descripción</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 0;
                        foreach ($this->ALmodel->readAlmuerzo() as $row) {
                            $item++;
                    ?>
                        <tr>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["descripcion"]; ?></td>
                            <td>
                                <a href="?c=almuerzo&a=update&alcode=<?php echo $row['cod_almuerzo'];?>">
                                    <i class="material-icons">border_color</i>
                                </a>
                                <a href="?c=almuerzo&a=delete&alcode=<?php echo $row['cod_almuerzo'];?>">
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
