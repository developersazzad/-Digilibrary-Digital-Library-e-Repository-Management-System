<?php
  include("header.php");
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
                            Forgot Password
                        </span>
                        <br>
                      <center>
                        <strong>A Code Send In You Email</strong>
                      </center>
                        <div class="card">
                            <div class="card-body">
                              <div class="wrap-input100 validate-input input-group">
                                  <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                      <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                  </a> 
                                  <input class="input100 border-start-0 form-control ms-0" name="forgat_email" type="email" placeholder="Your Email">
                              </div>
                              <div class="container-login100-form-btn">
                                  <button name="forgat_password" class="login100-form-btn btn-primary">Submit</button>
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
