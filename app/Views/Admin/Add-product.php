<?= $this->extend('Admin/Layout')?>
<?= $this->section('content')?>




    <!-- BEGIN: Product Form -->
   
        <form onsubmit="onformsubmit(); " method="POST" class="card" enctype="multipart/form-data" style="text-align: center;">
            <h3>Add product</h3>
            <div class="card-body">
              <div class="row mb-3  mt-3">
                <div class="col-sm-3">
                    <label class="mb-0">Product Image</label>
                </div>
                <div class="col-sm-6 text-secondary">
                    <input type="file" class="form-control" name="product_image">
                </div>
            </div>
            <hr>
            <div class="row mb-3  mt-3">
                <div class="col-sm-3">
                    <label class="mb-0">Name:</label>
                </div>
                <div class="col-sm-6 text-secondary">
                    <input type="text" name='product_name' class="form-control" placeholder="Enter Product name"/></div>
                </div>
                <hr>
                <div class="row mb-3  mt-3">
                    <div class="col-sm-3">
                        <label class="mb-0">Brand:</label>
                    </div>
                    <div class="col-sm-6 text-secondary">
                        <input type="text" name='product_brand' class="form-control" placeholder="Enter Product brand"/></div>
                    </div>
                    <hr>
                    <div class="row mb-3  mt-3">
                        <div class="col-sm-3">
                            <label class="mb-0">RAM:</label>
                        </div>
                        <div class="col-sm-6 text-secondary">
                            <input type="text" name='product_ram' class="form-control" placeholder="Enter Product RAM"/></div>
                        </div>
                        <hr>
                        <div class="row mb-3  mt-3">
                            <div class="col-sm-3">
                                <label class="mb-0">Category:</label>
                            </div>
                            <div class="col-sm-6 text-secondary">
                                <input type="text" name='product_category' class="form-control" placeholder="Enter Product category"/></div>
                            </div>
                            <hr>
                            <div class="row mb-3  mt-3">
                                <div class="col-sm-3">
                                    <label class="mb-0">Quantity:</label>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <input type="text" name="product_quantity" class="form-control" placeholder="Enter Product quantity"/></div>
                                </div>
                                <hr>
                                <div class="row mb-3 mt-3">
                                    <div class="col-sm-3">
                                        <label class="mb-0">Price:</label>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <input type="text" name='product_price' class="form-control" placeholder="Enter Product price" /></div>
                                         </div>
                                        <div class="row mb-3 mt-3">
                                          <div class="col-sm-3"></div>
                                          <div class="col-sm-12 text-secondary">
                                            <br>
                                            <input type="submit" class="btn btn-primary px-4" name="submit" value="Add" style="color: ivory;
  background-color:rgba(22, 74, 244, 0.968) ;"> 
                                            
                                        </div>

                                    </div>
                               
                            </div>
                        </form>
                    

                    <!-- END: Product Form -->          
                            <?=$this->endSection()?>