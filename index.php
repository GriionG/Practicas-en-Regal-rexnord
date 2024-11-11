<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Inicio</title>

<link rel="icon" href="img/icon.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
<script src="https://kit.fontawesome.com/f7f523ca7f.js" crossorigin="anonymous"></script>
		<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style2.css"/>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min/js"></script>

	<script>
		
        function eliminar(id){
         if (confirm("¿Estas seguro de eliminar el registro?")) {

            window.location = "index.php?id_eliminar=" + id;

         }
      }

      function modificar(id){
         window.location = "index.php?idmodificar=" + id;
      }

		function cerrar_sesion()
		{
			if (confirm("¿Estas seguro de cerrar la sesion")) {
				window.location = "cerrar_sesion.php"
			}
		}
	
</script>
</head>
<body>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<?php 

require 'bd/conexion_bd.php';

$obj = new BD_PDO();
try{
if (isset($_POST['btninsertar'])){
    $idis = $_POST['txtid'];
    $item = $_POST['txtitem'];
    $boxdep = $_POST['txtbox_depth'];
	$boxwid = $_POST['txtbox_width'];
	$boxhei = $_POST['txtbox_heigth'];
	$mpwid = $_POST['txtmp_width'];
	$mphei = $_POST['txtmp_heigth'];
	$mplen = $_POST['txtmp_lenght'];
	$prepkgbox = $_POST['txtpre_pkg_box'];
	$palletdep = $_POST['txtpallet_depth'];
	$palletwid = $_POST['txtpallet_width'];
	$pallethei = $_POST['txtpallet_heigth'];
	$unitspre = $_POST['txtunits_pre'];
	$unitswid = $_POST['txtunits_width'];
	$idebox = $_POST['txtide_box'];
	$pack = $_POST['txtpack'];
	$department = $_POST['txtdepartment'];
    @$result = $obj->Ejecutar_Instruccion("INSERT INTO items(item, PKG_BOX_DEPTH, PKG_BOX_WIDTH, PKG_BOX_HEIGHT, MP_WIDTH, MP_HEIGHT,
	 MP_LENGTH, QTY_PER_PKG_BOX, PALLET_DEPTH, PALLET_WIDTH, PALLET_HEIGHT, UNITS_PER_PALLET, UNIT_WEIGHT, IDW_BOX, pack, department) values('$item','$boxdep',
	 '$boxwid','$boxhei','$mpwid','$mphei','$mplen','$prepkgbox','$palletdep','$palletwid','$pallethei','$unitspre','$unitswid','$idebox','$pack','$department')");
   
    }
	
    else if (isset($_GET['id_eliminar']))
        {
            $id = $_GET['id_eliminar'];
             $obj->Ejecutar_Instruccion("delete from items where id = '$id'");
        }
        if (isset($_POST['btnbuscar'])){
@$buscar = $_POST['txtbuscar'];
		}

else{
$result = $obj->Ejecutar_Instruccion("select * from items");
}

}
catch(Exception $e){

	echo "Exepcion " . $e->getMessage();
	
}

$datos_pack= $obj->Ejecutar_Instruccion("select * from pack");
?>

<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container-fluid">
					<ul class="header-links pull-left">
					</ul>
					<ul class="header-links pull-right">
				</div>
			</div>
			<!-- /TOP HEADER -->

		</header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="index.php"><img width="300px" heigth="120px" alt="logo" src="img/regalrexnord-logo.webp"><a>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      </ul>
    </div>
  </div>
