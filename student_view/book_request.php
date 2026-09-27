<?php
 include("header.php");
  $book_loop =  book_req_loop();
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
              <h3 class="card-title">All category</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Student</th>
                      <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">Action</th>
                      <th class="border-bottom-0">info</th>
                      <th class="border-bottom-0">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $ISI = 1;
                        foreach ($book_loop as $data) {
                           $id = $data["id"];
                           $student_id = $data["student_id"];
                           $st_sp = students_loop($student_id);
                           $profile = $st_sp["pp_img"];
                           $fname = $st_sp["fname"];
                           $lname = $st_sp["lname"];
                           $name = $fname." ".$lname;
                           // /==========
                           $book_name = $data["book_name"];
                           $bok_autor = $data["bok_autor"];
                           $details = $data["details"];
                           $date = $data["date"];
                          ?>
                    <tr>
                      <td>
                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="../assets/images/students/<?php echo $profile_pic ?>" alt="avatar-img">
                      </td>
                      <td><?php echo $name ?></td>
                      <td>
                        <div class="btn-list">
                          <a onclick="return confirm('Are you sure delete this ticket?')" href="?delete=book_request&id=<?php echo $id ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i>Delete</a>
                        </div>
                      </td>
                      <td style="max-width:400px"><?php
                      echo "<h3>Book Name : ".$book_name."</h3>";
                      echo "<h4>Book Autor : ".$bok_autor."</h4> ";
                      echo "<p style='text-wrap: auto;'>Book Details : ".$details."</p>";
                       ?></td>
                      <td><?php echo $date ?></td>
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
