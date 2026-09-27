$password_hash = password_hash($new_password1,PASSWORD_DEFAULT);
$sql = mysqli_query($con,"UPDATE `users` SET `password`='$password_hash' WHERE email='$email'");
if($sql==true){
  go_to("login?notification=success&title=Rest Success&msg=Rest Password Success");
