<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maggiore,Minore,Uguale</title>
</head>
<body>
    <?php
      $x = rand(0,50);
      $y = rand(0,50);
      $max;

      echo "x = " . $x . "  y = " . $y;
      

      if ($x > $y) {
         $max = $x;
         echo "<p>x e' maggiore di y </p>";
      }else if ($x < $y) {
        $max = $y;
        echo "<p>x e' minore di y </p>";
      }else {
        $max = $x;
         echo "<p>x e' uguale a y </p>";
      }


      if ($max < 10 ){
        echo "<p>" . $max . " e' minore di 10 </p>";
      }else if ($max >= 10 && $max <= 20){
        echo "<p>" . $max . " e' compreso tra 10 e 20 </p>";
      }else if ($max > 20 && $max <= 30){
        echo "<p>" . $max . " e' compreso tra 20 e 30</p>";
      }else {
        echo "<p>" . $max . " e' maggiore di 30</p>";
      }



    ?>
    
</body>
</html>