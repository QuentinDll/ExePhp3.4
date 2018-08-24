<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 3</title>
</head>
<body>
  <p>
    <?php
    // declaration de la fonction
    function melting($name1, $name2){
      $result = $name1 .' '. $name2;
      return $result;
    }
    echo melting('Moe', 'Jake');
    ?>
  </p>
</body>
</html>
