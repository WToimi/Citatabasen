
<style>
  body{
    font-size:200%;
    margin-left:100px;
    background-color:lightgray;

  }
  #Connection{
    font-size:14px;
    color:green;
    margin: 100px auto auto auto;
    float:left;
  }
  #Thank{
    float:left;
  }
  #Thankimg{

  }
</style>
<?php
require('../config/db.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$qry = mysqli_query($mysqli, "SELECT Id FROM quotes");
while($rows = mysqli_fetch_array($qry)){
$id = $rows['Id'];

}


  $ID = mysqli_real_escape_string($mysqli,$id+1);
  $Quotee = mysqli_real_escape_string($mysqli,$_POST["Quotee"]);
  $Quote = mysqli_real_escape_string($mysqli, $_POST["Quote"]);
  $Picture = mysqli_real_escape_string($mysqli,$_POST["Pic_"]);
  $Cat = mysqli_real_escape_string($mysqli,$_POST["category"]);
  $Lang = mysqli_real_escape_string($mysqli,$_POST["lang"]);

 ?>

<?php

require('../config/db.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli -> connect_error) {
  die("Du kan inte ansluta till databasen :(");
}
echo "<p id='Connection'>Connection established...</p>";
echo "</br>";
echo "</br>";

$sql = "INSERT INTO quotes (Id,Name,Quote,Picture,Category,Lang) VALUES ('$ID','$Quotee','$Quote','$Picture','$Cat','$Lang')";

if ($mysqli -> query($sql)===true) {
  echo "<p id='Thank'>You're quote was submitted.</p>";
  echo "<br>";
  echo "<p id='Thank'>Thank you for your contribution!</p>";
}
else {
  echo "Error: ".$sql."<br>". $mysqli -> error;
}
echo "<br><p>Your quote has the id ${ID}</p>";

  ?>
  <img id="Thankimg" src="http://i.imgur.com/4IZp8Eu.jpg" alt="">
<script type="text/javascript">
window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "../Submit.php";

    }, 4000);
</script>
