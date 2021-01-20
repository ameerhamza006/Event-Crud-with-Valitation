<?php require "header.php"; ?>

<!-- register -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
           
            <div class="card-body px-lg-5 py-lg-5" >
              <div class="text-center text-muted mb-4">
                <small>Register </small>
                <p class="text-danger"><b><?php register(); ?></b></p>
              </div>
              <form method="post" >
             
                <div class="row">

                <div class="form-group mr-4 ml-3">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="fullname" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="designation" placeholder="Destination" type="text">
                  </div>
                </div>
</div>

                
<div class="row">

<div class="form-group mr-4 ml-3">
  <div class="input-group input-group-alternative mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"></span>
    </div>
    <input class="form-control" name="emaill" placeholder="Email" type="text">
  </div>
</div>
<div class="form-group">
  <div class="input-group input-group-alternative mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"></span>
    </div>
    <input class="form-control" placeholder="Phone" name="phonee" type="text">
  </div>
</div>
</div>

                
                <div class="text-center">
                  <button type="submit" name="btn" class="btn btn-primary mt-4">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php require "footer.php"; ?>