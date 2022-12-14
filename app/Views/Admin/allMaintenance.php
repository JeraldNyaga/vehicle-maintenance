<?= $this->extend('\admin/listLayout')?>
<?= $this->section('list')?>
<div class="card px-2 pt-2 border-dark mb-3">
<div class="card-header border-dark mb-3">
	<h5>Vehicle maintenance list</h5>
	
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
				<th>Maintenance ID</th>
				<th>Vehicle Registration</th>
                <th>Mileage</th>
				<th>Repair Date</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<?php foreach($maintenance as $row){?>
		<tbody>
			<tr>
				<?php echo ' <td>'.$row['m_id'].'</td> '; ?>
                <?php echo ' <td>'.$row['v_plate'].'</td> '; ?>
				<?php echo ' <td>'.$row['mileage'].'</td> '; ?>
				<?php echo ' <td>'.$row['date'].'</td> '; ?>
				<td>
                                    <a href="<?= base_url('admin-repair-info' . $row['m_id']); ?>" class="btn btn-info" >View Details</a>
                                    <a href="<?= base_url('admin-edit-maintenance' . $row['m_id']); ?>" class="btn btn-primary" >Edit</a>
									<a href="<?= base_url('admin-delete-maintenance' . $row['m_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" >Delete</a>
                                </td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
<div class="d-flex justify-content-end">
<h6><a href="<?= base_url('admin-add-maintenance'); ?>" class="btn btn-primary btn-sm float-start" >Add</a></h6>&nbsp;
	<h6><a href="<?= base_url('admin-dashboard'); ?>" class="btn btn-danger btn-sm float-end" >Back</a></h6>
	</div>
</div>


<?= $this->endSection()?>