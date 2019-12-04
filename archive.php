<!-- Header -->
<?php include "./includes/header.php" ?>
<?php include "./includes/db_cnx.php" ?>

<body>
    <div class="container img-container">
        <div class="archive-date">
            <span>
                The 17th of November 2019
            </span>

            <hr class="archive-sperator-line">
        </div>
        <div class="row text-center">
        <?php
            $res = mysqli_query($conn,'select dis,photographe.firstname,photographe.lastname from photographe,image 
            where photographe.id = image.owner');
            $i=1;
            while($row = mysqli_fetch_array($res)){ 
        ?>
            <div class="col-md-4">
                <a href='<?php echo $row['dis']?> ' target="_blank">
                    <img class="img-responsive lazyestload" src='<?php echo $row['dis']?> ' />
                </a>
                <h5>
                <?php echo "".$row['firstname']." ". $row['lastname']?>
                </h5>
            </div>
        <?php if($i % 3 == 0) echo('</div>
        <div class="row text-center">');
                $i++;
        }?>
        </div>
    </div>

</body>


<!-- footer start -->
<?php include "./includes/footer.php" ?>