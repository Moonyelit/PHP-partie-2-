<?php
include_once './algo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php
// exo 1
echo $name;
  
  
// exo 2
echo $lastname;
echo $firstname;
echo $age;

//   exo 3
  echo $km . "<br>";

  
//   exo 4
echo $text;
echo $int . "<br>";
echo $float . "<br>";

// exo 5
echo $int5 . "<br>";
?>

<!-- exo 6 -->
<p>Bonjour <?php echo$exo6name ?> ,comment vas tu ? </p>


<!-- exo  7 -->
<p>Bonjour <?php echo $exo7lastname . " " . $exo7firstname; ?>, tu as <?php echo $exo7agename; ?> ans.</p>

<!-- exo 8 -->

<?php
echo $exo8var1 . "<br>";
echo $exo8var2 . "<br>";
echo $exo8var3 . "<br>" ;

?>

</body>
</html>