</nav>
<div class="section">
		<div class="container" style="margin-top: 3%; padding">
    <div class="row datos-cent">
    <div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Insertar item</h3>
								<br><br>

	<form action="index.php" method="post" id="frminsertar" name="frminsertar" autocomplete="off" >
		
		<input type="hidden" id="txtid" name="txtid"  class="form-control" placeholder="ID">
		<div class="form-group">
		Item 
		<input type="text" id="txtitem" name="txtitem" class="form-control" placeholder="Item">
		</div> 
		<div class="form-group">
		Box Depth 
		<input type="text" id="txtbox_depth" name="txtbox_depth" class="form-control" placeholder="Box Depth">
		</div>
		<div class="form-group">
		Box Width 
		<input type="text" id="txtbox_width" name="txtbox_width" class="form-control" placeholder="Box Width">
		</div>
    <div class="form-group">
		Box Heigth 
		<input type="text" id="txtbox_heigth" name="txtbox_heigth" class="form-control" placeholder="Box Heigth">
		</div>
    <div class="form-group">
		MP Width
		<input type="number" id="txtmp_width" name="txtmp_width" class="form-control" placeholder="MP Width">
		</div>
    <div class="form-group">
		MP Heigth
		<input type="number" id="txtmp_heigth" name="txtmp_heigth" class="form-control" placeholder="MP Heigth" >
		</div>
    <div class="form-group">
		MP Length
		<input type="number" id="txtmp_lenght" name="txtmp_lenght" class="form-control" placeholder="MP Length" >
		</div>
    <div class="form-group">
		PRE PKG BOX
		<input type="Number" id="txtpre_pkg_box" name="txtpre_pkg_box" class="form-control" placeholder="PRE PKG BOX" pattern="[0-9]+">
		</div>
    <div class="form-group">
		Pallet Depth
		<input type="text" id="txtpallet_depth" name="txtpallet_depth" class="form-control" placeholder="Pallet Depth">
		</div>
    <div class="form-group">
		Pallet Width
		<input type="text" id="txtpallet_width" name="txtpallet_width" class="form-control" placeholder="Pallet Width">
		</div>
    <div class="form-group">
		Pallet Heigth
		<input type="text" id="txtpallet_heigth" name="txtpallet_heigth" class="form-control" placeholder="Pallet Heigth">
		</div>
    <div class="form-group">
		Units Pre Pallet
		<input type="Number" id="txtunits_pre" name="txtunits_pre" class="form-control" placeholder="Units Pre Pallet" pattern="[0-9]+">
		</div>
    <div class="form-group">
		Unit Weight
		<input type="text" id="txtunits_width" name="txtunits_width" class="form-control" placeholder="Units Weight">
		</div>
    <div class="form-group">
		IDE_BOX
		<input type="text" id="txtide_box" name="txtide_box" class="form-control" placeholder="IDE BOX">
		</div>
    <div class="form-group">
		Pack
		<select type="text" class="form-control" name="txtpack" id="txtpack" placeholder="Pack">
        <option disabled selected value="" >Pack</option>
        <option value = "Single Box">Single Box</option>
        <option value = "Bulk Pack Carton">Bulk Pack Carton</option>
        </select>
		</div>
		<div class="form-group">
		Department
		<input type="text" id="txtdepartment" name="txtdepartment" class="form-control" placeholder="Department">
		</div>
    <br><br>
	<div class="datos-cent">
        <button name="btninsertar" id="btninsertar" class="btn btn-primary">Insertar</button>
                           
    </div>

	</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- SECTION -->
<div class="section " >
			<!-- container -->
			

