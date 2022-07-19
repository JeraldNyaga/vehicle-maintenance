<?= $this->extend('Employee/listLayout')?>
<?= $this->section('list')?>
<div class="card px-2 pt-2 border-dark mb-3">
<div class="card-header border-dark mb-3">
	<h5>Categories list</h5>
	<h6><a href="<?= base_url('employee-dashboard'); ?>" class="btn btn-danger btn-sm float-end" >Back</a></h6>
</div>	
<?php
                    if(session()->has("success")){
                        ?>
                            <div class="alert alert-success">
                                <?= session("success") ?>
                            </div>
                        <?php
                    }
                ?>
<div class="card-body">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Category ID</th>
				<th>Category Name</th>
				
				
			</tr>
		</thead>
		<?php foreach($categories as $row){?>
		<tbody>
			<tr>
				<?php echo ' <td>'.$row['category_id'].'</td> '; ?>
				<?php echo ' <td>'.$row['category_name'].'</td> '; ?>
				
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
</div>


<?= $this->endSection()?>