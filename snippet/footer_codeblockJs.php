<script>
// Notification Box
 function noify_this(title,message,type,duration){
   (function() {
       $(function() {
         if(type=="success"){
           $.growl({
               title: title,
               message: message,
               duration: duration
           });
         }else if(type=="notice"){
           return $.growl.notice1({
               title: title,
               message: message,
               duration: duration
           });
         }else if(type=="warning"){
           return $.growl.error1({
               title: title,
               message: message,
               duration: duration
           });
         }
       });
     }).call(this);
 }

  // Notification===================
// noify_this("Success","Create Success","success",1100);
</script>
<?php
 if(isset($_GET["title"])){
   if(isset($_GET["status"])){
    $status = $_GET["status"];
  }else{
    $status = "";
  }
   if($status=="success"){
     $status = "success";
   }else{
     $status = "warning";
   }
  if(isset($_GET["title"])){
    $title = $_GET["title"];
  }
  if(isset($_GET["message"])){
   $message = $_GET["message"];
  }


   ?>
  <script>
     noify_this("<?php echo $title ?>","<?php echo $message ?>","<?php echo $status ?>",1500);
  </script>
   <?php
 }
 ?>
<script>
 // Send Email By User
 $("form#EmailSend02").submit(function(e) {
     noify_this("Email Send","Proccing","warning",2800);
     e.preventDefault();
     var formData = new FormData(this);
     $('#SendEmailModal01').modal('toggle');
     $.ajax({
         url: "ajax/form_data_handle.php",
         type: 'POST',
         data: formData,
         dataType: 'json',
         success: function (data) {
             // toggle Modal
             if(data.status=="Success"){
                // NOTIFICATION
                noify_this(data.status,data.message,"notice",1100);
             }else{
                noify_this(data.status,data.message,"warning",1800);
             }
             console.log(data);
         },
         cache: false,
         contentType: false,
         processData: false
     });
 });

// set data by fanc =
function set_email(ids,data){
  $("#"+ids).val(data);
}

function site_change(as){
  $(".attr_set_site01").removeAttr('readonly');
  $(".attr_set_site01").attr('required','true');
  noify_this("Success","Site Data Editing Mode On","success",1100);
}

function edit_profile(as){
  $(".all_edit").removeAttr('readonly');
  $(".all_edit").attr('required','true');
  $("#button_update").removeClass('disabled');
  noify_this("Success","Profile Data Editing Mode On","success",1100);
}

function edit_password_show(){
  $("#change_pas_bt").removeClass('disabled');
  noify_this("Success","Password change Mode On","success",1100);
  $(".new_password").toggle(600);
}

function favorite(id){
  let work;
  var student_id = "<?php echo $user_id ?>";
  var w_ck = $("#manage_fav_"+id).val();
  if(w_ck==0){
     work = "add_favorite";
     $("#manage_fav_"+id).val(1);
     $("#box_segment_"+id).html('<a id="favorite_is_'+id+'" onclick="favorite('+id+')" href="javascript:void(0)" class=" btn_fev favorite_is"><i class="fe fe-heart"></i></a>');
     $("#favorite_id_"+id).removeClass('color_sets1');
  }else if(w_ck==1){
     work = "remove_favorite";
      $("#manage_fav_"+id).val(0);
      $("#box_segment_"+id).html('<a id="favorite_id_'+id+'" onclick="favorite('+id+')" href="javascript:void(0)" class=" btn_fev favorite_id"><i class="fe fe-heart"></i></a>');
  }
  $.ajax({
      url: "ajax/favorite_manage.php",
      type: 'post',
      data: {
        id:id,
        student_id:student_id,
        work:work,
      },
      success: function (data) {
         if(data=="done"){
           noify_this("Success","Add to favorite succes","success",1000);
         }else if(data=="remove"){
           noify_this("Warning","Remove favorite","warning",1000);
         }
         console.log(data);
      }
 });
}

function remove_favorite(id,student_id){
  work = "remove_favorite";
  $.ajax({
      url: "ajax/favorite_manage.php",
      type: 'post',
      data: {
        id:id,
        work:work,
        student_id:student_id,
      },
      success: function (data) {
          if(data=="remove"){
           $("#tr_"+id).hide(1100);
           noify_this("Warning","Remove favorite","warning",1000);
         }
         console.log(data);
      }
 });
}

</script>
