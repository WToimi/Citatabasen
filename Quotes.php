<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script src="jquery-3.1.1.js"></script>
    <title>Quotes - Citatabasen</title>
  </head>
  <body style="margin-top:10%;margin-left:14%;margin-right:3%;">
    <ol id="bas"></ol>
      <script> $( "#bas" ).load( "base.html" ); </script>
      <ol style="margin-bottom:0px;" id="searchboxload"></ol>
      <script>$("#searchboxload").load("Searchbox.html");</script>




<div id="left" style="margin-left:3.5%;">

  <?php require('config/db.php');
  $mysqli = new mysqli($servername, $username, $password, $dbname);

  $i = 0;

  while ($i<10) {

  $qry = mysqli_query($mysqli, "SELECT Id,Name,Quote,Picture,Category,Lang FROM quotes WHERE 'Id' = ".$i."");

  while($rows = mysqli_fetch_array($qry)){

  $id = $rows['Id'];
  $quote = $rows['Quote'];
  $name = $rows['Name'];
  $picture = $rows['Picture'];
  $category = $rows['Category'];
  $lang = $rows['Lang'];



  echo "<div class='Quote'>";
  echo "<div class='Quoteinner'>";
  echo "<img src='${picture}' class='Quoteinnerimg'>";
  echo "<p id='textfix'>${quote}</p>";
  echo "<p id='namefix'>${name}</p>";
  echo "<p id='CatLand'>,ID:${id}</p>";
  echo "<p id='CatLand'>${category}, {$lang}</p>";
  echo "</div></div>";
  $i++;

  }
  }


  ?>








</div>
<div id="right">
  <?php require('config/db.php');
  $mysqli = new mysqli($servername, $username, $password, $dbname);



for ($i=0; $i < 10; $i++) {
  //Hämtar grejer från "quotes"
  $qry = mysqli_query($mysqli, "SELECT Id,Name,Quote,Picture,Category,Lang FROM quotes WHERE 'Id' = ".$i."");
//lägger in id, citat etc i en array.
  while($rows = mysqli_fetch_array($qry)){

  $id = $rows['Id'];
  $quote = $rows['Quote'];
  $name = $rows['Name'];
  $picture = $rows['Picture'];
  $category = $rows['Category'];
  $lang = $rows['Lang'];
//skriver ut datan i rätt format.
  echo "<div class='Quote'>";
  echo "<div class='Quoteinner'>";
  echo "<img src='${picture}' class='Quoteinnerimg'>";
  echo "<p id='textfix'>${quote}</p>";
  echo "<p id='namefix'>${name}</p>";
  echo "<p id='CatLand'>,ID:${id}</p>";
  echo "<p id='CatLand'>${category}, {$lang}</p>";
  echo "</div></div>";
}
}



  ?>


</div>
  </body>
</html>
