<?php
    include("header.php");
?>
    
  <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
       
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
       
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal" method="POST" action="process.php" enctype="multipart/form-data">
                  <div class="card-body">
                    <h4 class="card-title">SHOP REGISTRATION</h4>
                    <div class="form-group row">
                      <label for="shopname" class="col-sm-3 text-end control-label col-form-label">Shop name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="shopname" name="shop_name" placeholder="Shop name here" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="shopaddress" class="col-sm-3 text-end control-label col-form-label">Shop Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="shopaddress" name="shop_address" placeholder="Shop Address here" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="shopdesc" class="col-sm-3 text-end control-label col-form-label">Shop Description</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="shopdesc" name="shop_description" placeholder="Short description about your shop" required>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="shoplogo" class="col-sm-3 text-end control-label col-form-label">Shop Logo</label>
                      <div class="col-sm-9">
                        <input type="file" id="shop_logo" name="shop_logo" placeholder="Upload your shop logo here" required>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="glink" class="col-sm-3 text-end control-label col-form-label">Shop Google Map Link</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="glink" name="glink" placeholder="Google Map Link Here" required>
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label for="instalink" class="col-sm-3 text-end control-label col-form-label">Shop Instagram Page Link</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="instalink" name="instalink" placeholder="Instagram Page Link Here" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="fblink" class="col-sm-3 text-end control-label col-form-label">Shop Facebook Page Link</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fblink" name="fblink" placeholder="Facebook Page Link Here" required>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="pinlink" class="col-sm-3 text-end control-label col-form-label">Shop Pinterest Page Link</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="pinlink" name="pinlink" placeholder="Pinterest Page Link Here" required>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="opentime" class="col-sm-3 text-end control-label col-form-label">Shop Opening Time</label>
                      <div class="col-sm-9">
                        <input type="time" class="form-control" id="opentime" name="opentime" placeholder="Shop Opening time" required>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="closetime" class="col-sm-3 text-end control-label col-form-label">Shop Closing Time</label>
                      <div class="col-sm-9">
                        <input type="time" class="form-control" id="closetime" name="closetime" placeholder="Shop Closing time " required>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="prefer" class="col-sm-3 text-end control-label col-form-label">Preference Photo Shoot location</label>
                      <div class="col-sm-9">
                        <select  class="form-control" id="prefer" name="prefer" required>
                        <option value="1">In Door </option>
                        <option value="2">Out Door </option>
                        <option value="3">Both </option>
                        </select>
                      </div>
                    </div>
                                        
                


                    <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Photography Services you Provide</label>
                    <div class="col-md-9">
                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="wedphoto" name="wedphoto">
                        <label class="form-check-label mb-0" for="wedphoto">Wedding Photography</label>
                      </div>
                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="portraitphoto" name="portraitphoto">
                        <label class="form-check-label mb-0" for="portraitphoto">Portrait Photography</label>
                      </div>
                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="birthphoto" name="birthphoto">
                        <label class="form-check-label mb-0" for="birthphoto">Birthday Shoots</label>
                      </div>
                      
                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="eventphoto" name="eventphoto">
                        <label class="form-check-label mb-0" for="eventphoto">Event Photography</label>
                      </div>

                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="sportsphoto" name="sportsphoto">
                        <label class="form-check-label mb-0" for="sportsphoto">Sports Photography</label>
                      </div>

                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="archphoto" name="archphoto">
                        <label class="form-check-label mb-0" for="archphoto">Architectural Photography</label>
                      </div>
                      
                      <div class="form-check mr-sm-2">
                        <input type="checkbox" class="form-check-input" id="productphoto" name="productphoto">
                        <label class="form-check-label mb-0" for="productphoto">Product Photography</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                      <label for="prefer" class="col-sm-3 text-end control-label col-form-label">Which is Your Speciality</label>
                      <div class="col-sm-9">
                        <select  class="form-control" id="specification" name="specification" required>
                        <option value="Wedding Photography">Wedding Photography </option>
                        <option value="Portrait Photography">Portrait Photography </option>
                        <option value="Birthday Photography">Birthday Photography </option>
                        <option value="Event Photography">Event Photography </option>
                        <option value="Sports Photography">Sports Photography </option>
                        <option value="Architectural Photography">Architectural Photography </option>
                        <option value="Product Photography">Product Photography </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="shoplogo" class="col-sm-3 text-end control-label col-form-label">Upload sample images to display</label>
                      <div class="col-sm-9">
                        <input type="file" multiple="multiple" class="custom-file-input" id="samplephoto" name="samplephoto[]" placeholder="Upload your shop logo here" required>
                      </div>
                    </div>

                  <div class="border-top">
                    <div class="card-body">
                      <button type="submit" name="submitform" class="btn btn-primary">
                        Register Shop
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              
             
            </div>
        </div>


          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <?php

    include("footer.php");






?>