<?php 
  $names = array('Timmy', 'Dwayne', 'John', 'Smitty');
    $count = 0;

  while($count < count($names)) {
    echo "<li>Hi my name is $names[$count]</li>";
    $count++;
  }
?>

<h1><?php echo $names[3]   ?></h1>
