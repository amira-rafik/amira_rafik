<?php
$users = [
    (object)[
        'id' => 1,
        'name' => 'Ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
       
    ],
    (object)[
        'id' => 2,
        'name' => 'Youssef',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
       
    ],
    (object)[
        'id' => 3,
        'name' => 'salma',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
      
    ],  
    (object)[
        'id' => 3,
        'name' => 'Aya',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
      
    ],  
];
function drawtable(array $users) :?string{
    if( empty($users)){
        return null;
    }
         $table ="<table class='table col-10 offset-1 mt-5'>
        <thead class='table-dark'>
          <tr>";
            foreach($users[0] as $property=>$value){
              $table.="<th>{$property}</th>";
            }
        $table.= "</tr>
        </thead>
        <tbody class='table-group-divider'>";
        foreach($users AS $user){
            $table.="<tr>";
                foreach($user AS $property=>$value){
                    $table .= "<td>";
                    if(gettype($value) == 'array' || gettype($value) == 'object'){
                        foreach ($value as $valueKey => $valueData) {
                            if($property =='gender' && $valueKey == 'gender'){
                                if($valueData == 'm')
                                    $valueData = 'male';
                                elseif($valueData == 'f')
                                    $valueData = 'female';
                            }
                            $table.=$valueData .'<br>';
                        }
                    }else{
                        $table.=$value;
                    }
                    $table .= "</td>";
                }
            $table.="</tr>";
        }
$table .=       "</tbody>
       
        </table>";
        return $table;  
}

?>




<!doctype html>
<html lang="en">

<head>
    <title>Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php 
    echo drawtable($users);
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>