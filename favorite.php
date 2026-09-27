<?php
 include("header.php");
 $pdfs_loop =  favorite_loop($user_id);

 ?>
 <style style="text/css">
 div#file-datatable-adv_filter {
     position: absolute;
     width: 400px;
 }

 div#file-datatable-adv_filter  input.form-control.form-control {
     width: 460px;
     border: 2px solid #01b7a5 !important;
     background: #3300ff;
     color: white !important;
 }

 div#file-datatable-adv_filter input.form-control.form-control::placeholder {
     color: white !important;
 }
 @media(max-width:768px){
   div#file-datatable-adv_filter {
       position: absolute;
       width: 225px;
       right: 2%;
       bottom: 5%;
   }
   div#file-datatable-adv_filter input.form-control.form-control {
       width: 225px;
       border: 2px solid #01b7a5 !important;
       background: #3300ff;
       color: white !important;
   }
   div#file-datatable-adv_length {
       width: 100px;
   }

   span.select2.select2-container.select2-container--default {
       width: 60px !important;
   }
 }
 </style>
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
                    <h3 class="card-title">Favorite Ebooks/Pdfs</h3>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="file-datatable-adv" class="table table-bordered text-nowrap key-buttons border-bottom">
                        <thead>
                          <tr>
                            <th class="border-bottom-0">Cover</th>
                            <th class="border-bottom-0">Book Info</th>
                            <th class="border-bottom-0">Action+Ebook/Pdfs</th>
                            <th class="border-bottom-0">Category</th>
                            <th class="border-bottom-0">Last Update</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $ISI = 1;
                              foreach ($pdfs_loop as $data) {
                                 $id = $data["book_id"];
                                 $category_id = $data["category_id"];
                                 $category_name = category_name($category_id);
                                 $autor = $data["autor"];
                                 $title = $data["title"];
                                 $publisher = $data["publisher"];
                                 $year = $data["year"];
                                 $book_cover = $data["book_cover"];
                                 $pdf_link_own = $data["pdf_link_own"];
                                 $pdf_link_ext = $data["pdf_link_ext"];
                                if($pdf_link_own!=""){
                                   $p_status = "own";
                                 }else{
                                   $p_status = "ext";
                                 }
                                 $status = $data["status"];
                                 $date = $data["date"];
                                ?>
                          <tr id="tr_<?php echo $id ?>">
                            <td>
                              <img class="avatar squred avatar-xl me-4 p-2 bg-white border" src="assets/images/pdf_covers/<?php echo $book_cover ?>" alt="avatar-img">
                            </td>
                            <td><?php
                              echo "Autor - ".$autor."</br>";
                              echo "Title - ".$title."</br>";
                              echo "Publisher - ".$publisher."</br>";
                              echo "Year - ".$year."</br>";
                            ?></td>
                            <td>
                              <div class="btn-list">
                                <a onclick="remove_favorite('<?php echo $id ?>','<?php echo $user_id ?>')" href="javascript:void(0)" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i>Remove</a>
                              <?php
                                if($pdf_link_own!=""){
                                  $ran_d1 = md5(sha1(rand(123456,98765)));
                                  $ran_d2 = md5(sha1(rand(12344456,9874465)));

                                   ?>
                                   <form action="view" method="post">
                                     <input type="hidden" name="links_gen" value="https://digilibrary.gibsbd.org/function/pdf/web/viewer?file=pdfs">

                                     <input type="hidden" name="back_link" value="favorite">

                                     <input type="hidden" name="Sks_Rsrc_<?php echo $ran_d1 ?>" value="<?php echo $ran_d2 ?>">
                                     <input type="hidden" name="Sks_saltKey_<?php echo $ran_d2 ?>" value="<?php echo $ran_d1 ?>">

                                     <input type="hidden" name="file_name" value="<?php echo $pdf_link_own ?>">

                                     <button class="btn btn-danger btn-sm" type="submit" role="button" name="get_pdf_file">
                                       <i class='fa fa-eye me-2'></i> Pdf/Ebook <small> Hosted</small>
                                     </button>
                                   </form>

                                   <?php
                                 }else{
                                   ?>
                                     <a  href="<?php echo $pdf_link_ext ?>" target="_blank" class="btn btn-success btn-sm"><i class="fe fe-message-circle me-2"></i>Pdf/Ebook <small> External</small></a>
                                   <?php
                                 }
                                 ?>

                              </div>
                            </td>

                            <td><?php echo $category_name ?></td>
                            <td><?php echo $date ?></td>
                            <!-- model edit -->
                            <!-- Create PDFS Model -->
                            <div class="modal  fade" id="Update_pdf__<?php echo $ISI ?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                         <h5 class="modal-title p_name">Update pdf/ebooks</h5>
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
                                                        <input type="text" name="pdf_autor01" class="form-control" placeholder="pdf Name" value="<?php echo $autor ?>" required>
                                                      </div>
                                                    </div>
                                                    <div class="col-6 col-md-6 col-lg-3">
                                                      <div class="form-group">
                                                        <label for="mail" class="form-label">Ebook/Pdf Title</label>
                                                        <input type="text" id="pdf_title" name="pdf_title01" class="form-control" placeholder="title" value="<?php echo $title ?>">
                                                      </div>
                                                    </div>
                                                    <!-- custom fild -->
                                                    <div class="col-6 col-md-6 col-lg-3">
                                                      <div class="form-group">
                                                        <label for="mail" class="form-label">Ebook/Pdf publisher</label>
                                                        <input type="text" name="pdf_publisher01" class="form-control" placeholder="publisher" value="<?php echo $publisher ?>">
                                                      </div>
                                                    </div>
                                                    <div class="col-6 col-md-6 col-lg-3">
                                                      <div class="form-group">
                                                        <label for="mail" class="form-label">Publishe Year</label>
                                                        <input type="number" name="publish_year01" class="form-control" placeholder="Year" value="<?php echo $year ?>" required>
                                                      </div>
                                                    </div>
                      <div class="col-12 col-md-12 col-lg-6">
                          <div class="row">
                            <div class="col-8">
                              <div class="form-group">
                                <label for="mail" class="form-label">Ebook/Pdf Cover</label>
                                <input type="file" id="pdf_title" name="pdf_covers01" class="form-control" placeholder="Pakages logo" value=""  >
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="item">
                                  <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                      <a href="javascript:void(0)"><img src="assets/images/pdf_covers/<?php echo $book_cover ?>" alt="img" height="124" class="w-100"></a>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                          <div class="col-12 col-md-12 col-lg-6">
                            <div class="form-group">
                              <label class="form-label">Select Category</label>
                              <select name="category_id" class="form-control form-select select2" data-bs-placeholder="Select Country">
                            <?php
                             // category_loop
                             $category_loop = category_loop();
                             foreach ($category_loop as $category) {
                               $cat_name = $category['name'];
                               $cat_ids = $category['id'];
                               if($category_id==$cat_ids){
                                 ?>
                                 <option value="<?php echo $cat_ids ?>" selected><?php echo $cat_name ?></option>
                                  <?php
                                }else{ ?>
                               <option value="<?php echo $cat_ids ?>"><?php echo $cat_name ?></option>
                                <?php
                                  }
                                }
                               ?>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6">
                                                      <div class="form-group">
                                                        <label for="mail" class="form-label">Uplode Pdf</label>
                                                         <input type="file" id="pdf_title" name="pdf_file" class="form-control" placeholder="Pakages file" value="">

                                                         <input type="hidden" name="old_pdf_file" value="<?php echo $pdf_link_own ?>">
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
                                                       <input type="hidden" name="ids" value="<?php echo $id ?>">
                                                       <input  type="hidden" name="type" value="create_project">
                                                       <input class="btn w-100 btn-primary" id="submit01" type="submit" name="update_pdf" value="Update Data">
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
                            <!-- model_edits -->
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
