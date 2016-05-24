<?php
include("../librerias.php");
session_start();




//var_dump($_POST);

if (!isset($_SESSION["oUsuario"])){
	?>
<!-- Reenvio a la página principal-->
<script>
	document.location.href="index.php";
</script>
<?php
}
$valor=$_POST['valor'];
$snom=$_POST['nombre'];
$anio=$_POST['anio'];

$oPro=new Producto($nid=NULL,$snom=NULL,$ntot=NULL,$nano=NULL);

if($oPro->Ingresar($snom,$valor,$anio)) echo "Producto ingresado"; else echo "ERROR";


?>
