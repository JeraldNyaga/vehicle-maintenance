<?= $this->extend('Admin/listLayout')?>
<?= $this->section('list')?>
<div class="card px-2 pt-2 border-dark mb-3">
<div class="card-header border-dark mb-3">
	<h5>Users list</h5>
	<h6><a href="<?= base_url('create-user'); ?>" class="btn btn-primary btn-sm float-start" >Add</a></h6>
	<h6><a href="<?= base_url('admin-dashboard'); ?>" class="btn btn-danger btn-sm float-end" >Back</a></h6>
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
				<th>User ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Role</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<?php foreach($users as $row){?>
		<tbody>
			<tr>
				<?php echo ' <td>'.$row['user_id'].'</td> '; ?>
				<?php echo ' <td>'.$row['first_name'].'</td> '; ?>
				<?php echo ' <td>'.$row['last_name'].'</td> '; ?>
				<?php echo ' <td>'.$row['email'].'</td> '; ?>
				<?php echo ' <td>'.$row['gender'].'</td> '; ?>
				<?php echo ' <td>'.$row['role'].'</td> '; ?>
				<td>
                                    <a href="<?= base_url('edit-user' . $row['user_id']); ?>" class="btn btn-info" >Edit</a>
                                    <a href="<?= base_url('delete-user' . $row['user_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                </td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
</div>


<?= $this->endSection()?>