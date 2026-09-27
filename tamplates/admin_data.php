<style type="text/css">
.card.total_ticket {
  background: linear-gradient(45deg, #910606, #2c300082);
  border: 1px solid #ee0000 !important;
  color: white !important;
  font-weight: 800 !important;
}

.card.total_pakages{
    background: linear-gradient(45deg, #2d05f9, #2c300082);
    border: 1px solid #008cee !important;
    color: white !important;
    font-weight: 800 !important;
}
.card.total_win{
  background: linear-gradient(45deg, #f99705, #2c300082);
  border: 1px solid #ee7100 !important;
  color: white !important;
  font-weight: 800 !important;
}
</style>
<?php

if($role == "admin" || $role == "staff"){
  $t_students = admin_data("total_students");
  $t_pdfs = admin_data("total_pdfs");
  $t_staffs = admin_data("total_staffs");
  $t_cat = admin_data("total_category");
  $t_on_stc = admin_data("online_students");
  $t_op_b_c = admin_data("today_open_book_c");
  ?>
  <!-- ROW OPEN -->
  <div class="row">
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card total_ticket">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute circle-icon bg-danger text-center align-self-center box-danger-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-book fs-30  text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">

                            <?php echo $t_pdfs ?>
                         </h2>
                          <h5 class="fw-normal mb-0">Total PDF</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- COL END -->
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute circle-icon bg-info align-items-center text-center box-info-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-vcard fs-30 text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">
                            <?php echo $t_students ?>
                          </h2>
                          <h5 class="fw-normal mb-0">Total Students</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- COL END -->
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute  circle-icon bg-green align-items-center text-center box-green-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-users fs-30 text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">
                          <?php echo $t_staffs ?>
                          </h2>
                          <h5 class="fw-normal mb-0">Total Staff</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- COL END -->
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card total_win">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute circle-icon bg-red align-items-center text-center box-red-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-cubes fs-30 text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">
                             <?php echo $t_cat ?>
                          </h2>
                          <h5 class="fw-normal mb-0">Total Category</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- COL END -->
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card total_pakages">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-wifi  fs-30  text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">
                           <?php echo $t_on_stc ?>
                          </h2>
                          <h5 class="fw-normal mb-0">Online Students</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- COL END -->
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center box-secondary-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-folder-open fs-30 text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">
                            <?php echo $t_op_b_c ?>
                          </h2>
                          <h5 class="fw-normal mb-0">Today Open Book</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- COL END -->
  </div>
  <!-- ROW CLOSED -->
  <?php
}elseif($role == "student"){
  $t_pdfs = admin_data("total_pdfs");
  $t_cat = admin_data("total_category");
  ?>
  <div class="row">
      <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
          <div class="card total_ticket">
              <div class="row">
                  <div class="col-4">
                      <div class="card-img-absolute circle-icon bg-danger text-center align-self-center box-danger-shadow bradius">
                          <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                          <i class="fa fa-book fs-30  text-white mt-4"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="card-body p-4">
                          <h2 class="mb-2 fw-normal mt-2">
                            <?php echo $t_pdfs ?>
                         </h2>
                          <h5 class="fw-normal mb-0">Total PDF</h5>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
            <div class="card total_win">
                <div class="row">
                    <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-red align-items-center text-center box-red-shadow bradius">
                            <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                            <i class="fa fa-cubes fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">
                               <?php echo $t_cat ?>
                            </h2>
                            <h5 class="fw-normal mb-0">Total Category</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-6 col-6 col-xl-3">
            <div class="card total_pakages">
                <div class="row">
                    <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                            <img src="assets/data/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                            <i class="fa fa-heart  fs-30  text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">
                              <?php
                               $fv_book = admin_data("favorite_book","student",$user_id);
                               echo $fv_book;
                               ?>
                            </h2>
                            <h5 class="fw-normal mb-0">Favorite Book</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php
}

 ?>
