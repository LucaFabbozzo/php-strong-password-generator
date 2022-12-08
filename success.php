<?php

session_start()

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>PHP Strong Password Generator</title>
</head>

<body>

  <div class="container w-50 py-5 m-auto text-center">
    <h2>La password generata è:</h2>
    <div>
      <?php echo $_SESSION['password'] ?>
    </div>
  </div>

</body>

</html>