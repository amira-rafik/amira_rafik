<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST) { 
if ($_POST['number-year'] <=3) {
$interest_value= 10/100;
    
} else{
    $interest_value= 15/100;
}
$interest = $interest_value * $_POST['number-amount'];
$interest_rate = $interest * $_POST['number-year'];
$loan_after_interest = $interest_rate +  $_POST['number-amount'];
$monthly = $loan_after_interest/ ($_POST['number-year']*12);
 }


?>
<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-dark display-3 mt-5">
                <h1 class="text-primary fs-1">
                    BANK
                </h1>
            </div>
            <div class="col-8 offset-2 my-5 ">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name " class="text-primary">User Name</label>
                        <input type="text" name="name" value="<?= $_POST['name'] ?? "" ?>" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number-amount" class="text-primary">Loan Amount</label>
                        <input type="number" name="number-amount" id="number-amount" class="form-control" value="<?= $_POST['number-amount'] ?? "" ?>" >
                    </div>
                    <div class="form-group">
                        <label for="number-year" class="text-primary">Loan Years</label>
                        <input type="number" name="number-year" id="number-year" class="form-control" value="<?= $_POST['number-year'] ?? "" ?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary">
                            Calculate
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST) ?>

        <?php  if(!(empty($_POST['name']) || empty($interest_rate) || empty($loan_after_interest) || empty($monthly) )) {  
            echo' 
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> User Name</th>
                        <th scope="col"> Interest rate</th>
                        <th scope="col"> loan after rate</th>
                        <th scope="col"> monthly</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo  "<tr>
                    <td><input type="text" value="'.$_POST['name'] .'"></td>
                    <td><input type="number" value="'.$interest_rate.'"></td>
                    <td><input type="number"value="'.$loan_after_interest.'"></td>
                    <td><input type="number"value="'.$monthly .'"></td>
                </tr>
                    

        '; } ?>
                </tbody>
            </table>

        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>