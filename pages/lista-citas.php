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
                                    <h4 class="m-t-0">Citas medicas</h4>
                                    <div class="table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Area</th>
                                            <th>Medico</th>
                                            <th>Paciente</th>
                                            <th>Asunto</th>
                                            <th>Costo</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarCitas = mysql_query("SELECT a.*, c.*, m.*, p.* FROM areas_medicas as a JOIN calendario_citas as c JOIN medicos as m  JOIN pacientes as p
WHERE a.id_area=m.area_id AND p.paciente_id=c.paciente_id AND m.medico_id=c.medico_id ORDER BY a.id_area DESC");
if(mysql_num_rows($MostrarCitas)>0){
	while($C=mysql_fetch_assoc($MostrarCitas)){
?>
                                        <tr>
                                            <td><?php echo $C["nombre_area"]; ?></td>
                                            <td><?php echo $C["fullname"]; ?></td>
                                            <td><?php echo $C["nombre_completo"]; ?></td>
                                            <td><?php echo $C["title"]; ?></td>
                                            <td>$<?php echo $C["precio_consulta"]; ?></td>
                                            <td><a href="editar-cita.php?id=<?php echo $C["id"]; ?>"><i class="mdi mdi-pencil"></i></a> - <i class="mdi mdi-delete"></i></td>
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