<div class="row datos-cent">
<div class="col-lg-11">
                 <div class="table-responsive-lg">
                  <table class="table table-hover table-bordered" id="myTable">
                  <thead>
		          <tr>
				  <td>ID</td>
			      <td>Item</td>
            <td>Box Depth</td>
            <td>Box Width</td>
            <td>Box Heigth</td>
            <td>MP Width</td>
            <td>MP Heigth</td>
            <td>MP Length</td>
            <td>PRE PKG BOX</td>
            <td>Pallet Depth</td>
            <td>Pallet Width</td>
            <td>Pallet Heigth</td>
            <td>Units Pre Pallet</td>
            <td>Unit Weight</td>
            <td>IDE_BOX</td>
            <td>Pack</td>
			<td>Department</td>
            <td>Acciones</td>     
                        
		          </tr>
                  </thead>
                  <tbody>
		        <?php foreach (@$result as $renglon) { ?>
                
		        <tr>
	  <td><?php echo $renglon[0];?></td>
	  <td><?php echo $renglon[1];?></td>
	  <td><?php echo $renglon[2];?></td>
      <td><?php echo $renglon[3];?></td>
      <td><?php echo $renglon[4];?></td>
      <td><?php echo $renglon[5];?></td>
      <td><?php echo $renglon[6];?></td>
      <td><?php echo $renglon[7];?></td>
      <td><?php echo $renglon[8];?></td>
      <td><?php echo $renglon[9];?></td>
      <td><?php echo $renglon[10];?></td>
      <td><?php echo $renglon[11];?></td>
      <td><?php echo $renglon[12];?></td>
      <td><?php echo $renglon[13];?></td>
      <td><?php echo $renglon[14];?></td>
      <td><?php echo $renglon[15];?></td>
	  <td><?php echo $renglon[16];?></td>
			
           
			<td><a type="button" class="btn btn-danger px-3" id="btneliminar" name="btneliminar" onclick="javascript:eliminar('<?php echo $renglon[0];?>');"><i style="color: white" class="fa fa-trash" aria-hidden="true"></i></a> 
          <a type="button" class=" btn btn-warning  px-3 editbtn" data-toggle="modal" value="Modificar" data-target="#editar"> <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true" ></i> </a></td>
		</tr>
		<?php } ?>

        </tbody>
	 </table>
     </div>
      </div>
	</div>
	</div>
	</div>

	<!-- Modal Editar -->
                  <div class="modal fade" id="editar" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Registro</h5>
                          <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                     <!--formulario-->
                     <form action="FPN-editar.php" method="POST" enctype="multipart/form-data" onsubmit="return validaredit()">
					 <input type="hidden" id="ids" name="txtid"  class="form-control" placeholder="ID">
		<div class="form-group">
		Item 
		<input type="text" id="item" name="txtitem" class="form-control" placeholder="Item" maxlength="30" minlength="5" onkeyup="javascript: sin_epacios(this);" onblur="javascript: verificar_item(this.value)" require>
		</div> 
		<div class="form-group">
		Box Depth 
		<input type="text" id="boxdep" name="txtbox_depth" class="form-control" placeholder="Box Depth">
		</div>
		<div class="form-group">
		Box Width 
		<input type="text" id="boxwid" name="txtbox_width" class="form-control" placeholder="Box Width">
		</div>
    <div class="form-group">
		Box Heigth 
		<input type="text" id="boxhei" name="txtbox_heigth" class="form-control" placeholder="Box Heigth">
		</div>
    <div class="form-group">
		MP Width
		<input type="number" id="mpwid" name="txtmp_width" class="form-control" placeholder="MP Width" maxlength="10" minlength="8">
		</div>
    <div class="form-group">
		MP Heigth
		<input type="number" id="mphei" name="txtmp_heigth" class="form-control" placeholder="MP Heigth" maxlength="10" minlength="8">
		</div>
    <div class="form-group">
		MP Length
		<input type="number" id="mplen" name="txtmp_lenght" class="form-control" placeholder="MP Length" maxlength="10" minlength="8">
		</div>
    <div class="form-group">
		PRE PKG BOX
		<input type="number" id="prepkgbox" name="txtpre_pkg_box" class="form-control" placeholder="PRE PKG BOX" pattern="[0-9]+">
		</div>
    <div class="form-group">
		Pallet Depth
		<input type="text" id="palletdep" name="txtpallet_depth" class="form-control" placeholder="Pallet Depth">
		</div>
    <div class="form-group">
		Pallet Width
		<input type="text" id="palletwid" name="txtpallet_width" class="form-control" placeholder="Pallet Width">
		</div>
    <div class="form-group">
		Pallet Heigth
		<input type="text" id="pallethei" name="txtpallet_heigth" class="form-control" placeholder="Pallet Heigth">
		</div>
    <div class="form-group">
		Units Pre Pallet
		<input type="number" id="unitspre" name="txtunits_pre" class="form-control" placeholder="Units Pre Pallet" pattern="[0-9]+">
		</div>
    <div class="form-group">
		Unit Weight
		<input type="text" id="unitswid" name="txtunits_width" class="form-control" placeholder="Units Weight" >
		</div>
    <div class="form-group">
		IDE_BOX
		<input type="text" id="idebox" name="txtide_box" class="form-control" placeholder="IDE BOX">
		</div>
    <div class="form-group">
		Pack
		<select type="text" id="pack" name="txtpack" class="form-control"  placeholder="Pack" require>
        <option disabled selected value="" >Pack</option>
        <option value = "Single Box">Single Box</option>
        <option value = "Bulk Pack Carton">Bulk Pack Carton</option>
        </select>
		<select name="lstproveedores" id="lstproveedores" class="input">
			<option value="">Seleccione Proveedor</option>
			<?php echo $datos_pack; ?>
		</select>
		</div>
		<div class="form-group">
		Department
		<input type="text" id="depa" name="txtdepartment" class="form-control" placeholder="Department" require>
		</div>

                     <div class="modal-footer datos-cent">
                        <button type="submit" class="btn btn-info" style="color: #fff;">Guardar</button>
                        </div>

                  </div>
                   </form>
                     </div>
                   </div>
                 </div>
               </div>

			   <script>
               $('.editbtn').on('click',function () {

                  $tr=$(this).closest('tr');
                  var datos=$tr.children("td").map(function() {
                   return $(this).text();

                  });
                  
                  $('#ids').val(datos[0]);
                  $('#item').val(datos[1]);
                  $('#boxdep').val(datos[2]);
				  $('#boxwid').val(datos[3]);
                  $('#boxhei').val(datos[4]);
                  $('#mpwid').val(datos[5]);
				  $('#mphei').val(datos[6]);
                  $('#mplen').val(datos[7]);
                  $('#prepkgbox').val(datos[8]);
				  $('#palletdep').val(datos[9]);
                  $('#palletwid').val(datos[10]);
                  $('#pallethei').val(datos[11]);
				  $('#unitspre').val(datos[12]);
                  $('#unitswid').val(datos[13]);
                  $('#idebox').val(datos[14]);
				  $('#pack').val(datos[15]);
				  $('#depa').val(datos[16]);
               });   
               </script>

				<div class=" datos-cent">

		
						<!-- Billing Details -->  
						<a href="generar-excel.php"><button type="button" class="btn btn-success">Generar Excel</button></a>

                     <!-- /Billing Details -->
   				</div>
				
<br><br>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-MX.json'
            }
        });
    });
    
</script>
</body>
</html>