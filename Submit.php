<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script src="jquery-3.1.1.js"></script>
    <title>Submit</title>
  </head>
  <body style="margin: 12% 19% 0 19%;">
    <ol id="bas"></ol>
      <script> $( "#bas" ).load( "base.html" ); </script>
      <!-- kolla först om personen är inloggad -->




<!-- PHP -->
<!-- API -->



  <h1>Submit a quote</h1>
      <p id="Submit_Paragraph">
Hi!
<br/>
If you're looking to submit a quote you've come to the right page! If you're not already registered you'll need to do that first, afterwards just fill in the form and you're all set!
</p>
<p>
(The quote will not appear on the page right away since we'll have to check it out to make sure you're not just trolling, this is to prevent spamming that will harm other users experience.)
</p>

<?php
require('config/db.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$qry = mysqli_query($mysqli, "SELECT Id FROM quotes");
while($rows = mysqli_fetch_array($qry)){
$id = $rows['Id'];

}
?>


<form style="margin:auto;" class="" action="server/SubmitQuote.php" method="post">


  <label for="QuoteLabel">Quote text:</label>
  <textarea id="QuoteLabel"name="Quote" rows="4" cols="40"></textarea>
  <br>
  <label for="QuoteeLabel">Quotee:</label>
  <input id="QuoteeLabel" type="text" name="Quotee" value="">
  <br>
  <label for="PictureLabel">Picture Link: </label>
  <input id="PictureLabel" type="text" name="Pic_" value="https://i.imgur.com/hJKZ4Gz.png"><br>
<br>
<label for="Catinput">Category:</label>
<select id="Catinput" name="category">
  <option value="Funny">Funny</option>
    <option value="Authors">Authors</option>
      <option value="Technology">Technology</option>
        <option value="Celebrities">Celebrities</option>
          <option value="Inspirational">Inspirational</option>
            <option value="4chan">4chan</option>
              <option value="Reddit">Reddit</option>
                <option value="Movies">Movies</option>
                  <option value="Random">Random</option>
                    <option value="NTI">NTI</option>
                      <option value="Edgy">Edgy</option>
                        <option value="Politics">Politics</option>
                          <option value="Science">Science</option>
                            <option value="Other">Other</option>
                              <option value="Gaming">Gaming</option>
                                <option value="Youtube">Youtube</option>

</select>
<br>
<label for="Langinput">Language:</label>
<select id="Langinput" name="lang">
  <option value="English">English</option>
  <option value="Swedish">Swedish</option>
  <option value="Other">Other</option>
</select>
<br>

<input type="submit" name="" value="Submit Quote!"></input>
</form>



  </body>
</html>
