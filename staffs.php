<?php
 include("header.php");
  $staff_loop =  staff_loop();
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
      <div class="row row-sm">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Staffs</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Profile</th>
                      <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">Action</th>
                      <th class="border-bottom-0">Access</th>
                      <th class="border-bottom-0">Email</th>
                      <th class="border-bottom-0">Last Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $ISI = 1;
                        foreach ($staff_loop as $data) {
                          $id = $data["id"];
                          $fname = $data["fname"];
                          $lname = $data["lname"];
                          $Name = $fname." ".$lname;
                          $status = $data["status"];
                          $email = $data["email"];
                          $password = $data["password"];
                          $profile_pic = $data["pp_img"];
                          $role = $data['role'];
                          $access = $data['access'];
                          $acc_ex = explode(",",$access);
                          $acc_count = count($acc_ex);
                          $date = $data["date"];
                          ?>
                    <tr>
                      <td>
                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="assets/images/staffs/<?php echo $profile_pic ?>" alt="avatar-img">
                      </td>
                      <td><?php echo $Name ?></td>
                      <td>
                        <div class="btn-list">
                            <a data-bs-toggle="modal" data-bs-target="#EditStaffs_<?php echo $ISI ?>" href="javassript:void(0)"  class="btn btn-sm btn-primary"><i class="fe fe-message-circle me-2"></i>Edit</a>
                          <?php
                           if($status=="active"){
                             ?>
                           <a href="?status_catch=staffs&work=inactive&id=<?php echo $id ?>" class="btn btn-sm btn-green">Active</a>
                          <?php
                              }else{
                                 ?>
                              <a href="?status_catch=staffs&work=active&id=<?php echo $id ?>" class="btn btn-sm btn-danger">Inactive</a>
                          <?php
                             }
                             ?>
                          <a onclick="return confirm('Are you sure delete this ticket?')" href="?delete=staffs&id=<?php echo $id ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</a>
                          <br>
                          <!-- get_adb_balance -->
                          <a onclick="send_mail_go('<?php echo $email ?>')" data-bs-toggle="modal"
                          data-bs-target="#SendMail_student" href="javassript:void(0)" class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Send Mail <small>staff</small></a>
                        </div>
                      </td>
                      <td style="min-width:200px">
                        <div class="tags text-left">
                          <div class="row">
                            <?php
                              for ($is=0; $is < $acc_count; $is++) {
                                $id_a = $acc_ex[$is];
                                $get_acc_name = get_access($id_a);
                                if($is==0){
                                  $cls = 'azure';
                                }elseif($is==1){
                                    $cls = 'cyan';
                                }elseif($is==2){
                                    $cls = 'indigo';
                                }elseif($is==3){
                                    $cls = 'pink';
                                }elseif($is==4){
                                    $cls = 'red';
                                }elseif($is==5){
                                    $cls = 'orange';
                                }elseif($is==6){
                                    $cls = 'green';
                                }elseif($is==7){
                                    $cls = 'teal';
                                }
                                ?>
                                <div class="col-6">
                                  <span class="tag m-1  tag-<?php echo $cls ?>"><?php echo $get_acc_name ?></span>
                                </div>
                                <?php
                              }
                             ?>

                          </div>
                      </div>
                    </td>
                      <td><?php echo $email ?></td>
                      <td><?php echo $date ?></td>

                      <!-- Model From Edit Staff -->

<div class="modal  fade" id="EditStaffs_<?php echo $ISI ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title p_name">Edit Staff Data</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
               </button>
             </div>
          <form id="form0430009" method="post" method="post" enctype="multipart/form-data">
            <div class="modal-body p-0">
              <div class="card">
                <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="logo" class="form-label">First Name</label>
                      <input type="text" name="f_name" class="form-control" placeholder="First Name" value="<?php echo $fname ?>" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="logo" class="form-label">Last Name</label>
                      <input type="text" name="l_name" class="form-control" placeholder="Last Name" value="<?php echo $lname ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Email ACcount" value="<?php echo $email ?>" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">password</label>
                      <input type="text" name="password" class="form-control" placeholder="Rest New Password" value="">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="mail" class="form-label">Profile Picture</label>
                      <input type="file" name="prfile_pic" class="form-control"   value="">
                    </div>
                  </div>
                  <div class="col-12">
                    <h3 class="h3 bg-green bordered p-2">
                      Access On Staff
                    </h3>
                    <div class="row">
                      <?php
                        $cr_stu = "";
                        $edit_stu = "";
                        $cr_b_stu = "";
                        $ed_b_stu = "";
                        $mail_n_stu = "";
                        for ($is=0; $is < $acc_count; $is++) {
                          $id_a = $acc_ex[$is];
                          $get_acc_name = get_access($id_a);
                          if($get_acc_name=="create_student"){
                              $cr_stu = "checked";
                          }
                          if($get_acc_name=="edit_student"){
                              $edit_stu = "checked";
                          }
                          if($get_acc_name=="create_book"){
                              $cr_b_stu = "checked";
                          }
                          if($get_acc_name=="edit_book"){
                              $ed_b_stu = "checked";
                          }
                          if($get_acc_name=="mail_student"){
                              $mail_n_stu = "checked";
                          }
                          if($is==0){
                            $cls = 'azure';
                          }elseif($is==1){
                              $cls = 'cyan';
                          }elseif($is==2){
                              $cls = 'indigo';
                          }elseif($is==3){
                              $cls = 'pink';
                          }elseif($is==4){
                              $cls = 'red';
                          }


                          if($is == ($acc_count-1)){
                            ?>
                            <div class="col-md-6 mt-2">
                              <li class="list-group-item">
                                Create Student Access
                                <div class="material-switch pull-right">
                                  <input value="create_student" id="create_student" name="create_student_01" type="checkbox"  <?php echo $cr_stu ?> checked>
                                  <label for="create_student" class="label-success"></label>
                                </div>
                              </li>
                            </div>
                            <div class="col-md-6 mt-2">
                              <li class="list-group-item">
                                Edit Student Access
                                <div class="material-switch pull-right">
                                  <input value="edit_student" id="edit_student" name="edit_student" type="checkbox" <?php echo $edit_stu ?>>
                                  <label for="edit_student" class="label-success"></label>
                                </div>
                              </li>
                            </div>
                            <div class="col-md-6 mt-2">
                              <li class="list-group-item">
                                Create Ebook Access
                                <div class="material-switch pull-right">
                                  <input value="create_book" id="create_book" name="create_book" type="checkbox" <?php echo $cr_b_stu ?>>
                                  <label for="create_book" class="label-success"></label>
                                </div>
                              </li>
                            </div>
                            <div class="col-md-6 mt-2">
                              <li class="list-group-item">
                                Edit Ebook Access
                                <div class="material-switch pull-right">
                                  <input value="edit_book" id="edit_book" name="edit_book" type="checkbox" <?php echo $ed_b_stu ?>>
                                  <label for="edit_book" class="label-success"></label>
                                </div>
                              </li>
                            </div>
                            <div class="col-md-12 mb-4 mt-2">
                              <li class="list-group-item">
                                Mail Student | Notification
                                <div class="material-switch pull-right">
                                  <input value="mail_student" id="mail_student" name="mail_student" type="checkbox" <?php echo $mail_n_stu ?>>
                                  <label for="mail_student" class="label-success"></label>
                                </div>
                              </li>
                            </div>
                            <?php
                          }

                     }
                    ?>
                    </div>
                  </div>
                </div>

                  <input type="hidden" name="ids" value="<?php echo $id ?>">
                  <input type="submit" class="w-100 btn btn-primary" name="update_staff" value="Update Data">
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>
                      <!-- Model From Edit Staff -->

                    </tr>
                    <?php
                        $ISI++;
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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
