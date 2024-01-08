<?php
  $paragraph = trim($_GET['paragraph']);
  $censor_word = trim($_GET['censorword']);
  $censored_paragraph = str_replace($censor_word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords - output</title>
  <!-- Google font: Roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- /Google font: Roboto -->
  <!-- My css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- /My css -->
</head>
<body>
  <main>
    <h1>PHP Badwords</h1>
    <h2>The paragraph you entered is:</h2>
    <p><?php echo $paragraph ?></p>
    <h3>Length:</h3>
    <p><?php echo strlen($paragraph) ?> characters</p>
    <h2>The word you wish to censor is:</h2>
    <p><?php echo $censor_word ?></p>
    <h2>Here is the censored paragraph:</h2>
    <p><?php echo $censored_paragraph ?></p>
    <h3>Length:</h3>
    <p><?php echo strlen($censored_paragraph) ?> characters</p>
  </main>
</body>
</html>