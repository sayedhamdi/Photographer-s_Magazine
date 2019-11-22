<!-- Header -->
<?php include "./includes/header.php" ?>


    <div class="form-group container">
      <?php
      $directory = './img/Pages/Photography/Editorial/';
      $scanned_directory =array_diff(scandir($directory), array('..', '.'));
      for ($i=2;$i<sizeof($scanned_directory);$i++){
      ?>
              <div class="row"  style="padding : 100px">
                  <div class="col-md-4">
                      <img src="<?php echo $directory.$scanned_directory[$i]?>" width="90%" height="100%">
                      <h5 class="text-center">Editorial 1</h5>
                  </div>
                  <div class="col-md-4">
                      <img src="<?php echo $directory.$scanned_directory[$i+1]?>" width="90%" height="100%">
                      <h5 class="text-center">Editorial 2</h5>
                  </div>
                  <div class="col-md-4">
                      <img src="<?php echo $directory.$scanned_directory[$i+2]?>" width="97%" height="100%">
                      <h5 class="text-center">Editorial 3 </h5>
                  </div>
              </div>
    <?php $i+=3;}?>

    </div>

<!-- footer start -->
<?php include "./includes/footer.php" ?>
