  <div class="row mb-4">
    <div class="col-12">
      <div class="example">
        <div class="btn-list btn-list-icon">
        <?php
          if($role == "admin"){
          ?>
          <a href="student_view_load" target="_blank"  class="btn btn-green"><i class="fe fe-user me-2"></i>Student view</a>

          <a data-bs-toggle="modal" data-bs-target="#CreateStudent" href="javassript:void(0)"   class="btn btn-purple"><i class="fe fe-user me-2"></i>Create Student</a>

          <a data-bs-toggle="modal" data-bs-target="#CreatePDF" href="javassript:void(0)"  class="btn btn-success"><i class="fe fe-check me-2"></i>Create PDF</a>

          <a data-bs-toggle="modal" data-bs-target="#CraeteCategory" href="javassript:void(0)"  class="btn btn-red"><i class="fe fe-heart me-2"></i>Create Category</a>

          <a data-bs-toggle="modal" data-bs-target="#CreateStaffs" href="javassript:void(0)"  class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Create staff</a>

          <a data-bs-toggle="modal" data-bs-target="#SendMail_student" href="javassript:void(0)"  class="btn btn-green"><i class="fe fe-message-circle me-2"></i>Send Mail Student</a>
        <?php
      }elseif($role == "staff"){
          if($create_student1=="yes"){
            ?>
              <a data-bs-toggle="modal" data-bs-target="#CreateStudent" href="javassript:void(0)"   class="btn btn-purple"><i class="fe fe-user me-2"></i>Create Student</a>
            <?php
          }
          if($create_book1=="yes"){
            ?>
              <a data-bs-toggle="modal" data-bs-target="#CreatePDF" href="javassript:void(0)"  class="btn btn-success"><i class="fe fe-check me-2"></i>Create PDF</a>
              <a data-bs-toggle="modal" data-bs-target="#CraeteCategory" href="javassript:void(0)"  class="btn btn-red"><i class="fe fe-heart me-2"></i>Create Category</a>
            <?php
          }
          if($mail_student1=="yes"){
            ?>
              <a data-bs-toggle="modal" data-bs-target="#SendMail_student" href="javassript:void(0)"  class="btn btn-green"><i class="fe fe-message-circle me-2"></i>Send Mail Student</a>
            <?php
          }
        }elseif($role == "student"){
          ?>
          <a data-bs-toggle="modal" data-bs-target="#BookRequest" href="javassript:void(0)"  class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Send Book Request</a>

          <a data-bs-toggle="modal" data-bs-target="#SendMail_student" href="javassript:void(0)"  class="btn btn-green"><i class="fe fe-message-circle me-2"></i>Send Mail Admin</a>
          <?php
          }
        ?>
        </div>
      </div>
    </div>
  </div>
