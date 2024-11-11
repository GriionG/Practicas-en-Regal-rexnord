<?php 
require 'bd/conexion_bd.php';

$obj = new BD_PDO();
$result = $obj->Ejecutar_Instruccion("select * from items");
header("Content-Type: application/vnd.ms-excel; charset=iso—8859—15");
header("content-Disposition: attachment; filename=items.xls")
?>

<table border="1">
    <caption> ITEMS </caption>    
		     <tr>
			<th>ID</th>
			<th>Item</th>
            <th>Box Depth</th>
            <th>Box Width</th>
            <th>Box Heigth</th>
            <th>MP Width</th>
            <th>MP Heigth</th>
            <th>MP Length</th>
            <th>PRE PKG BOX</th>
            <th>Pallet Depth</th>
            <th>Pallet Width</th>
            <th>Pallet Heigth</th>
            <th>Units Pre Pallet</th>
            <th>Unit Weight</th>
            <th>IDE_BOX</th>
            <th>Pack</th>
			<th>Department</th>   
		          </tr>
                  
		        <?php foreach (@$result as $renglon) { ?>
                
		        <tr>
		<td> <?php echo $renglon[0]; ?> </td>
		<td> <?php echo $renglon[1]; ?> </td>
	   <td> <?php echo $renglon[2]; ?> </td>
      <td> <?php echo $renglon[3]; ?> </td>
      <td> <?php echo $renglon[4]; ?> </td>
      <td> <?php echo $renglon[5]; ?> </td>
      <td> <?php echo $renglon[6]; ?> </td>
      <td> <?php echo $renglon[7]; ?> </td>
      <td> <?php echo $renglon[8]; ?> </td>
      <td> <?php echo $renglon[9]; ?> </td>
      <td> <?php echo $renglon[10]; ?> </td>
      <td> <?php echo $renglon[11]; ?> </td>
      <td> <?php echo $renglon[12]; ?> </td>
      <td> <?php echo $renglon[13]; ?> </td>
      <td> <?php echo $renglon[14]; ?> </td>
      <td> <?php echo $renglon[15]; ?> </td>
	  <td> <?php echo $renglon[16]; ?> </td>

		<?php }  echo '<script>window.location = "index.php"; </script>';?>

	 </table>