<!doctype html>
<html lang="en">

<head>
    <title>supermarket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
     
?>
<body>


    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-success display-3 mt-5">
                <h1>
                    SUPERMARKET
                </h1>
            </div>
            <div class="col-8 offset-2 my-5 ">
                <form action="" method="POST" class=" mt-5">
                    <div class="form-group">
                        <label for="name" class="text-success">User Name</label>
                        <input type="text" name="name" value="<?= $_POST["name"] ?? "" ?>" id="name" class="form-control">
                        <small id="helpId" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="city" class="text-success">City</label>
                        <select id="city" name="city" class="form-control" value="<?= $_POST["city"] ?? "" ?>">
                            <option value='cairo'>Cairo</option>
                            <option value='giza'>Giza</option>
                            <option value="alex">Alex</option>
                            <option value="other">Other</option>

                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="number" class="text-success"> Number of Products</label>
                        <input value="<?= $_POST["number"] ?? "" ?>" type="number" name="number" id="number" class="form-control">
                        <!-- <small id="helpId" class=" text-danger"></small> -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success" name="submit_product">
                            Enter products
                        </button>
                    </div>
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST['submit_product'])) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">Quentity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $_POST["number"]; $i++) {
                        echo  "<tr>
                    <td><input type='text' name='name-product' value='name-product' ></td>
                    <td><input type='number' name='price' value='price'></td>
                    <td><input type='number' name='quentity' value='quentity'></td>
                </tr>";
               
                    }

                    ?>
                </tbody>
            </table>

            <div class="form-group">
                        <button type="submit" class="btn btn-outline-success" name="invoice"  >
                          Invoice 
                        </button>
                    </div>
                    <?php
                 if ($_POST['number']) {
                    $a1 = $_POST['name-product'];
                    $a2 = $_POST['price'];
                    $a3 = $_POST['quentity'];
                    $sum =  $a2 * $a3;
                   
                    echo "<br>";
                    echo "<ul class='alert alert-success col-6 offset-2'>
                <li>Total : " . $sum . "</li><br>";
                    echo "<li>product  is: " . $a1. "</li>
                </ul>";
                }
                    ?>
                       
        <?php } ?>
        
         
                </form>
            </div>

        </div>
          
          
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>