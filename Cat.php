<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script src="jquery-3.1.1.js"></script>
    <script src="Scripts/Main.js"></script>
    <title>Categories - Citatabasen</title>
  </head>
  <body style="margin-left:12%;margin-top:10%;margin-right:10%;">
    <ol id="bas"></ol>
      <script> $( "#bas" ).load( "base.html" ); </script>

<!--Laddar in söklådan-->
<ol id="searchboxload"></ol>
<script>$("#searchboxload").load("Searchbox.html");</script>



<div>
<!-- Left side -->
<div id="left" style="margin:0 0 0 6%;">
  <!-- Category box (link)-->
  <a href="Cat.php?Swedish">
    <!-- Swedish -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/2TP7xpQ.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!-- Funny -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/cW6kArF.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!-- Inspirational -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/nu0lTr0.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!-- Movies -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/ItV59fp.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!-- NTI -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/uscjv8b.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!-- Politics -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/E17EvOX.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!-- Science -->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/ENhAWbG.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
  <!-- Category box (link)-->
  <a href="#">
    <!--Technology-->
  <div class="catcont" style="background-image:
  url(http://i.imgur.com/pduLd7Y.png); width:100%;background-size:100% 100%;">
  </div>
  </a>
  <!-- -->
</div>



<!-- Right side -->
<div id="right" style="margin:0 0 0 3%;">
<!-- Category box (link)-->
<a href="#">
  <!-- English -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/cLYdjbN.png); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="http://4chan.org/">
  <!-- 4Chan -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/Jk1psfp.gif); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="#">
  <!-- Reddit -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/xiGI2uJ.png); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="#">
  <!-- Random -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/3cQIiI1.png); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="#">
  <!-- Edgy -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/0IW7H7X.png); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="#">
  <!-- Celebrities -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/BvC9Wpv.png); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="#">
  <!-- Authors -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/pCayzu9.png); width:100%;background-size:100% 100%;">
</div>
</a>
<!-- -->
<!-- Category box (link)-->
<a href="#">
  <!-- Other -->
<div class="catcont" style="background-image:
url(http://i.imgur.com/6tPgIEQ.png); width:100%;background-size:100% 100%;">
</div>
</a>


<!--

Categories to add:

Gaming
Youtube


 -->
</div>
</div>

<!-- Black separator line -->
<div style="border-bottom:solid 1px black;  content: '';  display: block; clear: both; width: 88%; margin-left:9%;"></div>

<!---->
<div style="margin-left:8%;margin-top:1%;">

<div style="width:90%;margin:auto;">
  <?php require('config/db.php');
  $mysqli = new mysqli($servername, $username, $password, $dbname);


$SetCat = null;
  function SetSwedish(){
    $SetCat = 'Swedish';
  }
  if(isset($_GET['Swedish'])){
    SetSwedish();
  }

if ($SetCat === 'Swedish') {
  $qry = mysqli_query($mysqli, "SELECT Id,Name,Quote,Picture,Category,Lang FROM quotes WHERE Lang = 'Swedish'");

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



  }
}




  ?>

</div>



</div>


  </body>
</html>
