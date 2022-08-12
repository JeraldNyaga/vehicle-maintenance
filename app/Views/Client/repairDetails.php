<?= $this->extend('Employee/listLayout')?>
<?= $this->section('list')?>
<?= $this->extend('Client/layout')?>
<?= $this->section('content')?>
      <nav class="container-fluid navbar navbar-expand-lg sticky-top navbar-dark py-1" style="background-color:black;  color:#fff;" >
    <div class= "container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo  base_url('assets/HomeImages/logo.png'); ?>" alt="" width="auto" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('client-vehicle-logs'); ?>">Maintenance log</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
            </ul>
            <ul class="navbar-nav d-flex justify-content-end ">
            <?php if (!session()->get('loggedUser')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register-user'); ?>">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login-user'); ?>">Login</a></li>
                <?php endif;?>
                <?php if (session()->get('loggedUser')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('logout-user'); ?>">Logout</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('-profile'); ?>">Welcome <?php 
                echo session()->get("first_name"); ?>,</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>
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
				<th>Next Maintenance</th>
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
				<?php echo ' <td>'.$row['maintenance_date'].'</td> '; ?>
				<td>
                                    <a href="<?= base_url('admin-edit-repair' .$row['hist_id']); ?>" class="btn btn-info" >Edit</a>
									<a href="<?= base_url('admin-delete-repair' . $row['hist_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" >Delete</a>
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