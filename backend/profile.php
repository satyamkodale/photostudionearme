<?php
    include("header.php");

    $result=mysqli_query($con,"select * from user_master where id=".$_SESSION["user_id"].";");
    $data=mysqli_fetch_row($result);

?>
    
  <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
       
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label" >User name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" placeholder="First Name Here" value="<?php echo $data[1]?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-end control-label col-form-label">Phone Number</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here" value="<?php echo $data[2]?>" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email Id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here" value="<?php echo $data[3]?>" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-end control-label col-form-label">Addhar Number</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here" value="<?php echo $data[4]?>" readonly>
                      </div>
                    </div>

                  <div class="border-top">
                    <div class="card-body">
                      <button type="button" class="btn btn-primary">
                        Submit
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