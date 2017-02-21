<?php
$pageTitle = "2007 BMW M6";
include("../layout/header.php");
include("../layout/navbar.php");

session_start();
if(isset($_GET['.././cars/07BMWM6.php'])) {
  $selection = '07BMWM6';
}
$_SESSION['user-selection'] = $selection;

?>
<div id="page-header">
  <div  class="container">
    <h1>2007 BMW M6</h1>
    <p>$21,900</p>
  </div>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h2>2007 BMW M6</h2>
        <p>Title: Clean</p>
        <p>Price: $21,900</p>
        <p>Color: Black</p>
        <p>Doors: 2</p>
        <p>Engine: 5.0 V10</p>
        <p>Miles: 98,000</p>
        <p>Transmission: Automatic</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <img src="../assets/img/car05.jpg" width="350px"></img>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12" style="height:25px;"></div>
<?php
include("../layout/footer.php");
?>
