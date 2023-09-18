<?php

/*
if and else
*/


/*
if  elseif elseif elseif else
*/
$x = "10";
$y = 584;
// $GLOBALS['y'];
$userAge = 0;
if($_SERVER['REQUEST_MEHTOD']== "POST"){
    echo $_POST['age']." ".$_POST['name'];
    
    $userAge = $_POST['age'];
    if($userAge >= 18){
        echo "<h1>Hello Dear you are eligible for voting!</h1>";
    }elseif($userAge < 18 and $userAge >=12){
        $remainageforVoting = 18 - $userAge;
        echo "<h1>Dear you are not eligible for voting please try after ".$remainageforVoting." years!</h1>";
    }else{
        echo "<h1>Dear chotu you are not eligible for voting</h1>";
    }
}else{
    echo "not data found";
}
/*
Switch statement
*/
echo "<br>";
$x = 10;
switch($x){
  case 6:
    echo "value of x is ".$x;
    break;
  case 5:
    echo "value of x is ".$x; 
    break;
  case 7:
    echo "value of x is ".$x; 
    break;
  default:
    echo "x value didn't match to any cases";
    break; 
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="" method="post">
            
        <h1>Chek you are eligible for voting or not</h1>
  <div class="mb-3">
    <label for="name" class="form-label">Enter Your Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Enter Your Age</label>
    <input type="number" class="form-control" name="age" id="age">
  </div>
  <button class="btn btn-primary" id="submit_btn">Submit</button>
  </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        const age = document.getElementById('age');
        const submitBtn = document.getElementById('submit_btn')
        // function checkeligibility(){
        // }
        // submitBtn.addEvementListener("click", function(){

        // })

    </script>
  </body>
</html>