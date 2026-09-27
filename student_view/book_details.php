<?php
 include("header.php");
 if(isset($_GET["book_id"])){
   $book_id = $_GET["book_id"];
   $data = sp_book_details($book_id);
    $category_id = $data["category_id"];
    $autor = $data["autor"];
    $title = $data["title"];
    $publisher = $data["publisher"];
    $year = $data["year"];
    $book_cover = $data["book_cover"];
    $book_details = $data["book_details"];
    $pdf_link_own = $data["pdf_link_own"];
    $pdf_link_ext = $data["pdf_link_ext"];
    $status = $data["status"];
    $date = $data["date"];
    $category_name = category_name($category_id);
    if($pdf_link_own!=""){
        $p_status = "own";
      }else{
        $p_status = "ext";
      }
 }else{
   go_to("pdfs");
 }
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
      <!-- ROW-1 OPEN -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
              <div class="card-body">

                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="product-carousel">
                    <div id="Slider" class="carousel slide border" data-bs-ride="false">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="../assets/images/pdf_covers/<?php echo $book_cover ?>" alt="img" class="img-fluid mx-auto d-block">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="mt-2 mb-4">
                      <h3 class="mb-3 fw-semibold"><?php echo $title ?></h3>
                      <h4 class="mt-4"><b>Autor Name : <?php echo $autor ?></b></h4>
                      <h4 class="mt-4"><b>Publisher Name : <?php echo $publisher ?></b></h4>
                      <div class=" mt-4 mb-5"><span class="fw-bold me-2">Publishe Year : <?php echo $year ?></div>
                      <div class="mt-4 mb-5"><span class="fw-bold me-2">Category : </span><span class="fw-bold text-success"><?php echo $category_name ?></span></div>
                      <hr>
                      <h4 class="mt-4"><b>Book Description : </b></h4>
                      <!-- Book View Box -->
                <?php
                    if($pdf_link_own!=""){
                      $ran_d1 = md5(sha1(rand(123456,98765)));
                      $ran_d2 = md5(sha1(rand(12344456,9874465)));

                     ?>
                  <form class="mb-3" action="view" method="post">
                    <input type="hidden" name="links_gen" value="https://digilibrary.gibsbd.org/function/pdf/web/viewer?file=pdfs">
                    <input type="hidden" name="back_link" value="pdfs">
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
                  <a href="<?php echo $pdf_link_ext ?>" target="_blank" class="btn btn-danger btn-sm"><i class="fe fe-message-circle me-2"></i>Pdf/Ebook <small> External</small></a>
                  <?php
                         }
                         ?>
                      <!-- Book View Box -->
                      <p class="mb-3 fs-15"><?php echo $book_details ?></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- details -->
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
