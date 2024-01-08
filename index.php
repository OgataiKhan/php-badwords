<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
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
    <form action="output.php" method="GET">
      <label for="paragraph">Paragraph</label>
      <textarea name="paragraph" id="paragraph" class="input-field" cols="30" rows="10" placeholder="Enter a sentence or paragraph..."></textarea>
      <label for="censorword">Word to censor</label>
      <input type="text" name="censorword" id="censorword" class="input-field" placeholder="Enter the word you wish to censor...">
      <button class="btn">Submit</button>
    </form>
  </main>
</body>
</html>