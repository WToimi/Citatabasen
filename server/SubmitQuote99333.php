<?php

  // skicka till databasen

  require ('../config/db.php');

  // mysqli är ett objekt som redan finns i PHP.
  // men vi gör ett nytt med värdena av DB.php's konstanter
  $mysqli = new mysqli($servername, $username, $password, $dbname);

  $Quote_Id = mysqli_real_escape_string($mysqli, $_POST['Id']);
  $Quote_Namn = mysqli_real_escape_string($mysqli, $_POST['Name']);
  $Quote_Quote = mysqli_real_escape_string($mysqli, $_POST['Quote']);
  $Quote_Picture = mysqli_real_escape_string($mysqli, $_POST['Picture']);

  $insert = mysqli_query($mysqli, "INSERT INTO quote (Id, Name, Quote, Picture) VALUES ('$Quote_Id', '$Quote_Namn','$Quote_Quote','$Quote_Picture',)");

  // funkar det?
  if ($insert) {
    // 1 = true
    echo "1";
  } else {
    // 0 = false
    echo "0";
  }



 ?>
