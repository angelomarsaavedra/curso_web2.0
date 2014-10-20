<?php $this->load->view('layout/header')?>
<h1>Agregar Provincia</h1>
<form action="<?php echo base_url()?>admin/provincia/agregar"
	method="post" role="form">
  <div class="form-group">
    <label for="provincia">Provincia</label>
    <input type="text" class="form-control" name="provincia"
    	id="provincia" placeholder="Escriba el nombre de la Provincia">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="<?php echo base_url()?>admin/provincia/index"
  	class="btn btn-sm btn-default">Cancelar</a>
</form>
<?php
$this->load->view('layout/footer');