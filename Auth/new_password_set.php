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
                    <form method="post" class="login100-form validate-form">
                        <span class="login100-form-title pb-0">
                            Enter New Password
                        </span>
                        <div class="card">
                            <div class="card-body">
                              <div class="wrap-input100 validate-input input-group">
                                  <input name="new_password1" class="form-control ms-0" type="text" placeholder="Type New Password">
                              </div>
                              <div class="wrap-input100 validate-input input-group">
                                  <input name="new_password2" class="form-control ms-0" type="text" placeholder="Retype New Password">
                              </div>
                              <div class="container-login100-form-btn">
                                  <button name="rest_password" type="submit" role="button" class="login100-form-btn btn-primary">Save Changes</button>
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
