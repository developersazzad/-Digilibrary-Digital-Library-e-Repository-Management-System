<?php
 if($page=="agents"){
   ?>
<!--Withbothoptions offcanvas-->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="marcentEditCanvas" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Marcent Name</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="card-body p-1">
        <form id="form03" method="post" method="post" enctype="multipart/form-data">
          <div class="modal-body p-0">
            <div class="card " style="padding: 10px;border: 1px solid #495057 !important;">
              <div class="card-body p-0">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="mail" class="form-label">Profile Picture</label>
                    <input type="file" name="prfile_pic" class="form-control" placeholder="prfile ACcount" value="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="logo" class="form-label">First Name</label>
                    <input id="mrc_fame" type="text" name="f_name" class="form-control" placeholder="First Name" value="" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="logo" class="form-label">Last Name</label>
                    <input id="mrc_lname" type="text" name="l_name" class="form-control" placeholder="Last Name" value="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="mail" class="form-label">Email</label>
                    <input id="mrc_email" type="text" name="Email" class="form-control" placeholder="Email ACcount" value="" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="mail" class="form-label">Enter New Password</label>
                    <input id="new_password" type="text" name="new_password" class="form-control" placeholder="Account Password" value="">
                    <input id="mrc_password" type="hidden" name="mrc_password" class="form-control" placeholder="Account Password" value="" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="mail" class="form-label">Address</label>
                    <input id="mrc_address" type="text" name="address" class="form-control" placeholder="Marcent Address" value="" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                      <label for="mail" class="form-label">Get Bonus Each Sale<small class="tag tag-danger"></small></label>
                      <input id="mrc_commitions" type="number" name="commitions" class="form-control" placeholder="Enter % Parcentage" value="20" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                      <label for="mail" class="form-label">Total Ticket Sale<small class="tag tag-danger"></small></label>
                      <input id="mrc_ticketsale" type="number" name="mrc_ticketsale" class="form-control" placeholder="Ticket Sale Total" value="20" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="mail" class="form-label">Phone Number</label>
                    <input id="mrc_phone" type="text" name="phone_number" class="form-control" placeholder="Marcent Phone Number" value="">
                  </div>
                </div>
              </div>
                <input id="mrc_id" type="hidden" name="mrc_id" value="">
                <input type="submit" class="btn btn-primary w-100" name="update_marcent" value="Update Data">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
<!--/Withbothoptions offcanvas-->
<?php
}elseif($page=="pakages"){
 ?>
 <!-- data -->
 <!--/Withbothoptions offcanvas-->
<!-- manage user canvas -->
 <?php
}
 ?>
