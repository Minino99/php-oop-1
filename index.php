<?php

require_once 'classes.php';

$movies = [];

$movie1 = new Movie('El Camino', 2019, 'English');
$movie2 = new Movie('The Irishman', 2019, 'English');
$movie3 = new Movie('Minions', 2022, 'English');

array_push($movies, $movie1, $movie2, $movie3);

var_dump($movies);


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
</head>
<body>
<h1 class="text-center text-primary mt-2 mb-5">OOP Movies</h1>
<div class="container">
 <div class="row">
  <div class="col-md-12">
   <table class="table table-striped">
    <thead>
     <tr>
      <th>Title</th>
      <th>Year</th>
      <th>Original Language</th>
     </tr>
    </thead>
    <tbody>
     <?php foreach ($movies as $movie) { ?>
      <tr>
       <td><?php echo $movie->getTitle(); ?></td>
       <td><?php echo $movie->getYear(); ?></td>
       <td><?php echo $movie->getOriginalLanguage(); ?></td>
      </tr>
     <?php } ?>
    </tbody>
   </table>
  </div>
 </div>
</div>

</body>
</html>
