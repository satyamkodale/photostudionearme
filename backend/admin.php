
<?php
    include("header.php");
?>
    
  <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Welcome <?php echo $data[1];?></h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <button type="button" id="newshop" class="btn btn-outline-success ">ADD NEW SHOP</button>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <script>
            document.getElementById("newshop").addEventListener("click",function(){
                    window.location.href='newshop.php';
            });
        </script>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
       
          <div class="row">
          <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">SHOP LIST</h5>
                </div>
                <table class="table">
                    <?php 
    $result=mysqli_query($con,"select shop_name,shop_address,shop_description from shop_master where user_id=".$_SESSION["user_id"].";");
   
    ?>
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">SHOP NAME</th>
                      <th scope="col">SHOP ADDRESS</th>
                      <th scope="col">SHOP DESCRIPTION</th>
                      <th scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php
                $i=1;
            while( $data=mysqli_fetch_row($result))
            {

                echo "    <tr>
                <th scope='row'>".$i."</th>
                <td>".$data[0]."</td>
                <td>".$data[1]."</td>
                <td>".$data[2]."</td>
                <td>hello</td>
              </tr>
        ";
        $i+=1;
            }
            ?>
                  
                  </tbody>
                </table>
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