<div class="container">   
   
  <h2>Lista de Estudiantes
  </h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nombres</th>

      </tr>
    </thead>
    <tbody>

    <?php
$indice=1;
$total=0;
foreach ($estudiantes->result() as $row) {
?> 
   <tr>
        <td><?php echo $indice;?></td>
        <td><?php echo $row->nombres;?> <?php echo $row->apellidos;?></td>
      </tr>
 <?php
  $indice ++;
}
?>
    </tbody>
  </table>
</div>
</div>