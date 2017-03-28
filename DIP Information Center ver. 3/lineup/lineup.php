<?php
$pageTitle = "Home";
include("../layout/header.php");
include("../layout/navbar.php");
?>

<div id="lineup-header">
  <div class="container">
    <div class="row">
      <img src="/assets/img/logo.png"></img>
      <div class="col-xs-12" style="height:25px;"></div>
      <p>Lineup</p>
    </div>
  </div>
</div>
<div id="lineup-body">
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <?php include("../assets/php/getLineup.php") ?>
      </div>
    </div>
  </div>
</div>
<?php
include("../layout/footer.php");
?>
