<?php include("header.php"); ?>
</div><!--/cierra el menu/-->
<div id="body">
<h1>Ordenes de servicio</h1>
<div id="forma">
    <table class="tabla_alex">
      <tr>
        <th>id</th>
        <th>fecha</th>
        <th>precio</th>
        <th>acciones</th>
      </tr>
    <?php //script para mostrar las ordenes de servicio
    $r=mysql_query("SELECT * FROM servicios;");
    while($d=mysql_fetch_assoc($r)){ ?>
      <tr>
        <td><?php echo $d["id"]; ?></td>
        <td><?php echo $d["fecha"]; ?></td>
        <td><?php echo $d["precio"]; ?></td>
        <td><input type="button" value="revisar" onclick="window.location='<?php echo "ordenServicio.php?ID=".$d["id"]; ?>'" /></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
<?php include ('footer.php'); ?>