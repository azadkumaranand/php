<?php
$fileSizeError = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    // echo "<pre>";
    // print_r($_FILES['profile_pic']);
    // echo "</pre>";
    $product_img_dir = "productimg/";
    for($i=0; $i<count($_FILES['profile_pic']['tmp_name']); $i++){
        $product_img_path = $product_img_dir.basename($_FILES['profile_pic']['name'][$i]);
        // echo "<h3>".pathinfo($product_img_path, PATHINFO_EXTENSION)."</h1>";
        if($_FILES['profile_pic']['size'][$i]>50000){
            $fileSizeError = "File size should be less than 50kb";
            // continue;
        }else{
            move_uploaded_file($_FILES['profile_pic']['tmp_name'][$i], $product_img_path);
        }
    }
}

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
        <h3 class="text-danger"><?php echo $fileSizeError; ?></h3>
        <h3 class="text-danger"><?php //echo $onlyjpgpngallowed; ?></h3>
        <h3 class="text-success"><?php //echo $fileuploadedSuccessfully; ?></h3>
        <h3 class="text-danger"><?php //echo $largeFileSize; ?></h3>
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
                <input type="file" name="profile_pic[]" class="form-control" id="profile_pic" multiple>
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