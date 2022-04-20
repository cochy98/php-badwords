<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu';

# Memorizzo una variabile GET
$censoredWord = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <p>
    <?php
      # Stampo la parola censurata, recuperata tramite GET
      echo 'Parola censurata: '. $censoredWord;
    ?>
  </p>
  <p>
    <?php
      # Sostituisco la parola passata tramite GET con 3 asterischi (***), nel pagarafo presente e visualizzo il paragrafo modificato, compresa la sua lunghezza
      var_dump(str_replace($censoredWord, " *** ", $paragraph));
    ?>
  </p>
</body>
</html>
