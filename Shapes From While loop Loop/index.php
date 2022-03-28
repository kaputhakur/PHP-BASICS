<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapes From While loop</title>
</head>

<body>
    <!-- Right Triangle-->
    <H3>1.</H3>
    <?php
    $R = 1;
    while ($R <= 10) {
        $C = 1;
        while ($C <= $R) {
            echo " *";
            $C++;
        }
        echo "<br>";
        $R++;
    }
    ?>

    <!-- mirror right triangle -->
    <?php
    // $R=1;
    // while($R<=10){
    //   $C=$R;
    //   while($C<=10){
    //         echo" *";
    //         $C++;
    //     }
    //    echo "<br/>";
    //     $R++;
    // }
    ?>
    <br> <br>
    <?php
    $R = 1;
    while ($R <= 10) {
        $C = 10;
        while ($C >= $R) {
            echo "* ";
            $C--;
        }
        echo "<br/>";
        $R++;
    }
    ?>
    <br> <br>
    <!--square  -->
    <h3>2.</h3>
    <?php
    $OUTER = 1;
    while ($OUTER <= 10) {
        $INNER = 1;
        while ($INNER <= 10) {
            echo " *";
            $INNER++;
        }
        echo "<br>";
        $OUTER++;
    }
    ?>
    <br><br>
    <!-- rectangle -->
    <h3>3.</h3>
    <?php
    $OUTER = 1;
    while ($OUTER <= 5) {
        $INNER = 1;
        while ($INNER <= 10) {
            echo " *";
            $INNER++;
        }
        echo "<br>";
        $OUTER++;
    }
    ?>
    <br><br>
    <!-- reverse right triangle -->
    <h3>4.</h3>
    <?php
    $outer = 1;
    while ($outer <= 10) {
        $space = 9;
        while ($space >= $outer) {
            echo "&nbsp ";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo '*';
            $print++;
        }
        echo "<br>";
        $outer++;
    }
    ?>
    <br><br>

    <?php
    $outer = 10;
    while ($outer >= 1) {
        $space = 9;
        while ($space >= $outer) {
            echo "&nbsp ";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo "*";
            $print++;
        }
        echo "<br>";
        $outer--;
    }
    ?>
    <br><br>
    <!-- triangle -->
    <h3>5.</h3>
    <?php
    $outer = 1;
    while ($outer <= 10) {
        $space = 9;
        while ($space >= $outer) {
            echo "&nbsp";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo "* ";
            $print++;
        }
        echo "<br>";
        $outer++;
    }
    ?>
    <br><br>
    <!-- reverse triangle -->
    <?php
    $outer = 10;
    while ($outer >= 1) {
        $space = 9;
        while ($space >= $outer) {
            echo "&nbsp";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo "* ";
            $print++;
        }
        echo "<br>";
        $outer--;
    }
    ?>
    <!-- M -->
    <h3>6.</h3>
    <?php
    $R = 1;
    while ($R <= 5) {
        $C = 5;
        while ($C >= $R) {
            echo "* ";
            $C--;
        }
        echo "<br>";
        $R++;
    }
    $R1 = 1;
    while ($R1 <= 5) {
        $C1 = 1;
        while ($C1 <= $R1) {
            echo "* ";
            $C1++;
        }
        echo "<br>";
        $R1++;
    }
  ?>
     <!-- M -->
     <h3>7.</h3>
     <?php
  
  $R=10;
  while($R>=2){
      $space=9;
      while($space>=$R){
          echo"&nbsp ";
          $space--;
      }
      $print=1;
      while($print<=$R){
          echo"*";
          $print++;
      }
      echo"<br>";
      $R--;
  }
     $R1=2;
     while($R1<=10){
         $space1=9;
         while($space1>=$R1){
             echo"&nbsp ";
             $space1--;
         }
         $print1=1;
         while($print1<=$R1){
             echo"*";
             $print1++;
         }
         echo"<br>";
         $R1++;
     }
     ?>
     
</body>

</html>
