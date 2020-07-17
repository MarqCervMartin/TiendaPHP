<?php include("db.php")?>
<?php include("includes/header.php")?>


<div class="container p-4">
    
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save.php" method="POST">
                    
                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Correo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="paterno" class="form-control" placeholder="Apellido Paterno" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="materno" class="form-control" placeholder="Apellido Materno" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha" class="form-control" placeholder="Fecha" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Ocupación</label>
                        <select multiple class="form-control" name="ocupacion" id="exampleFormControlSelect2">
                        <option value="Estudiante">Estudiante</option>
                        <option value="Obrero">Obrero</option>
                        <option value="Empleado">Empleado</option>
                        <option value="Chofer">Chofer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" step="any" name="peso" class="form-control" placeholder="Peso" autofocus>
                    </div>
                    <div class="form-group">
                        <br>
                        Estatura (m): <input type="text" class="sinborde" name="estatura" id="valorEstatura" value="">
                        <br><p></p>
                        <input type="range" step="0.01" min="1.5" max="2.5" value= "1.7"class="form-control-range" id="formControlRange">
                    </div>
                    
                    <input type="submit" class="btn btn-success btn-block" name="guardarUsuario" value="Guardar">

                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM actividades";
                        $resul_Usuarios = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($resul_Usuarios)){ ?>
                            <tr>
                                <td><?php echo $row['usuario']?></td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include("includes/footer.php")?>
