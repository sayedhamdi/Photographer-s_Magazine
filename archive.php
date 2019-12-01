<!-- Header -->
<?php include "./includes/header.php" ?>

<body>
    <div class="container">
        <div class="archive-date">
            <span>
                The 17th of November 2019
            </span>

            <hr class="archive-sperator-line">
        </div>
        <?php

        $directory = './img/Pages/Archive';
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));
        for ($i=2;$i<sizeof($scanned_directory);$i++){
        ?>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid lazyestload" src='<?php echo $directory.'/'.$scanned_directory[$i]?> '/>
                <p class='Nexa-light'>
                    Archive Picture 1
                </p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid lazyestload " src='<?php echo $directory.'/'.$scanned_directory[$i+1]?>'/>
                <p class='Nexa-light'>
                    Archive Picture 2
                </p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid lazyestload" src='<?php echo $directory.'/'.$scanned_directory[$i+2]?>'/>
                <p class='Nexa-light'>
                    Archive Picture 3
                </p>
            </div>
        </div>
      <?php $i+=3;}?>
    </div>

</body>


<!-- footer start -->
<?php include "./includes/footer.php" ?>
