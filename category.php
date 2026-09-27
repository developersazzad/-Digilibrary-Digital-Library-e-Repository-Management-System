<?php
 include("header.php");
  $category_loop =  category_loop();
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
                     <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">Action</th>
                      <th class="border-bottom-0">Last Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $ISI = 1;
                        foreach ($category_loop as $data) {
                          $id = $data["id"];
                          $name = $data["name"];
                          $status = $data["status"];
                          $date = $data["date"];
                          ?>
                    <tr>
                      <td><?php echo $name ?></td>
                      <td>
                        <div class="btn-list">
                          <a data-bs-toggle="modal" data-bs-target="#EditCat_<?php echo $ISI ?>" href="javassript:void(0)"  class="btn btn-red btn-sm"><i class="fe fe-heart me-2"></i>Edit</a>

                          <?php
                           if($status=="active"){
                             ?>
                            <a href="?cat_status=inactive&id=<?php echo $id ?>" class="btn btn-sm btn-green">Active</a>
                          <?php
                              }else{
                               ?>
                              <a href="?cat_status=active&id=<?php echo $id ?>" class="btn btn-sm btn-danger">Inactive</a>
                          <?php
                             }
                             ?>
                          <a onclick="return confirm('Are you sure delete this ticket?')" href="?delete_marcent_id=<?php echo $id ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</a>

                        </div>
                      </td>
                      <td><?php echo $date ?></td>


                      <!-- model edit -->
                      <div class="modal fade" id="EditCat_<?php echo $ISI ?>" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                   <h5 class="modal-title p_name">Edit Category</h5>
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
                                                  <input type="text" class="form-control" name="category_name" placeholder="Category Name" value="<?php echo $name ?>">
                                                </div>
                                              </div>
                                              <!-- Additional Note -->
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <input type="hidden" name="ids" value="<?php echo $id ?>">
                                      <input type="submit" class="btn btn-primary" name="update_category" value="Update Data">
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
                      <!-- model edit -->
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
