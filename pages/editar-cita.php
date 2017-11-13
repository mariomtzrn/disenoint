<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");

if(isset($_POST["actualizar"])){
	$datos = mysql_query("UPDATE calendario_citas SET title='".$_POST["title"]."', paciente_id='".$_POST["paciente_id"]."', medico_id='".$_POST["medico_id"]."', precio_consulta='".$_POST["precio_consulta"]."' WHERE id='".$_GET["id"]."'");
	if($datos){
		echo '<script>alert("Exito");</script>';
	} else {
		echo '<script>alert("Fallo");</script>';
	}
}

?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						



                            <div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Editar cliente</h4>

<?php
if(isset($_GET["id"])){
	$MostrarDatos = mysql_query("SELECT a.*, c.*, m.*, p.* FROM areas_medicas as a JOIN calendario_citas as c JOIN medicos as m  JOIN pacientes as p WHERE a.id_area=m.area_id AND p.paciente_id=c.paciente_id AND m.medico_id=c.medico_id AND id='".$_GET["id"]."' ");
	if(mysql_num_rows($MostrarDatos)>0){
	while($info=mysql_fetch_assoc($MostrarDatos)){ ?>
								
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Area (se actualiza al cambiar medico)</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["nombre_area"]; ?>" disabled/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Medico</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="medico_id" required />
													<option value="">Seleccione</option>
														<?php
														$MostrarMedicos = mysql_query("SELECT * FROM medicos ORDER BY medico_id DESC");
														if(mysql_num_rows($MostrarMedicos)>0){
															while($M=mysql_fetch_assoc($MostrarMedicos)){
																if($info["medico_id"]==$M["medico_id"]){ $isSelected = ' selected'; } else { $isSelected=''; }
																	echo '<option value="'.$M["medico_id"].'"'.$isSelected.'>'.$M["fullname"].'</option>';
															}
														} ?>
													</select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Paciente</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="paciente_id" required />
													<option value="">Seleccione</option>
														<?php
														$MostrarPacientes = mysql_query("SELECT * FROM pacientes ORDER BY paciente_id DESC");
														if(mysql_num_rows($MostrarPacientes)>0){
															while($P=mysql_fetch_assoc($MostrarPacientes)){
																if($info["paciente_id"]==$P["paciente_id"]){ $isSelected = ' selected'; } else { $isSelected=''; }
																	echo '<option value="'.$P["paciente_id"].'"'.$isSelected.'>'.$P["nombre_completo"].'</option>';
															}
														} ?>
													</select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Asunto</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["title"]; ?>" name="title" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Costo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["precio_consulta"]; ?>" name="precio_consulta" required />
                                                </div>
                                            </div>											
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>
<?php  } } else { echo '<div class="row">Paciente no encontrado.</div>'; } }  ?>
						
                        </div>
                    </div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>
