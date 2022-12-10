<?php

require_once './class/Movies.php';
require_once './class/AddInfo.php';



$movie1 = new Movie("Avengers: Endgame", "2019", "fantasy");
$movie2 = new Movie("La leggenda di Al, John e Jack", "2002", "commedy");

var_dump($movie1);
var_dump($movie2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row d-flex flex-wrap">
      <div class="card m-4 p-2 text-center" style="width: 18rem;">
        <div class="card-body">

        </div>
      </div>
    </div>
  </div>
</body>

</html>