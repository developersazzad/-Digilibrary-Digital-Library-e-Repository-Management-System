<?php if($page=="Dashboard"){
          $page = "index";
      }else{
        $page = $page;
    } ?>

<!-- /=========================Buttom Modal 1 -->
<!-- Crate Stydents -->
<div class="modal  fade" id="CreateStudent" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title p_name">Create Student</h5>
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
                      <input type="text" name="f_name" class="form-control" placeholder="First Name" value="" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="logo" class="form-label">Last Name</label>
                      <input type="text" name="l_name" class="form-control" placeholder="Last Name" value="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Email ACcount" value="" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">password</label>
                      <input type="text" name="password" class="form-control" placeholder="Account Password" value="" required>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">Profile Picture</label>
                      <input type="file" name="prfile_pic" class="form-control" placeholder="prfile ACcount" value="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label for="mail" class="form-label">Programe name<small class="tag tag-danger"></small></label>
                        <input type="text" name="programe_name" class="form-control" placeholder="programe" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">Country</label>
                      <input type="text" name="country" class="form-control" placeholder="country name" value="">
                    </div>
                  </div>
                </div>
                  <input  type="hidden" name="go_to_page" value="<?php
                    echo $page;
                 ?>">
                  <input  type="hidden" name="type" value="create_agent">
                  <input type="submit" class="w-100 btn btn-primary" name="create_student" value="Create Student">
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>


<!-- create Categorys -->
<div class="modal fade" id="CraeteCategory" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title p_name">Create Category</h5>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
             </button>
          </div>
          <form method="post" id="form02" enctype="multipart/form-data">
            <div class="modal-body p-0">
              <div class="card">
                <div class="card-body">
                    <div class="">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="logo" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" placeholder="Category Name" value="">
                          </div>
                        </div>
                        <!-- Additional Note -->
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <input type="hidden"  name="go_to_page" value="<?php echo $page ?>">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="create_category" value="Create Category">
            </div>
          </form>
        </div>
    </div>
</div>


<!-- Create PDFS Model -->
<div class="modal  fade" id="CreatePDF" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title p_name">Create pdf/ebooks</h5>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
             </button>
          </div>
            <form method="post" id="form01" enctype="multipart/form-data">
            <div class="modal-body p-0">
              <div class="card">
                <div class="card-body">
                    <div class="">
                      <div class="row">
                        <div class="col-6 col-md-6 col-lg-3">
                          <div class="form-group">
                            <label for="mail" class="form-label">Ebook/Pdf Autor</label>
                            <input type="text" name="pdf_autor01" class="form-control" placeholder="pdf Name" value="" required>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                          <div class="form-group">
                            <label for="mail" class="form-label">Ebook/Pdf Title</label>
                            <input type="text" id="pdf_title" name="pdf_title01" class="form-control" placeholder="title" value="">
                          </div>
                        </div>
                        <!-- custom fild -->
                        <div class="col-6 col-md-6 col-lg-3">
                          <div class="form-group">
                            <label for="mail" class="form-label">Ebook/Pdf publisher</label>
                            <input type="text" name="pdf_publisher01" class="form-control" placeholder="publisher" value="">
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                          <div class="form-group">
                            <label for="mail" class="form-label">Publishe Year</label>
                            <input type="number" name="publish_year01" class="form-control" placeholder="year"  required>
                          </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                          <div class="form-group">
                            <label for="mail" class="form-label">Ebook/Pdf Cover</label>
                            <input type="file" id="pdf_title" name="pdf_covers01" class="form-control" placeholder="Pakages logo" value="" required>
                          </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                          <div class="form-group">
                            <label class="form-label">Select Category</label>
                            <select name="category_select" class="form-control form-select select2" data-bs-placeholder="Select Country">
                              <?php
                               // category_loop
                               $category_loop = category_loop();
                               foreach ($category_loop as $category) {
                                 $cat_name = $category['name'];
                                 $cat_ids = $category['id'];
                                 ?>
                                 <option value="<?php echo $cat_ids ?>"><?php echo $cat_name ?></option>
                                 <?php
                               }
                               ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                          <div class="form-group">
                            <label for="mail" class="form-label">Uplode Pdf</label>
                             <input type="file" id="pdf_title" name="pdf_file" class="form-control" placeholder="Pakages file" value="">
                          </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                          <div class="form-group">
                            <label for="mail" class="form-label">Pdf link</label>
                             <input type="text" name="pdf_link01" class="form-control" placeholder="pdf link Optional" value="" >
                          </div>
                        </div>
                        <div class="col-12">
                           <input id="go_to_page" type="hidden" name="go_to_page" value="<?php echo $page ?>">
                           <input  type="hidden" name="type" value="create_project">
                           <input class="btn w-100 btn-primary" id="submit01" type="submit" name="pdf_create" value="Create Ebook/pdf">
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>


<!-- Create Staffs -->

