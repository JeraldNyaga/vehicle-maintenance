<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php if (!empty($page_title)) echo $page_title;?></title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/formStyle.css')?>">
</head>

  
 <div class="container">
<?= $this->renderSection('register')?>
<?= $this->renderSection('login')?>
<?= $this->renderSection('itemForm')?>
<?= $this->renderSection('usersForm')?>
<?= $this->renderSection('categoryForm')?>
<?= $this->renderSection('subCategoryForm')?>
</div>

<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.6.0.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js')?>"></script>
<!-- 
<?= $this->renderSection('scripts')?> -->
</body>
</html>