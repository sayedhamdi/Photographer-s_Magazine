<!-- Header -->
<?php include "./includes/header.php" ?>
<style>
    .col-md-4>a>img {
        width: 300px;
        height: 80%;
        margin: 15px;
        object-fit: cover;
    }
</style>

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
        <div class="row text-center">
            <div class="col-md-4">
                <a href='<?php echo $directory.'/'.$scanned_directory[$i]?> ' target="_blank">
                    <img class="img-responsive lazyestload" src='<?php echo $directory.'/'.$scanned_directory[$i]?> ' />
                </a>
                <h5>
                    Archive Picture 1
                </h5>
            </div>
            <div class="col-md-4">
                <a href='<?php echo $directory.'/'.$scanned_directory[$i+1]?> ' target="_blank">
                    <img class="img-responsive lazyestload"
                        src='<?php echo $directory.'/'.$scanned_directory[$i+1]?> ' />
                </a>
                <h5>
                    Archive Picture 2
                </h5>
            </div>
            <div class="col-md-4">
                <a href='<?php echo $directory.'/'.$scanned_directory[$i+2]?> ' target="_blank">
                    <img class="img-responsive lazyestload"
                        src='<?php echo $directory.'/'.$scanned_directory[$i+2]?> ' />
                </a>
                <h5>
                    Archive Picture 3
                </h5>
            </div>
        </div>
        <?php $i+=3;}?>
    </div>

</body>


<!-- footer start -->
<?php include "./includes/footer.php" ?>