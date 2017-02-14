<?php
$pageTitle = "2006 Nissan 350z";
include("../layout/header.php");
include("../layout/navbar.php");

session_start();
if(isset($_GET['.././cars/06Niss350z.php'])) {
  $selection = '06Niss350z';
}
$_SESSION['user-selection'] = $selection;

?>
<div id="page-header">
  <div  class="container">
    <h1>2006 Nissan 350z</h1>
    <p>$9,950</p>
  </div>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h2>2006 Nissan 350z</h2>
        <p>Title: Salvage</p>
        <p>Price: $9,950</p>
        <p>Color: Pearl White</p>
        <p>Doors: 2</p>
        <p>Engine: 3.5 V6</p>
        <p>Miles: 108,000</p>
        <p>Transmission: Manual</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <img src="../assets/img/car01.jpg" width="350px"></img>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12" style="height:25px;"></div>
<?php
include("../layout/footer.php");
?>
