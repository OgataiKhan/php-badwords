<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <h1>PHP Badwords</h1>
  <form action="output.php" method="GET">
    <label for="paragraph">Paragraph:</label>
    <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Enter a sentence or paragraph..."></textarea>
    <label for="censorword">Word to censor:</label>
    <input type="text" name="censorword" id="censorword" placeholder="Enter the word you wish to censor...">
    <button>Submit</button>
  </form>
</body>
</html>