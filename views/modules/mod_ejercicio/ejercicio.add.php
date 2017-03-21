<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR EJERCICIOS</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=ejercicio&a=create" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" required>
                </div>
                <div class="form-group">
                    <label for="ejercicio">Ejercicio</label>
                    <input class="form-control" name="data[]" id="ejer" required>
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
                        <th>Ejercicio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 0;
                        foreach ($this->EJmodel->readEjercicio() as $row) {
                            $item++;
                    ?>
                        <tr>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $row["nomEjercicio"]; ?></td>
                            <td><?php echo $row["ejercicio"]; ?></td>
                            <td>
                                <a href="?c=ejercicio&a=update&ejcode=<?php echo $row['cod_ejer'];?>">
                                    <i class="material-icons">border_color</i>
                                </a>
                                <a href="?c=ejercicio&a=delete&ejcode=<?php echo $row['cod_ejer'];?>">
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