<div class="modal  fade" id="CreateStaffs" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title p_name">Create Staff</h5>
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
                      <input type="text" name="f_name" class="form-control" placeholder="First Name" value="" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="logo" class="form-label">Last Name</label>
                      <input type="text" name="l_name" class="form-control" placeholder="Last Name" value="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Email ACcount" value="" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="mail" class="form-label">password</label>
                      <input type="text" name="password" class="form-control" placeholder="Account Password" value="" required>
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
                      <div class="col-md-6 mt-2">
                        <li class="list-group-item">
                          Create Student Access
                          <div class="material-switch pull-right">
                            <input value="create_student" id="create_student" name="create_student_01" type="checkbox">
                            <label for="create_student" class="label-success"></label>
                          </div>
                        </li>
                      </div>
                      <div class="col-md-6 mt-2">
                        <li class="list-group-item">
                          Edit Student Access
                          <div class="material-switch pull-right">
                            <input value="edit_student" id="edit_student" name="edit_student" type="checkbox">
                            <label for="edit_student" class="label-success"></label>
                          </div>
                        </li>
                      </div>
                      <div class="col-md-6 mt-2">
                        <li class="list-group-item">
                          Create Ebook Access
                          <div class="material-switch pull-right">
                            <input value="create_book" id="create_book" name="create_book" type="checkbox">
                            <label for="create_book" class="label-success"></label>
                          </div>
                        </li>
                      </div>
                      <div class="col-md-6 mt-2">
                        <li class="list-group-item">
                          Edit Ebook Access
                          <div class="material-switch pull-right">
                            <input value="edit_book" id="edit_book" name="edit_book" type="checkbox">
                            <label for="edit_book" class="label-success"></label>
                          </div>
                        </li>
                      </div>
                      <div class="col-md-12 mb-4 mt-2">
                        <li class="list-group-item">
                          Mail Student | Notification
                          <div class="material-switch pull-right">
                            <input value="mail_student" id="mail_student" name="mail_student" type="checkbox">
                            <label for="mail_student" class="label-success"></label>
                          </div>
                        </li>
                      </div>
                    </div>

                  </div>

                </div>
                  <input  type="hidden" name="go_to_page" value="<?php
                    echo $page;
                 ?>">
                  <input  type="hidden" name="type" value="create_agent">
                  <input type="submit" class="w-100 btn btn-primary" name="create_staff001" value="Create Staff">
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>


<!-- Send Mail By Student-->
<div class="modal fade" id="SendMail_student" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <?php
                if($role=="student"){
                  $txt = "Send Mail Admin";
                }else{
                  $txt = "Send Mail Student";
                }
               ?>
             <h5 class="modal-title p_name"><?php echo $txt ?></h5>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
             </button>
          </div>
          <form method="post" id="form02" enctype="multipart/form-data">
            <div class="modal-body p-0">
              <div class="card">
                <div class="card-body">
                    <div class="">
                      <div class="row">
                        <div class="col-12">
                          <?php
                            if($role!="student"){
                              ?>
                           <div class="form-group">
                              <label for="logo" class="form-label">Student Email</label>
                              <input type="text" class="form-control" name="email_stu9" id="emails_student3222" placeholder="Student Email" value="" required>
                            </div>
                              <?php
                            }
                           ?>

                          <div class="form-group">
                            <label for="logo" class="form-label">Email Subject</label>
                            <input type="text" class="form-control" name="email_subject9" placeholder="Subject" value="" required>
                          </div>
                          <div class="form-group">
                            <label for="logo" class="form-label">Email Body</label>
                            <textarea name="email_body9" style="min-height:150px" class="form-control" required></textarea>
                          </div>

                        </div>
                        <!-- Additional Note -->
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <input type="hidden"  name="go_to_page" value="<?php echo $page ?>">

                <input type="submit" class="btn btn-primary" name="Send_mail_stu" value="Send Mail">
            </div>
          </form>
        </div>
    </div>
</div>


<!-- View live task -->
<div class="modal  fade" id="viewLiveTask" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title p_name">Live Task</h5>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
             </button>
          </div>
            <div class="modal-body p-0">
              <div class="card">
                <div class="card-body">
                  <!-- task loop -->
                    <div class="btn-group  m-2" role="group">
                       <a href=" ?task=<?php ?>" class="btn-sm btn btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Task Name</a>
                       <a href="!#" class="btn-sm btn btn-primary text-white" >
                         <span aria-hidden="true"><i class="fa fa-tasks"></i></span>
                       </a>
                     </div>
                     <div class="btn-group m-2" role="group">
                        <a href="" class="btn-sm btn btn-primary text-white"><i class="mdi mdi-file-image me-2"></i>Task Name</a>
                        <a href="!#" class="btn-sm btn btn-primary text-white">
                          <span aria-hidden="true"><i class="fa fa-tasks"></i></span>
                        </a>
                      </div>
                    <!-- task loop -->
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- Send EMail -->
<!-- create Categorys -->
<div class="modal fade" id="BookRequest" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title p_name">Create Category</h5>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
             </button>
          </div>
          <form method="post" id="form02" enctype="multipart/form-data">
            <div class="modal-body p-0">
              <div class="card">
                <div class="card-body">
                    <div class="">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="logo" class="form-label">Book Name</label>
                            <input type="text" class="form-control" name="book_name" placeholder="Book Name" value="">
                          </div>
                        </div>
                        <div class="col-12 ">
                          <div class="form-group">
                            <label for="logo" class="form-label">Book Autor</label>
                            <input type="text" class="form-control" name="book_autor" placeholder="Autor Name" value="">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="logo" class="form-label">Book Publish Year</label>
                           <textarea name="details" class="form-control" style="min-height:150px">Why you interested to add this book....</textarea>
                          </div>
                        </div>
                        <!-- Additional Note -->
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <input type="hidden"  name="go_to_page" value="<?php echo $page ?>">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="book_request" value="Send Request">
            </div>
          </form>
        </div>
    </div>
</div>
