<?php
  include("header.php");
  if(isset($_GET['type'])){
    $type = $_GET['type'];
  }
 ?>
<!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <img src="../assets/images/brand/logo.png" class="header-brand-img" alt="">
                </div>
            </div>

            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form" method="post">
                        <span class="login100-form-title pb-0">
                            Enter Verifycation Code.
                        </span>
                        <br>
                      <center>
                        <strong>Check Your Email inbox.A 6 Digit Code Send In Your Email. </strong>
                      </center>
                        <div class="card">
                            <div class="card-body">
                              <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                  <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                      <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                  </a>
                                  <input name="verify_code" class="input100 border-start-0 form-control ms-0" type="number" placeholder="Enter Veryfication Code">
                              </div>
                              <div class="container-login100-form-btn">
                                <input type="hidden" name="type" value="<?php echo $type ?>">
                                  <button name="verify_btn" type="submit" role="button" class="login100-form-btn btn-primary">Verify</button>
                              </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->
<?php
  include("footer.php");
 ?>
