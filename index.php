 <!-- ------------------- php-oop-1 ------------------- -->

<!-- - create un file index.php
- includete una classe “Movie”
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
BONUS:
1 Utilizzare almeno una proprietà e un metodo privato
2 Utilizzare almeno una proprietà e un metodo statico -->


<!-- ------------------------------------------------------------------ -->

<?php

require_once __DIR__ . '/classes/Movie.php';

// movie n°1
$movie1 = new Movie('Jurassic Park', '1993');
$movie1->director = 'Steven Spielberg';
$movie1->writer = 'Michael Crichton, David Koepp';
$movie1->cast = 'Jeffrey Lynn Goldblum, Sam" Neill';
$movie1->setStoryline(" A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park's cloned dinosaurs to run loose. ");


// movie n°2
$movie2 = new Movie('Jurassic World', '2015');
$movie2->director = 'Colin Trevorrow';
$movie2->writer = 'Rick Jaffa, Amanda Silver';
$movie2->cast = 'Chris Pratt, Bryce Dallas Howard';
$movie2->setStoryline("Twenty-two years after the original Jurassic Park failed, the new park, also known as Jurassic World, is open for business. After years of studying genetics, the scientists on the park genetically engineer a new breed of dinosaur, the Indominus Rex. When everything goes horribly wrong, will our heroes make it off the island?");


// movie n°3
$movie3 = new Movie('Indiana Jones Raiders of the Lost Ark', '1981');
$movie3->director = 'Steven Spielberg';
$movie3->writer = 'Lawrence Edward Kasdan';
$movie3->cast = 'Harrison Ford, Karen Allen';
$movie3->setStoryline("In 1936, archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before Adolf Hitler's Nazis can obtain its awesome powers.");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>Document</title>
</head>

<body>
  <section id="movies">

    <h1>Movies</h1>

    <ul>
      <li>
        <h3>
          <?php echo $movie1->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie1->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie1->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie1->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie1->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

    <ul>
      <li>
        <h3>
          <?php echo $movie2->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie2->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie2->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie2->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie2->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

    <ul>
      <li>
        <h3>
          <?php echo $movie3->getInfo() ?>
        </h3>
      </li>
      <li>
        <div>
          <span>Director:</span>
          <span><?php echo $movie3->director ?></span>
        </div>
      </li>
      <li>
        <div>
          <span>Written by:</span>
          <span><?php echo $movie3->writer ?></span>
        </div>
      </li>
      <li>
        <span>Stars:</span>
        <span><?php echo $movie3->cast ?></span>
      </li>
      <li>
        <span>Storyline:</span>
        <p><?php echo $movie3->getStoryline() ?></p>
      </li>
    </ul>

    <hr>

  </section>

  <section id="counter">
    <h2>movies found: <?php echo Movie::$contatore ?></h2>
  </section>

</body>

</html>