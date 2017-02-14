<?php
$pageTitle = "Vehicles";
include("../layout/header.php");
include("../layout/navbar.php");
?>
<div id="page-header">
  <div  class="container">
    <h1>Vehicles</h1>
    <p>A great selection of vehicles that we have for sale!</p>
  </div>
</div>
<div id="vehicles">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div id="vehicle">
          <a href=".././cars/06Niss350z.php">
            <img src="../assets/img/car01.jpg" width="200px">
            <h4>2006 Nissan 350z</h4>
            <h3>$9,950</h3>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div id="vehicle">
          <a href=".././cars/15JeepWrang.php">
            <img src="../assets/img/car02.jpg" width="200px">
            <h4>2015 Jeep Wrangler</h4>
            <h3>$41,995</h3>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div id="vehicle">
          <a href=".././cars/11FordF150.php">
            <img src="../assets/img/car03.jpg" width="200px">
            <h4>2011 Ford F-150</h4>
            <h3>$32,900</h3>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div id="vehicle">
          <a href=".././cars/15DodgeCharg.php">
            <img src="../assets/img/car04.jpg" width="200px">
            <h4>2015 Dodge Charger</h4>
            <h3>$20,995</h3>
          </a>
        </div>
      </div>
      <div class="col-xs-12" style="height:25px;"></div>
      <div class="col-md-3">
        <div id="vehicle">
          <a href=".././cars/07BMWM6.php">
            <img src="../assets/img/car05.jpg" width="200px">
            <h4>2007 BMW M6 Coupe</h4>
            <h3>$21,900</h3>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("../layout/footer.php");
?>
