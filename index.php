<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POST Superglobals</title>
</head>

<body>

    <?php
    //Add PHP $_POST superglobal assignment and echo
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $lang = $_POST['lang'];
        echo '<p>' . $name . '</p>';
        echo '<p>' . $lang . '</p>';
    }
    ?>

   <!-- Form Input --> 
   <form method="post" action="index.php">
        <input type="text" name="name" >
        <input type="text" name="lang" >
        <input type="submit" value="Submit">
    </form>
</body>
</html>