<style type="text/css">
  img.image_bstavatar.cover-image.avatar-md {
    width: 50px !important;
    height: 30px !important;
  }
  .card.overflow-hidden .icons button,.card.overflow-hidden .icons a {
    position: absolute !important;
    top: 62% !important;
    right: 2% !important;
    padding: 4px 2px !important;
    color: white !important;
}

/* student style */
ul#ul_sp_s a.favorite_id,ul#ul_sp_s a.favorite_is {
    top: 49% !important;
    background:#1170e4!important;
    padding:4px 2px !important;
    border-radius: 2px;
    transition: 0.5s ease;
}


ul#ul_sp_s a.favorite_id i.fe.fe-heart,ul#ul_sp_s a.favorite_is i.fe.fe-heart {
    padding: 4px 4px !important;
    border-radius: 4px !important;
}

ul#ul_sp_s a.favorite_id:hover {
    background: #b50303!important;
}
ul#ul_sp_s a.favorite_is:hover {
    background: #1170e4 !important
}
ul#ul_sp_s a.favorite_is {
    background: #b50303!important;
}
ul#ul_sp_s a.color_sets {
    background: #b50303!important;
}
ul#ul_sp_s a.color_sets1 {
    background: #1170e4!important;
}
</style>

<!-- acc systrem data -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">System Data</h3>
      </div>
      <div class="card-body">
        <div class="panel-group1" id="accordion1">

          <?php
            if($role == "admin"){
              ?>
          <!-- notification Panel -->
          <div class="panel panel-default mb-4">
            <div class="panel-heading1 ">
              <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTow" aria-expanded="true" contenteditable="false" style="cursor: pointer;">Notification Panel</a>
              </h4>
            </div>
            <div id="collapseTow" class="panel-collapse show" role="tabpanel" aria-expanded="false" style="">
              <div class="panel-body">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $notice = live_notice();
                    $notice_title = $notice["notice_title"];
                    $notice_body = $notice["notice_body"];
                    $date_sp = $notice["date"];
                     ?>
                    <form method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Notice Title</label>
                            <input name="notice_title" value="<?php echo $notice_title ?>" type="text" class="form-control  " id="site_title" placeholder="notice title"  >
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Notice Body</label>
                            <textarea name="notice_body"  class="content5 form-control" style="min-height:160px"><?php echo $notice_body ?></textarea>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <h4 class="bg-green p-2 w-100">Last Update Date - <?php echo $date_sp ?> </h4>
                        </div>
                      </div>
                      <div class="d-inline justify-content-end">
                        <input type="submit" class="mt-5 btn btn-primary" name="update_notice" value="Save Data">
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- notification Panel -->
          <!-- smtp for mail -->
          <div class="panel panel-default mb-4">
            <div class="panel-heading1 ">
              <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne" aria-expanded="false" contenteditable="false" style="cursor: pointer;">SMTP For Send Mail</a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="">
              <div class="panel-body">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $smtp = SMTP_DETAILS();
                    $host = $smtp["host"];
                    $email = $smtp["email"];
                    $password = $smtp["password"];
                    $port = $smtp["port"];
                    $date_smtp = $smtp["date"];
                     ?>
                    <form method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">SMTP Host</label>
                            <input name="smtp_host" value="<?php echo $host ?>" type="text" class="form-control attr_set_site01" id="site_title" placeholder="smtp host" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">SMTP Port</label>
                            <input name="smtp_port" type="text" class="form-control attr_set_site01" id="exampleInputPassword1" placeholder="site link" value="<?php echo $port ?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">SMTP Email</label>
                            <input name="smtp_email" type="text" class="form-control attr_set_site01" id="exampleInputPassword1" placeholder="site link" value="<?php echo $email ?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">SMTP Password</label>
                            <input name="smtp_pass" type="text" class="form-control attr_set_site01" id="exampleInputPassword1" placeholder="smtp Password" value="<?php echo $password ?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <h4 class="bg-green p-2 w-100">Last Update Date - <?php echo $date_smtp ?> </h4>
                        </div>
                      </div>
                      <div class=" d-inline justify-content-end">
                        <a onclick="site_change('asa')" href="javascript:void(0)" class="mt-5 btn  btn-danger">Edit</a>
                        <input type="submit" class="mt-5 btn btn-primary" name="update_smtp" value="Save Data">
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- all books -->
          <div class="panel panel-default mb-4">
            <div class="panel-heading1 ">
              <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false" contenteditable="false" style="cursor: pointer;">All Books</a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse p-2" role="tabpanel" aria-expanded="false" style="">
              <!-- data -->
              <div class="row row-sm p-1 mt-3">
                <div class="col-md-5 col-lg-5 col-xl-3">
                  <div class="card p-1">
                    <div class="card-body text-center">
                      <button class="btn btn-primary btn-block" data-bs-target="#CreatePDF" data-bs-toggle="modal"><i class="fe fe-plus me-1"></i> Create New Ebook</button>
                    </div>
                    <div class="card-body pt-4">
                      <div class="list-group list-group-transparent mb-0 file-manager">
                        <div class="d-flex">
                          <div>
                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                              <i class="fe fe-image fs-18 me-2 text-success p-2"></i>Ebooks Size
                            </a>
                          </div>
                          <div class="text-end ms-auto mt-3">
                            <span class="fs-11  text-dark" id="pdf_size_st99">
                              <?php
                               echo pdfs_total_storage()." MB";
                               ?>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-xs mb-3 ms-2">
                          <div class="progress-bar bg-green" style="width: 30%;"></div>
                        </div>
                        <div class="d-flex">
                          <div>
                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                              <i class="fe fe-file-text fs-18 me-2 text-primary p-2"></i>Total Ebooks
                            </a>
                          </div>
                          <div class="text-end ms-auto mt-3">
                            <span class="fs-11  text-dark" id="total_ebooks">
                              <?php
                               echo admin_data('total_pdfs');
                               ?>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-xs mb-3 ms-2">
                          <div class="progress-bar bg-primary" style="width: 25%;"></div>
                        </div>
                        <!-- data -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 col-xl-9">
                  <div class="text-dark mb-2 ms-1 fs-20 fw-semibold">Files</div>
                  <div class="row row-sm">
                    <!-- loop -->
                    <?php

                       $pdfs_loop = pdfs_loop();
                       foreach ($pdfs_loop as $pdfs_d) {
                         $book_cover = $pdfs_d["book_cover"];
                         $id = $pdfs_d["id"];
                         $pdf_link_own = $pdfs_d["pdf_link_own"];
                         $pdf_link_ext = $pdfs_d["pdf_link_ext"];

                        if($pdf_link_own!=""){
                           $p_status = "own";
                           $path = "function/pdf/web/pdfs/";
                           $pdf_file = $path.$pdf_link_own;
                           $file_size = filesize($pdf_file);
                           $Mb_pdf_size = ($file_size/1024)/1024;
                           $Mb_pdf_size = round($Mb_pdf_size, 2);

                         }else{
                           $p_status = "ext";
                           $Mb_pdf_size = "Unknown";
                         }
                         ?>
                         <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                           <div class="card overflow-hidden">
                             <a href="javascript:void(0)"><img src="assets/images/pdf_covers/<?php echo $book_cover ?>" alt="img" class="w-100 file-manager-list"></a>
                             <ul class="icons">
                                <?php
                                if($pdf_link_own!=""){
                                  $ran_d1 = md5(sha1(rand(123456,98765)));
                                  $ran_d2 = md5(sha1(rand(12344456,9874465)));

                                   ?>
                                   <form action="view" method="post">
                                     <input type="hidden" name="links_gen" value="https://digilibrary.gibsbd.org/function/pdf/web/viewer?file=pdfs">

                                     <input type="hidden" name="back_link" value="deshbord">

                                     <input type="hidden" name="Sks_Rsrc_<?php echo $ran_d1 ?>" value="<?php echo $ran_d2 ?>">
                                     <input type="hidden" name="Sks_saltKey_<?php echo $ran_d2 ?>" value="<?php echo $ran_d1 ?>">

                                     <input type="hidden" name="file_name" value="<?php echo $pdf_link_own ?>">

                                     <button class="btn btn-success btn-sm" type="submit" role="button" name="get_pdf_file">
                                       <i class='fe fe-eye'></i>
                                     </button>
                                   </form>
                                   <?php
                                 }else{
                                   ?>
                                     <a  href="<?php echo $pdf_link_ext ?>" target="_blank" class="btn btn-success btn-sm"><i class='fe fe-eye'></i></a>
                                   <?php
                                 }
                                 ?>
                             </ul>
                             <div class="card-footer">
                               <div class="d-flex">
                                 <div class="">
                                   <h5 class="mb-0 fw-semibold text-break">Ebook Size : </h5>
                                 </div>
                                 <div class="ms-auto my-auto">
                                   <span class="text-muted mb-0"><?php echo $Mb_pdf_size ?> MB</span>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <?php
                       }
                     ?>
                    <!-- loop -->

                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- data -->
            </div>
          </div>
          <?php
        }elseif ($role=="student"){

           ?>
           <!-- all Books -->
           <div class="panel panel-default mb-4">
            <div class="panel-heading1 ">
              <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="true" contenteditable="true" style="cursor: pointer;">All Books</a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse show p-2" role="tabpanel" aria-expanded="false" style="">
              <!-- data -->
              <div class="row row-sm p-1 mt-3">
                <div class="col-md-5 col-lg-5 col-xl-3">
                  <div class="card p-1">
                    <div class="card-body pt-4">
                      <div class="list-group list-group-transparent mb-0 file-manager">
                        <div class="d-flex">
                          <div>
                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                              <i class="fe fe-image fs-18 me-2 text-success p-2"></i>Ebooks Size
                            </a>
                          </div>
                          <div class="text-end ms-auto mt-3">
                            <span class="fs-11  text-dark" id="pdf_size_st99">
                              <?php
                               echo pdfs_total_storage()." MB";
                               ?>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-xs mb-3 ms-2">
                          <div class="progress-bar bg-green" style="width: 30%;"></div>
                        </div>
                        <div class="d-flex">
                          <div>
                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                              <i class="fe fe-file-text fs-18 me-2 text-primary p-2"></i>Total Ebooks
                            </a>
                          </div>
                          <div class="text-end ms-auto mt-3">
                            <span class="fs-11  text-dark" id="total_ebooks">
                              <?php
                               echo admin_data('total_pdfs');
                               ?>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-xs mb-3 ms-2">
                          <div class="progress-bar bg-primary" style="width: 25%;"></div>
                        </div>
                        <!-- data -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 col-xl-9">
                  <div class="text-dark mb-2 ms-1 fs-20 fw-semibold">Files</div>
                  <div class="row row-sm">
                    <!-- loop -->
                    <?php
                       $pdfs_loop = pdfs_loop_sp();
                       foreach ($pdfs_loop as $pdfs_d) {
                         $book_cover = $pdfs_d["book_cover"];
                         $id = $pdfs_d["id"];
                         $pdf_link_own = $pdfs_d["pdf_link_own"];
                         $pdf_link_ext = $pdfs_d["pdf_link_ext"];

                        $favorite = favorite_check($id,$user_id);
                        if($pdf_link_own!=""){
                           $p_status = "own";
                           $path = "function/pdf/web/pdfs/";
                           $pdf_file = $path.$pdf_link_own;
                           $file_size = filesize($pdf_file);
                           $Mb_pdf_size = ($file_size/1024)/1024;
                           $Mb_pdf_size = round($Mb_pdf_size, 2);

                         }else{
                           $p_status = "ext";
                           $Mb_pdf_size = "Unknown";
                         }
                         ?>
                         <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                           <div class="card overflow-hidden">
                             <a href="javascript:void(0)"><img src="assets/images/pdf_covers/<?php echo $book_cover ?>" alt="img" class="w-100 file-manager-list"></a>
                             <ul class="icons" id="ul_sp_s">
                                <?php
                                if($pdf_link_own!=""){
                                  $ran_d1 = md5(sha1(rand(123456,98765)));
                                  $ran_d2 = md5(sha1(rand(12344456,9874465)));

                                   ?>
                                   <form action="view" method="post" >
                                     <input type="hidden" name="links_gen" value="https://digilibrary.gibsbd.org/function/pdf/web/viewer?file=pdfs">

                                     <input type="hidden" name="back_link" value="deshbord">

                                     <input type="hidden" name="Sks_Rsrc_<?php echo $ran_d1 ?>" value="<?php echo $ran_d2 ?>">
                                     <input type="hidden" name="Sks_saltKey_<?php echo $ran_d2 ?>" value="<?php echo $ran_d1 ?>">

                                     <input type="hidden" name="file_name" value="<?php echo $pdf_link_own ?>">

                                   <div id="box_segment_<?php echo $id ?>">
                                     <?php
                                      if($favorite==1){
                                        ?>
                                        <a id="favorite_is_<?php echo $id ?>" onclick="favorite('<?php echo $id ?>')" href="javascript:void(0)" class=" btn_fev  favorite_is">
                                          <i class="fe fe-heart"></i>
                                        </a>
                                        <?php
                                      }elseif($favorite==0){
                                        ?>
                                        <a id="favorite_id_<?php echo $id ?>" onclick="favorite('<?php echo $id ?>')" href="javascript:void(0)" class=" btn_fev favorite_id">
                                          <i class="fe fe-heart"></i>
                                        </a>
                                        <?php
                                      }
                                      ?>
                                      </div>
                                     <input type="hidden" name="manage_fav" value="<?php echo $favorite ?>" id="manage_fav_<?php echo $id ?>">

                                     <button class="btn btn-success btn-sm" type="submit" role="button" name="get_pdf_file">
                                       <i class='fe fe-eye'></i>
                                     </button>
                                   </form>

                                   <?php
                                 }else{
                                   ?>
                                     <a  href="<?php echo $pdf_link_ext ?>" target="_blank" class="btn btn-success btn-sm"><i class='fe fe-eye'></i></a>
                                   <?php
                                 }
                                 ?>
                             </ul>
                             <div class="card-footer">
                               <div class="d-flex">
                                 <div class="">
                                   <h5 class="mb-0 fw-semibold text-break">Ebook Size : </h5>
                                 </div>
                                 <div class="ms-auto my-auto">
                                   <span class="text-muted mb-0"><?php echo $Mb_pdf_size ?> MB</span>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <?php
                       }
                     ?>
                    <!-- loop -->

                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- data -->
            </div>
          </div>
           <!-- all Books -->
           <?php
        }elseif($role=="staff"){
          ?>
          <!-- all books -->
          <div class="panel panel-default mb-4">
            <div class="panel-heading1 ">
              <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false" contenteditable="false" style="cursor: pointer;">All Books</a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse p-2" role="tabpanel" aria-expanded="false" style="">
              <!-- data -->
              <div class="row row-sm p-1 mt-3">
                <div class="col-md-5 col-lg-5 col-xl-3">
                  <div class="card p-1">
                    <div class="card-body text-center">
                      <button class="btn btn-primary btn-block" data-bs-target="#CreatePDF" data-bs-toggle="modal"><i class="fe fe-plus me-1"></i> Create New Ebook</button>
                    </div>
                    <div class="card-body pt-4">
                      <div class="list-group list-group-transparent mb-0 file-manager">
                        <div class="d-flex">
                          <div>
                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                              <i class="fe fe-image fs-18 me-2 text-success p-2"></i>Ebooks Size
                            </a>
                          </div>
                          <div class="text-end ms-auto mt-3">
                            <span class="fs-11  text-dark" id="pdf_size_st99">
                              <?php
                               echo pdfs_total_storage()." MB";
                               ?>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-xs mb-3 ms-2">
                          <div class="progress-bar bg-green" style="width: 30%;"></div>
                        </div>
                        <div class="d-flex">
                          <div>
                            <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center px-0">
                              <i class="fe fe-file-text fs-18 me-2 text-primary p-2"></i>Total Ebooks
                            </a>
                          </div>
                          <div class="text-end ms-auto mt-3">
                            <span class="fs-11  text-dark" id="total_ebooks">
                              <?php
                               echo admin_data('total_pdfs');
                               ?>
                            </span>
                          </div>
                        </div>
                        <div class="progress progress-xs mb-3 ms-2">
                          <div class="progress-bar bg-primary" style="width: 25%;"></div>
                        </div>
                        <!-- data -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 col-xl-9">
                  <div class="text-dark mb-2 ms-1 fs-20 fw-semibold">Files</div>
                  <div class="row row-sm">
                    <!-- loop -->
                    <?php

                       $pdfs_loop = pdfs_loop();
                       foreach ($pdfs_loop as $pdfs_d) {
                         $book_cover = $pdfs_d["book_cover"];
                         $id = $pdfs_d["id"];
                         $pdf_link_own = $pdfs_d["pdf_link_own"];
                         $pdf_link_ext = $pdfs_d["pdf_link_ext"];

                        if($pdf_link_own!=""){
                           $p_status = "own";
                           $path = "function/pdf/web/pdfs/";
                           $pdf_file = $path.$pdf_link_own;
                           $file_size = filesize($pdf_file);
                           $Mb_pdf_size = ($file_size/1024)/1024;
                           $Mb_pdf_size = round($Mb_pdf_size, 2);

                         }else{
                           $p_status = "ext";
                           $Mb_pdf_size = "Unknown";
                         }
                         ?>
                         <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                           <div class="card overflow-hidden">
                             <a href="javascript:void(0)"><img src="assets/images/pdf_covers/<?php echo $book_cover ?>" alt="img" class="w-100 file-manager-list"></a>
                             <ul class="icons">
                                <?php
                                if($pdf_link_own!=""){
                                  $ran_d1 = md5(sha1(rand(123456,98765)));
                                  $ran_d2 = md5(sha1(rand(12344456,9874465)));

                                   ?>
                                   <form action="view" method="post">
                                     <input type="hidden" name="links_gen" value="https://digilibrary.gibsbd.org/function/pdf/web/viewer?file=pdfs">

                                     <input type="hidden" name="back_link" value="deshbord">

                                     <input type="hidden" name="Sks_Rsrc_<?php echo $ran_d1 ?>" value="<?php echo $ran_d2 ?>">
                                     <input type="hidden" name="Sks_saltKey_<?php echo $ran_d2 ?>" value="<?php echo $ran_d1 ?>">

                                     <input type="hidden" name="file_name" value="<?php echo $pdf_link_own ?>">

                                     <button class="btn btn-success btn-sm" type="submit" role="button" name="get_pdf_file">
                                       <i class='fe fe-eye'></i>
                                     </button>
                                   </form>
                                   <?php
                                 }else{
                                   ?>
                                     <a  href="<?php echo $pdf_link_ext ?>" target="_blank" class="btn btn-success btn-sm"><i class='fe fe-eye'></i></a>
                                   <?php
                                 }
                                 ?>
                             </ul>
                             <div class="card-footer">
                               <div class="d-flex">
                                 <div class="">
                                   <h5 class="mb-0 fw-semibold text-break">Ebook Size : </h5>
                                 </div>
                                 <div class="ms-auto my-auto">
                                   <span class="text-muted mb-0"><?php echo $Mb_pdf_size ?> MB</span>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <?php
                       }
                     ?>
                    <!-- loop -->

                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- data -->
            </div>
          </div>
          <?php
        }
       ?>

      </div>
    </div>
  </div>
</div>
</div>
