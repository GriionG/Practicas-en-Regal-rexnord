
<?php
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();

		@$idis = $_POST['txtid'];
    @$item = $_POST['txtitem'];
    @$boxdep = $_POST['txtbox_depth'];
	@$boxwid = $_POST['txtbox_width'];
	@$boxhei = $_POST['txtbox_heigth'];
	@$mpwid = $_POST['txtmp_width'];
	@$mphei = $_POST['txtmp_heigth'];
	@$mplen = $_POST['txtmp_lenght'];
	@$prepkgbox = $_POST['txtpre_pkg_box'];
	@$palletdep = $_POST['txtpallet_depth'];
	@$palletwid = $_POST['txtpallet_width'];
	@$pallethei = $_POST['txtpallet_heigth'];
	@$unitspre = $_POST['txtunits_pre'];
	@$unitswid = $_POST['txtunits_width'];
	@$idebox = $_POST['txtide_box'];
	@$pack = $_POST['txtpack'];
	@$department = $_POST['txtdepartment'];

         @$result = $obj->Ejecutar_Instruccion("update items set item = '$item', PKG_BOX_DEPTH = '$boxdep', PKG_BOX_WIDTH = '$boxwid'
         , PKG_BOX_HEIGHT = '$boxhei', MP_WIDTH = '$mpwid', MP_HEIGHT = '$mphei', MP_LENGTH = '$mplen'
         , QTY_PER_PKG_BOX = '$prepkgbox', PALLET_DEPTH = '$palletdep', PALLET_WIDTH = '$palletwid', PALLET_HEIGHT = '$pallethei', UNITS_PER_PALLET = '$unitspre'
         , UNIT_WEIGHT = '$unitswid', IDW_BOX = '$idebox', pack = '$pack', department = '$department' WHERE id = '$idis'");

         echo '<script>window.location = "index.php"; </script>';
?>