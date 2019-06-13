
  <h1>Registro Nota</h1>

<form action="<?=base_url()?>index.php/estudiantes/Registro">
 <div class="form-group">
   <label for="nombre">Nombre:</label>
   <input type="text" class="form-control" name="nombre">
 </div>
 <div class="form-group">
   <label for="nota">Nota:</label>
   <input type="number" class="form-control" name="nota">
 </div>
 <div class="form-group form-check">
   <label class="form-check-label">
     <input class="form-check-input" type="checkbox"> Remember me
   </label>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form> 
