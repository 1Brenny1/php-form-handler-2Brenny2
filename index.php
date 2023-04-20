<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>

  <body>
<form method="POST">
  <div class="mdl-textfield mdl-js-textfield">
    <input name="name" class="mdl-textfield__input" type="text" id="sample1">
    <label class="mdl-textfield__label" for="sample1">What is your name?</label>
  </div>
</form>


    <?php
      if (isset($_POST["name"])) {
        echo "Hello, " + $_POST['name'];
      }
    ?>
    
  </body>
  
</html>
