<?php include('cabeza.php');?>
<section>
<h2>Profesores</h2>
<?php
$profesores = array_map('str_getcsv', file('data/profesores.csv'));
array_walk($profesores, function(&$a) use ($profesores) {$a = array_combine($profesores[0], $a);});
array_shift($profesores);
$all = count($profesores);
$profesoresd = array_map('str_getcsv', file('data/profesoresdocente.csv'));
array_walk($profesoresd, function(&$a) use ($profesoresd) {$a = array_combine($profesoresd[0], $a);});
array_shift($profesoresd);
$all = count($profesoresd);
$profesoreso = array_map('str_getcsv', file('data/profesoresordinarios.csv'));
array_walk($profesoreso, function(&$a) use ($profesoreso) {$a = array_combine($profesoreso[0], $a);});
array_shift($profesoreso);
$all = count($profesoreso);
?>
<h4>1. Total de profesores que aportan a la carrera de diseño, y sus categorías académicas</h4>
<table class="table table-condensed">
  <tr>
    <th>Profesor</th>
    <th>Categoría académica</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo $profesores[$a]["Nombres"]." ".$profesores[$a]["Apellidos"]?></td>
    <td><?php echo$profesores[$a]["Categoría"]?></td>
  </tr>
<?php };?>
</table>
<p>Tabla representada en un Alluvial Diagram.</p>
<img src="images/categoria.png" class="img-responsive">
<h4>2. Académicos en carrera ordinaria, rangos y horas de trabajo</h4>
<table class="table table-condensed">
  <tr>
<th>Profesor</th>
<th>Rango</th>
<th>Horas</th>
</tr>
<?php for($a=0; $a < $all; $a++){?>
<tr>
<td><?php echo $profesoreso[$a]["Nombres"]." ".$profesoreso[$a]["Apellidos"]?></td>
<td><?php echo$profesoreso[$a]["Rango"]?></td>
<td><?php echo$profesoreso[$a]["Horas"]?></td>
</tr>
<?php };?>
</table>
<p>Tabla representada en un Cluster Diagram.</p>
<img src="images/ordinaria.png" class="img-responsive">
<h4>3. Académicos en carrera docente, rangos y horas de trabajo</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<table class="table table-condensed">
  <tr>
    <th>Profesor</th>
    <th>Rango</th>
    <th>Horas</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo $profesoresd[$a]["Nombres"]." ".$profesoresd[$a]["Apellidos"]?></td>
    <td><?php echo$profesoresd[$a]["Rango"]?></td>
    <td><?php echo$profesoresd[$a]["Horas"]?></td>
  </tr>
<?php };?>
</table>
<p>Tabla representada en un Cluster Diagram.</p>
<img src="images/docente.png" class="img-responsive">
<h4>4. Grados académicos</h4>
<p>Reemplace este párrafo con un gráfico que presente a los profesores (excluya intructores, ayudantes y docentes invitados). Conecte a los profesores con sus grados académicos (licenciado, magíster, doctor, post-doctorado), y luego conecte el grado con su rango (1 pto.)</p>
<p>Tabla representada en un Cluster Diagram.</p>
<img src="images/grado.png" class="img-responsive">
</section>
<?php include('pie.php');?>
