<?php

    if (isset($_POST['username'])) {

      require ('config/db.php');
      $mysqli = new mysqli($servername, $username, $password, $dbname);

      $username = mysqli_real_escape_string($_POST['username']);
      $password = mysqli_real_escape_string($_POST['password']);

      if ($username === 'username' && $password === 'password' ) {
        echo "1";
        console.log("#wooo");
      } else {
        echo "0";
      }



    }

?>
