<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR ALIMENTOS</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=alimento&a=create" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" required>
                </div>
                <div class="form-group">
                    <label for="proteinas">Proteinas</label>
                    <input type="text" class="form-control" name="data[]" id="pro" required></textarea>
                </div>
                <div class="form-group">
                    <label for="calorias">Calorias</label>
                    <input type="text" class="form-control" name="data[]" id="cal" required>
                </div>
                <div class="form-group">
                    <label for="azucares">Azucares</label>
                    <input type="text" class="form-control" name="data[]" id="azu" required>
                </div>
                <div class="form-group">
                    <label for="carbohidratos">Carbohidratos</label>
                    <input type="text" class="form-control" name="data[]" id="car" required>
                </div>
                <div class="form-group">
                    <label for="fibras">Fibras</label>
                    <input type="text" class="form-control" name="data[]" id="fib" required>
                </div>
                <div class="form-group">
                    <label for="vitaminas">Vitaminas</label>
                    <input type="text" class="form-control" name="data[]" id="vit" required>
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
                        <th>Proteinas</th>
                        <th>Calorias</th>
                        <th>Azucares</th>
                        <th>Carbohidratos</th>
                        <th>Fibras</th>
                        <th>Vitaminas</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $item = 0;
                        foreach ($this->ALImodel->readAlimento() as $row) {
                            $item++;
                    ?>
                        <tr>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $row["alimento"]; ?></td>
                            <td><?php echo $row["proteinas"]; ?></td>
                            <td><?php echo $row["calorias"]; ?></td>
                            <td><?php echo $row["azucares"]; ?></td>
                            <td><?php echo $row["carbohidratos"]; ?></td>
                            <td><?php echo $row["fibras"]; ?></td>
                            <td><?php echo $row["vitaminas"]; ?></td>
                            <td>
                                <a href="?c=alimento&a=update&alicode=<?php echo $row['cod_alimento'];?>">
                                    <i class="material-icons">border_color</i>
                                </a>
                                <a href="?c=alimento&a=delete&alicode=<?php echo $row['cod_alimento'];?>">
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
