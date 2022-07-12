<?= $this->extend('Client/layout')?>
<?= $this->section('content')?>

<form class="row g-3">
  <div class="col-md-4">
  <div class="title">Vehicle Year</div>
                
                    <select class="custom-select-box">
                    <option>Choose Year</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
               
  </div>
  <div class="col-md-6">
  <h3>Vehicle Make</h3>
                <div class="vehicleMake">
                    <select class="custom-select-box">
                        <option>Choose Make</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Hyundai</option>
                        <option>Nissan</option>
                        <option>Volkswagen</option>
                        <option>Mercedes</option>
                        <option>Peugot</option>
                        <option>BMW</option>
                    </select>
                </div>
  </div>
  <div class="col-12">
  <div ><h3>Vehicle Mileage</h3></div>
    <input type="text" name="mileage" placeholder="Vehicle Mileage">
  </div>
  <div class="col-12">
  <div ><h3>Appointment Date</h3></div>
                <input type="date" name="bookDate" >
  </div>
  <div class="col-md-6">
  <div class="title"><h3>Preffered Time Frame</h3></div>
                <input type="time" name="bookTime" min="09:00:00"
            max="16:30:00">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>


<?=$this->endSection()?>