<?= $this->extend('Employee/listLayout')?>
<?= $this->section('list')?>
<div class="card px-2 pt-2 border-dark mb-3">
<div class="card-header border-dark mb-3">
	<h5>Categories list</h5>
	<h6><a href="<?= base_url('add-category'); ?>" class="btn btn-primary btn-sm float-start" >Add</a></h6>
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
    <tr>    
              <td  align="right" class="style1">Vehicle No:</td>    
              <td class="style1"><input type="text" name="v_id" /></td>
        </tr>
        <tr>    
              <td  align="right" class="style1">Mileage:</td>    
              <td class="style1"><input type="text" name="mileage" /></td>
        </tr>
        <tr>    
              <td  align="right" class="style1">Date:</td>    
              <td class="style1"><input type="text" name="replace_date" /></td>
        </tr>
		<thead>
			<tr>
				<th>Maintenance ID</th>
				<th>Vehicle Registration</th>
                <th>Mileage</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<?php foreach($maintenance as $row){?>
		<tbody>
			<tr>
				<?php echo ' <td>'.$row['m_id'].'</td> '; ?>
                <?php echo ' <td>'.$row['v_plate'].'</td> '; ?>
				<?php echo ' <td>'.$row['mileage'].'</td> '; ?>
				<td>
                                    <a href="<?= base_url('repair-info' . $row['m_id']); ?>" class="btn btn-info" >View Details</a>
                                    <a href="<?= base_url('admin-delete-maintenance' . $row['m_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" >Delete</a>
                                </td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
</div>


<?= $this->endSection()?>