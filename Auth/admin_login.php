<?php
  $came = "y";
  include("header.php");
  $num1 = rand(1,99);
  $num2 = rand(1,99);
  $placeholder = $num1." + ".$num2." =?";
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
                        <span class="login100-form-title pb-5">
                            Login
                        </span>
                        <div class="card">
                            <div class="card-body">
                              <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                  <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                      <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                  </a>
                                  <input name="email" class="input100 border-start-0 form-control ms-0" type="email" placeholder="Email">
                              </div>
                              <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                  <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                      <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                  </a>
                                  <input name="password" class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password">
                              </div>
                              <div class="row">
                                <div class="col-8">
                                  <div class="form-group" id="Password-toggle">
                                      <input name="result_num" class="form-control" type="text" placeholder="<?php echo $placeholder ?>">
                                  </div>
                                </div>
                                <div class="col-4">
                                  <input class="btn btn-md btn-danger" type="submit" name="forgate_admin" value="forgat">
                                </div>
                              </div>
                              <div class="container-login100-form-btn">
                                 <input type="hidden" name="num1" value="<?php echo $num1 ?>">
                                  <input type="hidden" name="num2" value="<?php echo $num2 ?>">
                                  <button name="admin_login" type="submit" role="button" class="login100-form-btn btn-primary">Login Admin</button>
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
