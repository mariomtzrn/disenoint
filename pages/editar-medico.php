<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");

if(isset($_POST["actualizar"])){
	$datos = mysql_query("UPDATE medicos SET area_id='".$_POST["area_id"]."', fullname='".$_POST["fullname"]."', email='".$_POST["email"]."', phone='".$_POST["phone"]."' WHERE medico_id='".$_GET["id"]."'");
	/* if($datos){
		echo '<script>alert("Exito");</script>';
	} else {
		echo '<script>alert("Fallo");</script>';
	} */
}
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						

                            <div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Editar medico</h4>

<?php
if(isset($_GET["id"])){
	$MostrarDatos = mysql_query("SELECT * FROM medicos WHERE medico_id='".$_GET["id"]."' LIMIT 1");
	if(mysql_num_rows($MostrarDatos)>0){
	while($info=mysql_fetch_assoc($MostrarDatos)){ ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre completo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["fullname"]; ?>" name="fullname" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" class="form-control" value="<?php echo $info["email"]; ?>" name="email" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Area medica</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="area_id" required>
													<option value="">Seleccione</option>
													<?php
													$MostrarAreas = mysql_query("SELECT * FROM areas_medicas ORDER BY id_area DESC");
													if(mysql_num_rows($MostrarAreas)>0){
														while($A=mysql_fetch_assoc($MostrarAreas)){
															if($A["id_area"]==$info["area_id"]){ $isSelected=' selected'; } else { $isSelected=''; }
															echo '<option value="'.$A["id_area"].'"'.$isSelected.'>'.$A["nombre_area"].'</option>';
														}
													}?>
													</select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["phone"]; ?>" name="phone" />
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
<?php  } } else { echo '<div class="row">Medico no encontrado.</div>'; } }  ?>
						
                        </div>
                    </div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>

<?php if(isset($_POST["actualizar"])){ ?>
<script type="text/javascript" language="javascript">
function swal2Agregado(msAgregado) {
	swal({ 
<?php if($datos){ ?>
		text: "Exito.",
		type: 'success',
		/*showCancelButton: true,*/
		cancelButtonColor: '#5cb85c',
		cancelButtonText: 'Deseo agregar uno m&aacute;s',
<?php } else { ?>
		text: "Error, por favor intentelo nuevamente.",
		type: 'error',
<?php } ?>
		/*Deshabilita el click fuera del cuadro y que se cierre*/
		allowOutsideClick: false,
		/*Deshabilita la tecla ESC para que no se cierre*/
		allowEscapeKey: false
	})
<?php if($datos){ ?>
	.then(function(){
		setTimeout(function () {
			 window.location.href = "lista-medicos.php";
		}, 1500);
	});
<?php } ?>
}
</script>

<?php if($_POST["actualizar"]){ ?>
<script type="text/javascript">
//<![CDATA[
swal2Agregado('');//]]>
</script>
<?php } } ?>