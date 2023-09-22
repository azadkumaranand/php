<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
echo "<h1>".$_POST['name']."</h1>";
echo "<h1>".$_POST['profile_pic']."</h1>";
$target_dir = "profile_pic/";
print_r($_FILES);
$target_file = $target_dir.basename($_FILES["image"]["name"]);
// echo $target_file;
move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
// $_POST['profile_pic'];
}
?>