<?= $this->extend('Employee/listLayout')?>
<?= $this->section('list')?>
<div class="card px-2 pt-2 border-dark mb-3">
<div class="card-header border-dark mb-3">
	<h5 style="text-align:center"><?php echo "".$maintenance['v_plate'].""?> Repair log</h5>
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
				<th>Repair ID</th>
				<th>Task</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Repair Date</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<?php foreach($log->getResultArray() as $row){?>
		<tbody>
			<tr>
				<?php echo ' <td>'.$row['hist_id'].'</td> '; ?>
                <?php echo ' <td>'.$row['task_name'].'</td> '; ?>
				<?php echo ' <td>'.$row['product_name'].'</td> '; ?>
                <?php echo ' <td>'.$row['quantity'].'</td> '; ?>
                <?php echo ' <td>'.$row['replace_date'].'</td> '; ?>
				<td>
                                    <a href="<?= base_url('edit-repair' .$row['hist_id']); ?>" class="btn btn-info" >Edit</a>
                                </td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
<div class="d-flex justify-content-end">
<h6><a href="<?= base_url('add-repair'.$maintenance['m_id']); ?>" class="btn btn-primary btn-sm float-start" >Add</a></h6>&nbsp; 
	<h6><a href="<?= base_url('employee-dashboard' .$maintenance['m_id']); ?>" class="btn btn-danger btn-sm float-end" >Back</a></h6>
    </div>
</div>


<?= $this->endSection()?>