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
                                    <h4 class="m-t-0">Medicos</h4>
                                    <div class="table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Area</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarMedicos = mysql_query("SELECT a.*, m.* FROM areas_medicas as a JOIN medicos as m WHERE a.id_area=m.area_id ORDER BY medico_id DESC");
if(mysql_num_rows($MostrarMedicos)>0){
	while($M=mysql_fetch_assoc($MostrarMedicos)){
?>
                                        <tr>
                                            <td><?php echo $M["fullname"]; ?></td>
                                            <td><?php echo $M["nombre_area"]; ?></td>
                                            <td><?php echo $M["email"]; ?></td>
                                            <td><?php echo $M["phone"]; ?></td>
                                            <td><a href="editar-medico.php?id=<?php echo $M["medico_id"]; ?>"><i class="mdi mdi-pencil"></i></a> - <i class="mdi mdi-delete"></i></td>
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