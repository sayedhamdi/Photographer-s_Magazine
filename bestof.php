<!-- Header -->
<?php include "./includes/header.php" ?>
<style>
.col-md-4>a>img{
    width: 300px;
    height: 80%;
    margin: 15px;
    object-fit: cover;
}
</style>
<body>
<div class="row text-center" style="padding : 100px">
    <?php for ( $i=0 ; $i<=2 ; $i++ ) { ?>
        <div class="col-md-4">
                <img src="./img/Pages/Photography/Best of/Hanen (1).jpg">
                <p> Hanen </p>
        </div>
    <?php } ?>
</div>
</body>
<!-- footer start -->
<?php include "./includes/footer.php" ?>
