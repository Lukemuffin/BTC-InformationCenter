<?php
$pageTitle = "2015 Jeep Wrangler";
include("../layout/header.php");
include("../layout/navbar.php");

session_start();
if(isset($_GET['.././cars/15JeepWrang.php'])) {
  $selection = '15JeepWrang';
}
$_SESSION['user-selection'] = $selection;

?>
<div id="page-header">
  <div  class="container">
    <h1>2015 Jeep Wrangler</h1>
    <p>$41,995</p>
  </div>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h2>2015 Jeep Wrangler</h2>
        <p>Title: Clean</p>
        <p>Price: $41,995</p>
        <p>Color: Jet Black</p>
        <p>Doors: 4</p>
        <p>Engine: 3.6 V6</p>
        <p>Miles: 18,000</p>
        <p>Transmission: Automatic</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <img src="../assets/img/car02.jpg" width="350px"></img>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12" style="height:25px;"></div>
<?php
include("../layout/footer.php");
?>
