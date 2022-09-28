<!doctype html>
<html lang="en">

<head>
    <title>Grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form class="col-8 offset-4 mt-5" method="POST">
        <div class="form-group col-2">
            <label>Physics</label>
            <input type="text" class="form-control" name="physics" id="physics">

        </div>
        <div class="form-group col-2">
            <label>Chemistry</label>
            <input type="text" class="form-control" name="chemistry" id="chemistry">

        </div>
        <div class="form-group col-2">
            <label>Biology</label>
            <input type="text" class="form-control" name="biology" id="biology">

        </div>
        <div class="form-group col-2">
            <label>Mathematics</label>
            <input type="text" class="form-control" name="mathematics" id="mathematics">

        </div>
        <div class="form-group col-2">
            <label>Computer</label>
            <input type="text" class="form-control" name="computer" id="computer">

        </div>
        <input name="submit" type="submit" class="btn btn-success mx-5 my-2 form-group" value="compute"></input>

    </form>
    <?php

    if (isset($_POST['submit'])) {
        $a1 = $_POST['physics'];
        $a2 = $_POST['chemistry'];
        $a3 = $_POST['biology'];
        $a4 = $_POST['mathematics'];
        $a5 = $_POST['computer'];
        $sum = $a1 + $a2 + $a3 + $a4 + $a5;
        $avg = ($sum/5)/100 *100;
        if ($avg >= 0 && $avg <= 50)
            $grade = "Fail";
        if ($avg > 50 && $avg <= 70)
            $grade = "C";
        if ($avg > 70 && $avg <= 80)
            $grade = "B";
        if ($avg > 80 && $avg <= 90)
            $grade = "A";
        if ($avg > 90)
            $grade = "E";
        echo "<br>";
        echo "<ul class='alert alert-success col-6 offset-2'>
    <li>Total marks: " . $sum . "</li><br>";
        echo "<li>Grade is: " . $grade . "</li>
    </ul>";
    }


    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>