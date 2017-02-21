<?php
$pageTitle = "2011 Ford F-150";
include("../layout/header.php");
include("../layout/navbar.php");

session_start();
if(isset($_GET['.././cars/11FordF150.php'])) {
  $selection = '11FordF150';
}
$_SESSION['user-selection'] = $selection;

?>
<div id="page-header">
  <div  class="container">
    <h1>2011 Ford F-150</h1>
    <p>$32,900</p>
  </div>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h2>2011 Ford F-150</h2>
        <p>Title: Clean</p>
        <p>Price: $32,900</p>
        <p>Color: Jet Black</p>
        <p>Doors: 4</p>
        <p>Engine: 6.2 V8</p>
        <p>Miles: 94,000</p>
        <p>Transmission: Automatic</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <img src="../assets/img/car03.jpg" width="350px"></img>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12" style="height:25px;"></div>
<?php
include("../layout/footer.php");
?>
