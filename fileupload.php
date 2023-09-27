<?php
$fileAlreadyExists = "";
$fileuploadedSuccessfully = "";
$largeFileSize = "";
$onlyjpgpngallowed = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
echo "<h1>".$_POST['name']."</h1>";
// echo "<h1>".$_POST['profile_pic']."</h1>";
// echo "<h1>".$_FILES['profile_pic']['size']."</h1>";
$profile_dir = "profile_pic/";
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
#single line comment
/* this is path for submitted file  */
$profile_img_path = $profile_dir.basename($_FILES["profile_pic"]["name"]);
// echo move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $profile_img_path);

// you can use pathinfo function for finding fiel extension
$profile_pic_extension = pathinfo($profile_img_path, PATHINFO_EXTENSION);
echo "<h1> file extension is ".$profile_pic_extension."</h1>";
if(file_exists($profile_img_path)){
    $fileAlreadyExists = "File already exists";
}else{
    echo $_FILES['profile_pic']['type'];
    if($profile_pic_extension == "jpg" || $profile_pic_extension == "png" || $profile_pic_extension == "gif"){
        $onlyjpgpngallowed = "";
        if ($_FILES['profile_pic']['size'] > 100000) {
            $largeFileSize = "File size should be less than 100kb";
         }else{
             if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $profile_img_path)){
                 $fileuploadedSuccessfully = "file uploaded successfully!";
                 $fileAlreadyExists = "";
                 $largeFileSize = "";
             }
         }
    }else{
        $onlyjpgpngallowed = "File should be jpg or png format";
    }
    
}

// move_uploaded_file function is used to move file from temprory folder to actual folder
// if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $profile_img_path)){
//     $fileuploadedSuccessfully = "file uploaded successfully!";
//     $fileAlreadyExists = "";
// }

// $_POST['profile_pic'];
}
// $assArr = array('employe'=>['name', 'age'=>[41, 52, 12], 'gender'], 'mager'=>['namemanager', 'agemanger']);
// $arr = array(['name', [45, 74, 787], 'gender'], ['rahul', '19', 'male']);
// echo "<pre>";
// print_r($assArr['employe']['age']);
// echo "</pre>";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- <img src="<?php// echo $_POST['profile_pic'] ?>" alt="profile img"> -->
        <h1>Contact Us Post method</h1>
        <h3 class="text-danger"><?php echo $fileAlreadyExists; ?></h3>
        <h3 class="text-danger"><?php echo $onlyjpgpngallowed; ?></h3>
        <h3 class="text-success"><?php echo $fileuploadedSuccessfully; ?></h3>
        <h3 class="text-danger"><?php echo $largeFileSize; ?></h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <p class="text-danger"></p>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
                <p class="text-danger"></p>
            </div>
            <div class="mb-3">
                <label for="profile_pic" class="form-label">Profile Photo</label>
                <input type="file" name="profile_pic" class="form-control" id="profile_pic">
                <p class="text-danger"></p>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>