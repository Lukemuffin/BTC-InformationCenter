<?php
$pageTitle = "2015 Dodge Charger";
include("../layout/header.php");
include("../layout/navbar.php");

session_start();
if(isset($_GET['.././cars/15DodgeCharg.php'])) {
  $selection = '15DodgeCharg';
}
$_SESSION['user-selection'] = $selection;

?>
<div id="page-header">
  <div  class="container">
    <h1>2015 Dodge Charger</h1>
    <p>$20,995</p>
  </div>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h2>2015 Dodge Charger</h2>
        <p>Title: Clean</p>
        <p>Price: $20,995</p>
        <p>Color: Black</p>
        <p>Doors: 2</p>
        <p>Engine: 3.6 V6</p>
        <p>Miles: 33,000</p>
        <p>Transmission: Automatic</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <img src="../assets/img/car04.jpg" width="350px"></img>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12" style="height:25px;"></div>
<?php
include("../layout/footer.php");
?>
