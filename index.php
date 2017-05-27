<html>
<head>
    <meta charset="utf-8"> <link rel="stylesheet" href="style.css"> </script>
    <link rel="stylesheet" href="style.css">
    <title>Citatabasen - The quote database</title>
    <!--laddar in "jquery-3.1.1.js, det är viktigt! glöm det inte!" -->
    <script src="jquery-3.1.1.js"></script>
    <script src="Scripts/Main.js"></script>
</head>
<body style="margin-right:30%;margin-left:19%;margin-top:13%;">
<!-- Den laddar in HTML-koden från "base.html" så man slipper upprepa det på varje flik. -->
  <ol id="bas"></ol>
    <script> $( "#bas" ).load( "base.html" ); </script>

<!-- Här skriver man htmlkoden som är individuell för varje sida. -->
<h2>Welcome to Citatabasen!</h2>
<p id="welcome">
The Quote database! Whether you're looking for a particular quote of just something random or funny, this is the right place for you!
Citatabasen is also an API, check out the instructions page if you want to learn more!
<br/>
<br/>
If you're looking to submit your own quote you'll first have to register, then you submit it on the "Submit Quote"-Tab.
We'll need to make sure you're not just a troll first so the quote might not appear on the site instantly. But just stay put and
 it'll probably appear soon.
 <br/>
<h3>Quote of the day!</h3>



<?php require('config/db.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);

$qry = mysqli_query($mysqli, "SELECT Id,Name,Quote,Picture,Category,Lang FROM quotes WHERE Id = 11");

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
echo "<p id='CatLand'>${category}, {$lang}</p>";
echo "</div></div>";
}?>




</div>
</div>
</div>
</body>
</html>
