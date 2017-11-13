<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Pacientes</h4>
                                    <div class="table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
											<th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarPacientes = mysql_query("SELECT * FROM pacientes ORDER BY paciente_id DESC");
if(mysql_num_rows($MostrarPacientes)>0){
	while($P=mysql_fetch_assoc($MostrarPacientes)){
?>
                                        <tr>
                                            <td><?php echo $P["nombre_completo"]; ?></td>
                                            <td><?php echo $P["phone"]; ?></td>
                                            <td><?php echo $P["email"]; ?></td>
                                            <td><a href="editar-paciente.php?id=<?php echo $P["paciente_id"]; ?>"><i class="mdi mdi-pencil"></i></a> - <i class="mdi mdi-delete"></i></td>
                                        </tr>
<?php } } ?>
                                        </tbody>
                                    </table>

									
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>