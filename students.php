<?php
 include("header.php");
 $student_loop = students_loop();
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
            <li class="breadcrumb-item"><a href="index">Home</a></li>
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
              <h3 class="card-title">All Student</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Profile</th>
                      <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">Action</th>
                      <th class="border-bottom-0">Email</th>
                      <th class="border-bottom-0">Last Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $ISI = 1;
                        foreach ($student_loop as $data) {
                          $id = $data["id"];
                          $fname = $data["fname"];
                          $lname = $data["lname"];
                          $Name = $fname." ".$lname;
                          $status = $data["status"];
                          $email = $data["email"];
                          $password = $data["password"];
                          $profile_pic = $data["pp_img"];
                          $date = $data["date"];
                          $programe_name = $data["programe_name"];
                          $country = $data["country"];
                          $online_status = $data["online_status"];
                          ?>
                    <tr>
                      <td>
                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="assets/images/students/<?php echo $profile_pic ?>" alt="avatar-img">
                      </td>
                      <td><?php echo $Name ?></td>
                      <td>
                        <div class="btn-list">
                        <?php
                        if($role=="staff"){
                          if($edit_student1=="yes"){
                            ?>
                            <a data-bs-toggle="modal" data-bs-target="#edit_studentMODel_<?php echo $ISI ?>" href="javassript:void(0)"   class="btn  btn-sm btn-primary"><i class="fe fe-user me-2"></i>Edit</a>
                            <?php
                            if($status=="active"){
                                ?>
                              <a href="?status_catch=student&work=inactive&id=<?php echo $id ?>" class="btn btn-sm btn-green">Active</a>
                             <?php
                                 }else{

                                 ?>
                                 <a href="?status_catch=student&work=active&id=<?php echo $id ?>" class="btn btn-sm btn-danger">Inactive</a>
                             <?php
                                }
                                ?>
                            <?php
                          }
                        }else{
                          ?>
                          <a data-bs-toggle="modal" data-bs-target="#edit_studentMODel_<?php echo $ISI ?>" href="javassript:void(0)" class="btn  btn-sm btn-primary"><i class="fe fe-user me-2"></i>Edit</a>
                          <?php
                          if($status=="active"){
                              ?>
                            <a href="?status_catch=student&work=inactive&id=<?php echo $id ?>" class="btn btn-sm btn-green">Active</a>
                           <?php
                               }else{
                               ?>
                               <a href="?status_catch=student&work=active&id=<?php echo $id ?>" class="btn btn-sm btn-danger">Inactive</a>
                            <?php
                              }
                              ?>
                          <?php
                          }
                         ?>
                          <a href="activity?student_id=<?php echo $id ?>" class="btn btn-sm btn-info"> <i class="fa fa-trash"></i> Activity</a>

                          <?php if($role=="admin"){ ?>
                          <a onclick="return confirm('Are you sure delete this ticket?')" href="?delete=students&id=<?php echo $id ?>" style="color:black !important" class="btn btn-sm btn-warning"> <i class="fa fa-trash"></i> Delete</a>
                        <?php } ?>
                          <br>
                          <!-- get_adb_balance -->
                          <?php
                           if($role=="staff"){
                             if($mail_student1=="yes"){
                               ?>
                               <a onclick="send_mail_go('<?php echo $email ?>')" data-bs-toggle="modal"
                               data-bs-target="#SendMail_student" href="javassript:void(0)" class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Send Mail <small>student</small></a>
                               <?php
                             }
                           }else{
                             ?>
                             <a onclick="send_mail_go('<?php echo $email ?>')" data-bs-toggle="modal"
                             data-bs-target="#SendMail_student" href="javassript:void(0)" class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Send Mail <small>student</small></a>
                             <?php
                           }
                           ?>
                        </div>
                      </td>
                      <td><?php echo $email ?></td>
                      <td><?php echo $date ?></td>
                        <!-- model from edit data -->
                      <div class="modal  fade" id="edit_studentMODel_<?php echo $ISI ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                   <h5 class="modal-title p_name">Edit Student</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                   </button>
                                 </div>
                              <form id="form043" method="post" method="post" enctype="multipart/form-data">
                                <div class="modal-body p-0">
                                  <div class="card">
                                    <div class="card-body">
                                    <div class="row">
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label for="logo" class="form-label">First Name</label>
                                          <input type="text" name="f_name" class="form-control" placeholder="First Name" value=" <?php echo $fname ?> " required>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label for="logo" class="form-label">Last Name</label>
                                          <input type="text" name="l_name" class="form-control" placeholder="Last Name" value=" <?php echo $lname ?> ">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label for="mail" class="form-label">Email</label>
                                          <input type="text" name="Email" class="form-control" placeholder="Email ACcount" value=" <?php echo $email ?> " required>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label for="mail" class="form-label">password</label>
                                          <input type="text" name="password" class="form-control" placeholder="Set New Password" value="" >
                                        </div>
                                      </div>

                                      <div class="col-6">
                                        <div class="form-group">
                                          <label for="mail" class="form-label">Profile Picture</label>
                                          <input type="file" name="prfile_pic" class="form-control"  value="">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                            <label for="mail" class="form-label">Programe name<small class="tag tag-danger"></small></label>
                                            <input type="text" name="programe_name" class="form-control" value="<?php echo $programe_name ?>"  placeholder="programe" required>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <label for="mail" class="form-label">Country</label>
                                          <input type="text" name="country" class="form-control" placeholder="country name" value=" <?php echo $country ?> ">
                                        </div>
                                      </div>
                                    </div>
                                      <input  type="hidden" name="go_to_page" value="<?php
                                        echo $page;
                                     ?>">
                                      <input type="hidden" name="ids" value="<?php echo $id ?>">
                                      <input type="submit" class="w-100 btn btn-primary" name="update_student" value="update data" >
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
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
