<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");

if(isset($_POST["actualizar"])){
	$datos = mysql_query("UPDATE pacientes SET 
	nombre_completo='".$_POST["nombre_completo"]."', 
	fecha_nacimiento='".$_POST["fecha_nacimiento"]."', 
	genero='".$_POST["genero"]."', 
	tipo_sangre='".$_POST["tipo_sangre"]."', 
	alergia='".$_POST["alergia"]."', 
	phone='".$_POST["phone"]."',
	email='".$_POST["email"]."',
	address='".$_POST["address"]."'
	WHERE paciente_id='".$_GET["id"]."'");
/*	if($datos){
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
                                <h4 class="m-b-20 header-title">Editar cliente</h4>

<?php
if(isset($_GET["id"])){
	$MostrarDatos = mysql_query("SELECT * FROM pacientes WHERE paciente_id='".$_GET["id"]."' LIMIT 1");
	if(mysql_num_rows($MostrarDatos)>0){
	while($info=mysql_fetch_assoc($MostrarDatos)){ ?>
								
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre completo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["nombre_completo"]; ?>" name="nombre_completo" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Fecha nacimiento</label>
                                                <div class="col-md-10">
                                                    <input type="date" id="example-email" class="form-control" value="<?php echo $info["fecha_nacimiento"]; ?>" name="fecha_nacimiento" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Genero</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="genero" required>
														<option value="">Seleccione</option>
														<option value="Hombre"<?php if($info["genero"]=='Hombre'){ echo ' selected'; } ?>>Hombre</option>
														<option value="Mujer"<?php if($info["genero"]=='Mujer'){ echo ' selected'; } ?>>Mujer</option>
													</select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tipo de sangre</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["tipo_sangre"]; ?>" name="tipo_sangre" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alergia</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["alergia"]; ?>" name="alergia" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["phone"]; ?>" name="phone" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" class="form-control" value="<?php echo $info["email"]; ?>" name="email" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Direccion</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="address" ><?php echo $info["address"]; ?></textarea>
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
			 window.location.href = "lista-pacientes.php";
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