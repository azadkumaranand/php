<?php
//Super Global Veriables
//$_POST
$name_error = $email_error = $phone_error = "";
echo "hello world how are you";
if($_SERVER['REQUEST_METHOD']== 'POST'){
    // $name_error = $email_error = $phone_error = "";
    // return;
    if(empty($_POST['name'])){
        $name_error = "Please enter your name";
        // return;
    }else{
        $name_pattern = "/^[a-zA-Z]+/";
        if(!preg_match($name_pattern, $_POST['name'])){
            $name_error = "Please enter a valid name";
        }
    }
    
    if(empty($_POST['email'])){
        $email_error = "Please enter your email";
        // return;
    }else{
        $email_pattern = "/^[a-zA-Z]+[0-9]$/";

    }
    if(empty($_POST['phone'])){
        $phone_error = "Please enter your phone";
        // return;
    }
    // return;
    echo "
    <div class='container'>
    <h1>Submited form data post method</h1>
    <p>".$_POST['name']."</p>
    <p>".$_POST['email']."</p>
    <p>".$_POST['phone']."</p>
    <p>".$_POST['message']."</p>
    </div>
    ";
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
        <h1>Contact Us Post method</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <!-- !empty($_POST['name']) ? $_POST['name'] : '' -->
                <input type="text" name="name" class="form-control" id="name" value="<?php 
                if (!empty($_POST['name'])) {
                    echo $_POST['name'];
                }
                ?>">
                <p class="text-danger"> <?php echo $name_error ?> </p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
                <p class="text-danger"> <?php echo $email_error ?> </p>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" id="phone">
                <p class="text-danger"> <?php echo $phone_error ?> </p>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="message"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>