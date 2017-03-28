<?php
$pageTitle = "Home";
include("../layout/header.php");
include("../layout/navbar.php");
?>

<div id="schedule-header">
  <div class="container">
    <div class="row">
      <!--<img src="/assets/img/logo.png"></img>-->
      <div class="col-xs-12" style="height:25px;"></div>
      <p>Schedule</p>
    </div>
  </div>
</div>
<div id="schedule-body">
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="now-performing">Now Performing</div>
        <?php include("../assets/php/query.php") ?>
        <div class="up-next">Up Next</div>
        <div class="band 2">5:00AM Band 2</div>
        <div class="band 3">6:00AM Band 3</div>
      </div>
    </div>
  </div>
</div>
<?php
include("../layout/footer.php");
?>
