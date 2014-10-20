<?php $this->load->view('layout/header')?>

<h1><?php echo $titulo?></h1>
<a href="<?php
echo base_url()?>admin/provincia/agregar"
	class="btn btn-primary">Agregar</a>
<table class="table table-bordered table-striped">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
	</tr>
<?php
foreach ($provincias as $provincia) {
	?><tr>
						<td><?php echo $provincia['id']?></td>
						<td><?php echo $provincia['nombre']?></td>
					</tr><?php
}
?>
</table>
<?php
$this->load->view('layout/footer');
