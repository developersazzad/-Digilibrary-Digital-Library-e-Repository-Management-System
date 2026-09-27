<?php
$notice = live_notice();
$notice_title = $notice["notice_title"];
$notice_body = $notice["notice_body"];
$date = $notice["date"];
?>
<style type="text/css">
a.card-options-remove i {
  background: #c60000;
  padding: 3px;
  color: white;
}
</style>
<div class="row">
  <div class="col-12 p-4 mb-3">
    <div class="card border p-0 pb-3" style="border:1px solid #ec3026 !important">
      <div class="card-header border-0 pt-3">
        <div class="card-options">
          <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body text-center">
        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"></path><circle cx="12" cy="17" r="1" fill="#e62a45"></circle><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"></path></svg></span>
        <h3 class="h4 mb-0 mt-2 mb-3"><?php echo $notice_title ?></h3>
        <p class="card-text"><?php echo $notice_body ?></p>
      </div>
    </div>
  </div>
</div>
