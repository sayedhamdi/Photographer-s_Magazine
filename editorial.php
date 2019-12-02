<!-- Header -->
<?php include "./includes/header.php" ?>
<body>
<div class="container img-container ">
    <?php
      $directory = './img/Pages/Photography/Editorial/';
      $scanned_directory =array_diff(scandir($directory), array('..', '.'));
      for ($i=2;$i<sizeof($scanned_directory);$i++){
      ?>
    <div class="row text-center">
        <div class="col-md-4">
            <a href='<?php echo $directory.'/'.$scanned_directory[$i]?> ' target="_blank">
                <img src="<?php echo $directory.$scanned_directory[$i]?>">
            </a>
            <h5>Editorial 1</h5>
        </div>
        <div class="col-md-4">
            <a href='<?php echo $directory.'/'.$scanned_directory[$i+1]?> ' target="_blank">
                <img src="<?php echo $directory.$scanned_directory[$i+1]?>" >
            </a>
            <h5>Editorial 2</h5>
        </div>
        <div class="col-md-4">
            <a href='<?php echo $directory.'/'.$scanned_directory[$i+2]?> ' target="_blank">
                <img src="<?php echo $directory.$scanned_directory[$i+2]?>">
            </a>
            <h5>Editorial 3 </h5>
        </div>
    </div>
    <?php $i+=3;}?>

</div>
</body>
<!-- footer start -->
<?php include "./includes/footer.php" ?>