<?php

require_once './class/Movies.php';
require_once './class/AddInfo.php';



$movie1 = new Movie("Avengers: Endgame", "2019", "fantasy", new AddInfoData("USA", "Alla deriva nello spazio senza cibo o acqua, Tony Stark vede la propria scorta di ossigeno diminuire di minuto in minuto. Nel frattempo, i restanti Vendicatori affrontano un epico scontro con Thanos.", "181 min"));
$movie2 = new Movie("La leggenda di Al, John e Jack", "2002", "commedy", new AddInfoData("ITA", "New York, 1959. Un noto esponente della malavita organizzata commissiona a tre gangster l'eliminazione di un certo Frankie. Questi sono però tipi decisamente curiosi e, come se non bastasse, uno di loro, perde la memoria in seguito ad un avvenimento traumatico. I due colleghi di avventure, John e Jack, tentano di salvare l'amico smemorato, che punta a porsi in rocambolesche circostanze senza senso minimo del pericolo.", "105 min"));

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