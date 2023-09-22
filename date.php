<?php
// echo "<h1>Today We are going to talk about date function of php</h1>";

// date()

//date -> Day, Month, Year, Week;

// Day Format -> d(01 to 31), j(1 to 31), S(st,nd,rd or th)
// Month Format -> F(January), m(01), n(1), M(Jan)
// Year Format -> y(23), Y(2023)
// Week Format -> D(Mon), l(Monday), N(2)
// echo "Day of this year is ".date("z")."<br>";
// echo "Week of the year ".date("W")."<br>";
// echo "Days of the month ".date("t")."<br>";
// echo "Is this is Leap year ".date("L")."<br>";

//Time -> hour, minutes, seconds, meridiem

//hour -> h(01 to 12), H(00 to 23), g(1 to 12), G(0 to 23)
//Minutes -> i(00 to 59)
// Seconds -> s(00 to 59)
//Meridiem -> a(am or pm), A(AM OR PM)
// echo "Time ".date('h:i:s e')."<br>";
date_default_timezone_set("Asia/Kolkata");
// echo "Time ".date('h:i:s A');
$comment = "";
$commentDate = "";
$commentTime = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $comment = $_POST['message'];
    $commentDate = date("l-M-Y");
    $commentTime = date("H:i:s A");
}

// mktime(hour, minute, second, month, day, year)
$pastTime = mktime(4, 15, 00, 3, 12, 2020);
// for showing past time use date function like date("format", timestamp)
echo "Day of 12th march 2020 is ".date("d-m-Y h:i:s a", $pastTime)."<br>";

// checkdate(month, day, year) => this function is used for checking date is valid or not
echo "<br>".var_dump(checkdate(11, 03, 2020));

//date_diff(datefirst, datesecond, boolean) => this function return days between the dates
// $datefirst = "2022-09-20";
// $datesecond = "2023-09-20";
// follow these step for finding date differance between two dates
$datefirst = new DateTimeImmutable('2023-09-10');
$datesecond = new DateTimeImmutable('2023-09-20');
$interval = $datefirst->diff($datesecond);
echo var_dump($interval);
echo "<br>"."date differance ".$interval->format('%R%a days');
// echo "date differance ".date_diff($datefirst, $datesecond, false);

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
<style>
/* .conteru{
        height
    } */
</style>

<body>
    <div class="container mb-4">
        <div style="width: 100%; height: 55vh;">
            <img src="https://source.unsplash.com/random/300×300/?pandas" alt="" style="width:100%; height:inherit;">
        </div>
    </div>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="message"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
            </div>
            <button class="btn btn-success">Comment</button>
        </form>
    </div>
    <div class="container">
        <?php if(!empty($comment)){ ?>
        <div style="background-color: #c6c8cc; padding: 10px 20px; border-radius: 10px; margin-top: 20px;">
            <?php
            echo $comment;
            ?>
            <br>
            <code>Date: <?php echo $commentDate; ?></code>
            <code>Time: <?php echo $commentTime; ?></code>
        </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>