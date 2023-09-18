<?php
//Super Global Veriables

/*
$GLOBALS
$_SERVER
$_POST
$_GET
$_REQUEST
$_FILES
$_COOKIE
$_SESSION


*/
$x = 10;
$z = 500;
function myfun (){
    $y = 10;
    // echo $GLOBALS['x'];
}
myFUn();
// echo $y;
// echo "<h1>".$_GET['subject']."</h1>";

// if(!empty($_GET['name'])){
//     echo "
// <div class='container'>
// <h1>Submited form data</h1>
// <p>".$_GET['name']."</p>
// <p>".$_GET['email']."</p>
// <p>".$_GET['phone']."</p>
// <p>".$_GET['message']."</p>
// </div>
// ";
// }
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['name'])){
    echo "
<div class='container'>
<h1>Submited form data</h1>
<p>".$_GET['name']."</p>
<p>".$_GET['email']."</p>
<p>".$_GET['phone']."</p>
<p>".$_GET['message']."</p>
</div>
";
}


if(true){
    $z = 110;
    // echo $x;
}
for ($i=0; $i < 10; $i++) { 
    # code...
    // echo $x;
}

// ECHO $_SERVER['PHP_SELF'];
// ECHO "<br>";
// ECHO $_SERVER['SERVER_NAME'];
// ECHO "<br>";
// echo $_SERVER['HTTP_HOST'];
// ECHO $_SERVER['REQUEST_METHOD'];

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
        <h1>Contact Us</h1>
        <form action="" method="get">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" id="phone">
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