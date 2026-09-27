<?php
 include("header.php");

 ?>
<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- PAGE-HEADER -->
      <div class="page-header">
        <h1 class="page-title"><?php echo $page ?></h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $page ?></li>
          </ol>
        </div>
      </div>
      <!-- PAGE-HEADER END -->
      <?php
        include($buttons);
      ?>
      <!-- New ROw -->
      <!-- ROW-1 OPEN -->
      <div class="row">
         <div class="col-xl-4">
             <div class="card">
                 <div class="card-header">
                     <div class="card-title">Profile Edit</div>
                 </div>
               <form class="form" method="post">
                 <div class="card-body">
                     <div class="text-center chat-image mb-5">
                         <div class="avatar avatar-xxl chat-profile mb-3 brround">
                             <a class="" href="profile.html"><img alt="avatar" src="../assets/images/students/<?php echo $profile_pic ?>" class="brround"></a>
                         </div>
                         <div class="main-chat-msg-name">
                             <a href="javascript:void(0)">
                                 <h5 class="mb-1 text-dark fw-semibold"><?php echo $full_name ?></h5>
                             </a>
                             <p class="text-muted mt-0 mb-0 pt-0 fs-13"><?php echo $status ?></p>
                         </div>
                     </div>
                     <div class="form-group new_password" style="display:none" >
                         <label class="form-label">New Password</label>
                         <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                             <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                             </a>
                             <input name="new_password" class="input100 form-control" type="password" placeholder="New Password">
                         </div>
                     </div>
                     <div class="form-group new_password" style="display:none" >
                         <label class="form-label">Confirm Password</label>
                         <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                             <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                             </a>
                             <input name="new_password1" class="input100 form-control" type="password" placeholder="Confirm Password">
                         </div>
                     </div>
                 </div>
                 <div class="card-footer text-end">
                     <a onclick="edit_password_show()" href="javascript:void(0)" class="btn btn-danger">Edit Password</a>
                     <button class="btn btn-primary disabled" role="button" id="change_pas_bt" type="submit" name="change_pas_bt">Update</button>
                 </div>
               </form>
             </div>
         </div>


         <div class="col-xl-8">
             <div class="card">
               <form class="" method="post" enctype="multipart/form-data">
                 <div class="card-header">
                     <h3 class="card-title"><span id="p_title">Profile </span> | <span class="tag tag-green">UserId - <?php echo $user_id ?></span></h3>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-lg-6 col-md-12">
                             <div class="form-group">
                                 <label for="exampleInputname12">Frist Name</label>
                                 <input name="frist_name" value="<?php echo $frist_name ?>" type="text" class="form-control all_edit" id="exampleInputname12" placeholder="Enter Last Name" readonly>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-12">
                             <div class="form-group">
                                 <label for="exampleInputname1">Last Name</label>
                                 <input name="last_name" value="<?php echo $last_name ?>" type="text" class="form-control all_edit" id="exampleInputname1" placeholder="Enter Last Name" readonly>
                             </div>
                         </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input name="email"  value="<?php echo $email ?>" type="email" class="form-control all_edit" id="exampleInputEmail1" placeholder="Email address" readonly>
                       </div>
                      </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                         <label for="exampleInputEmail1">Profile Pic</label>
                         <input name="profile_pic"  type="file" class="form-control">
                      </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group">

                          <label for="exampleInputEmail1">Programe Name</label>
                          <input name="programe_name"  value="<?php echo $programe_name ?>" type="text" class="form-control all_edit" id="exampleInputEmail1" placeholder="Email address" readonly>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                         <label for="exampleInputEmail1">Country</label>
                         <input name="country"  value="<?php echo $country ?>" type="text" class="form-control all_edit" id="exampleInputEmail1" placeholder="Email address" readonly>
                    </div>
                   </div>
                  </div>
                 </div>
                 <div class="card-footer text-end">
                     <input type="hidden" name="ids" value="<?php echo $user_id ?>">
                     <a onclick="edit_profile()" href="javascript:void(0)" class="btn btn-danger my-1">Edit Profile</a>
                     <button name="update_profile" type="submit" id="button_update" role="button" class="btn disabled btn-primary my-1">update</button>
                 </div>
             </div>
           </form>
         </div>
      </div>
      <!-- ROW-1 CLOSED -->

      <!-- New ROw -->
    </div>
    <!-- CONTAINER END -->
  </div>
</div>
<!--app-content close-->

</div>
<?php
  include($modal);
  include($footer);
?>
