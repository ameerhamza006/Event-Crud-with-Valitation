<?php require "header.php"; error_reporting(0); ?>





<?php if($_GET['Delete']){ 
    
    Delete();
    
    
    ?>



  



    <?php }else if($_GET['Edit']){ 
        
        
        $get_id = $_GET['Edit'];


	$select = "select * from register where id='$get_id'";
	$run = mysqli_query($connect,$select);

	$fetch = mysqli_fetch_array($run);

	$name = $fetch['1'];
	$destination = $fetch['2'];
	$email = $fetch['3'];
	$phone = $fetch['4'];
        
        
        
        
        
        
        ?>





        <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
           
            <div class="card-body px-lg-5 py-lg-5" >
              <div class="text-center text-muted mb-4">
                <small>Or sign up with credentials </small>
                <p class="text-danger"><b><?php Edit(); ?></b></p>
              </div>
              <form method="post" >
             
                <div class="row">

                <div class="form-group mr-4 ml-3">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="efullname" placeholder="Name" value="<?php echo $name; ?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="edesignation" value="<?php echo $destination; ?>"  placeholder="Destination" type="text">
                  </div>
                </div>
</div>

                
<div class="row">

<div class="form-group mr-4 ml-3">
  <div class="input-group input-group-alternative mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"></span>
    </div>
    <input class="form-control" name="eemaill" value="<?php echo $email; ?>"  placeholder="Email" type="text">
  </div>
</div>
<div class="form-group">
  <div class="input-group input-group-alternative mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"></span>
    </div>
    <input class="form-control" placeholder="Phone" value="<?php echo $phone; ?>"  name="ephonee" type="text">
  </div>
</div>
</div>

                
                <div class="text-center">
                  <button type="submit" name="ebtn" class="btn btn-success mt-4">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>





        <?php }else{ ?>

<!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="card bg-secondary shadow border-0">
           
            <div class="card-body px-lg-10 py-lg-5" >
              <div class="text-center text-muted mb-4">
    <small>All Registeration Det </small>
                <p class="text-danger"><b></b></p>
              </div>

                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php view_all(); ?>
    
  </tbody>
</table>


<?php } ?>



              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php require "footer.php"; ?>