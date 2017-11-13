<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");

if(isset($_POST["registrar"])){
	$password_encrypt = md5($_POST["password"]);
	$session = rand(0,10000000000);
	if($_POST["password"]==$_POST["confirm_password"]){
		//Comprobar que no exista un email anteriormente
		$revisar_email = mysql_query("SELECT email FROM medicos WHERE email='".$_POST["email"]."'");
		if(mysql_num_rows($revisar_email)>0){
			echo '<script>alert("El correo seleccionado ya esta en uso");</script>';
		} else {
			//Con clientes y proveedores esto es aceptable porque pueden no contar con un emaill personal o sea el correo de una empresa cuyo dominio sea el mismo
			$datos = mysql_query("INSERT INTO medicos SET area_id='".$_POST["area_id"]."', fullname='".$_POST["fullname"]."', email='".$_POST["email"]."', password='".$password_encrypt."', phone='".$_POST["phone"]."', session='".$session."'");
			/* if($datos){
				echo '<script>alert("Exito");</script>';
			} else {
				echo '<script>alert("Fallo");</script>';
			} */
		}			
	} else {
		echo '<script>alert("La constras&ntilde;as no coinciden");</script>';
	}
} ?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						



                            <div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Agregar medico</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre completo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="" name="fullname" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" class="form-control" value="" name="email" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Contrase&ntilde;a</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="" name="password" required/>
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Confirmar contrase&ntilde;a</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="" name="confirm_password" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="" name="phone" />
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
															echo '<option value="'.$A["id_area"].'">'.$A["nombre_area"].'</option>';
														}
													}?>
													</select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <input type="submit" class="btn btn-primary" name="registrar" value="Registrar" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>

						
                        </div>
                    </div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>

<?php if(isset($_POST["registrar"])){ ?>
<script type="text/javascript" language="javascript">
function swal2Agregado(msAgregado) {
	swal({ 
<?php if($datos){ ?>
		text: "Exito.",
		type: 'success',
		showCancelButton: true,
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

<?php if($_POST["registrar"]){ ?>
<script type="text/javascript">
//<![CDATA[
swal2Agregado('');//]]>
</script>
<?php } } ?>