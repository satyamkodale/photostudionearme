<?php
include("header.php");

if(isset($_POST["change"]))
{
    if(mysqli_query($con,"update request_master set request_status=0 where id=".$_POST["change_id"].";"))
    {
        echo "<script>alert('Successfully marked as done');</script>";
    }
    else
    {
        echo "<script>alert('Something went wrong');</script>";
        
    }
}
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
                  <h5 class="card-title mb-0">CUSTOMER LIST</h5>
                </div>
                <table class="table">
                    <?php 
    $result=mysqli_query($con,"select * from request_master where user_id=".$_SESSION["user_id"].";");
   
    ?>
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">SHOP NAME</th>
                      <th scope="col">CUSTOMER NAME</th>
                      <th scope="col">CUSTOMER EMAIL</th>
                      <th scope="col">CUSTOMER PHONE</th>
                      <th scope="col">CUSTOMER SUBJECT</th>
                      <th scope="col">CUSTOMER MESSAGE</th>
                      <th scope="col">ACTION</th>                   
                    </tr>
                  </thead>
                  <tbody>
            <?php
                $i=1;
            while( $data=mysqli_fetch_row($result))
            {
                $shopdata=mysqli_query($con,"select shop_name from shop_master where id=".$data[2]."");
                $shopdata=mysqli_fetch_row($shopdata);
                echo "    <tr>
                <th scope='row'>".$i."</th>
                <td>".$shopdata[0]."</td>
                <td>".$data[3]."</td>
                <td>".$data[4]."</td>
                <td>".$data[5]."</td>
                <td>".$data[6]."</td>
                <td>".$data[7]."</td>
                ";
                
                    if($data[8]==1)
                    {
                    echo"
                    <td><form action='customer.php' method='post'> 
                    <input name='change_id' value='".$data[0]."' hidden>
                    <input type='submit' name='change' class='btn btn-outline-success' value='Mark as Done'>
                </form></td>";
                    }
                    else 
                    {
                        echo"
                        <td>
                        <button class='btn btn-outline-danger'>Visited</button>
                        </td>";

                    }
                echo "</tr>";
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