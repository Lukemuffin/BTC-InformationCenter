<?php
$pageTitle = "Home";
include("./layout/header.php");
include("./layout/navbar.php");
?>
<div id="home-header">
  <div class="container">
    <h1>Encom Motors</h1>
    <p>Established 800BC.</p>
  </div>
</div>
<div id="home-body">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <img src="assets/img/carhome.png" width="400px"></img>
        <h2>Looking for a vehicle?</h2>
        <p>We have just the vehicle for you! Feel free to browse our certified used vehicles by <a href="./vehicles">clicking here!</a></p>
      </div>
    </div>
  </div>
</div>
<?php
include("./layout/footer.php");
?>
