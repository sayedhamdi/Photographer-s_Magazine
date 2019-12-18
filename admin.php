<?php 
    include '/includes/db_cnx.php'; 
?>

<head>
    <link rel="stylesheet" href="/css/styles/style.css" integrity="">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<style>
    .img-div {
        display: inline-block;
        width: 250px;
        height: 250px;
        background-size: cover;
    }

    #checkdivs input[type=checkbox] {
        display: none;
        z-index: 99;
    }

    #checkdivs input[type=checkbox]:checked+.img-div {
        background-color: #000000a8;
        background-blend-mode: overlay;
        background-repeat: no-repeat;
    }

    .checkdiv {
        position: relative;
        height: 250px;
        width: 250px;
        display: inline;
    }

    
    .checkdiv:hover .img-div {
        background-color: #000000a8;
        background-blend-mode: overlay;
    }

    .checkdiv:hover .img-detail {
        transition: ease-in-out .5s;
        opacity: 1;
        margin-top:-50%;
    }


    .img-detail {
        position: absolute;
        left: 0%;
        width: 100%;
        opacity: 0;
        margin-top: -20%;
        background-color:white;
        padding:10px 0;
    }

    .expand{
        position: absolute;
        top: -100px;
        left: 90px;
        opacity: .2;

    }

    .expand:hover{
        transition:ease-in-out .5s;
        opacity: .9
    }

    .expand>img{
        width:60%;
    }

    .category{
        margin: 0px 15px;
        float:right;
        font-family:Nexa-Light;
        font-size:12px
    }

    .img-detail>.photographe {
        font-family: Nexa-Bold;
        font-size: 20px;
        color:#010101;
        display:block;
        margin: 20px 20px 0 20px;
    }


    .date{
        font-size: 12px;
        font-family: Nexa-Light;
        color: #000000a6;
        margin: 0px 40px;
    }

    .action-btns {
        top:10px;
        display: block;
        position: relative;
        margin: 20px 40px;
    }

    .btn {
        font-size: 12px;
        cursor: pointer;
        background-color: white;
        border: 0;
        padding: 5px 15px;
        margin: 0 5px;
        color: black;
        font-family: Nexa-Light;
    }

    .btn-add {
        border: 0.5px solid black;
    }

    .btn-add:hover{
        color:green;
        border-color:green;
    }

    .btn-decline {
        font-weight: 700;
        border-bottom: 1px solid black;
        border-top: .7px solid #000000d9;
    }

    .btn-decline:hover{
        color:red;
        border-color:red;
    }



</style>
<form action="checkbox.php" method="POST">
    <div id="checkdivs">
        <?php
    $getAll = mysqli_query($conn,"select name,category,photographe.firstname,photographe.lastname,owner,image.id from image,photographe where
        photographe.id = owner and verified = 0 limit 5");

    if (mysqli_num_rows($getAll) > 0){
        while($row = mysqli_fetch_array($getAll)){    
                echo '
                    <div class=checkdiv id="'.$row['id'].'">
                    <input type="checkbox" name="'.$row['id'].'" value="'.$row['id'].'" id="'.$row['id'].'"  />
                    <label class="img-div" style="background-image:url(../../'.$row['name'].')" for="'.$row['id'].'"></label>
                    <div class=img-detail>
                    <a class=expand href=../../'.$row['name'].' target=_blank>
                    <img src="../../img/icons/expand.svg">
                    </a>
                        <span class=category>#fashion</span>
                        <span class=photographe>'.$row['firstname'].' '.$row['lastname'].'</span>
                        <h5 class=date><span style="font-family:Nexa-Bold">submitted:</span> 20-12-2019</h5>
                        
                        <div class="action-btns">
                        <input type="checkbox" name="'.$row['id'].'" value="'.$row['id'].'" id="add-'.$row['id'].'"  />
                        <input type="checkbox" name="'.$row['id'].'" value="'.$row['id'].'" id="decline-'.$row['id'].'"  />
                        <label class="btn btn-add  " style="" for="add-'.$row['id'].'">+ add</label>
                        <label class="btn btn-decline" style="" for="decline-'.$row['id'].'">x decline</label>
                        </div>
    
                    </div>
                    </div>
                ';
        }
     }
    ?>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script>
    $("input:checkbox").change(function () {
        $("input:checkbox").each(function () {
            if ($(this).is(":checked")) {
                target = (this.id).split('-')[1]
                action = (this.id).split('-')[0]

                $('div#' + target).animate({
                            width: "0px",
                            height: "0px",
                            marginLeft: "-15px",
                            opacity:"0"
                        }, 500, function () {

                            $(this).remove();
                });

                $.ajax({
                    type: 'POST',
                    url: 'checkbox.php',
                    data: {
                        'target': target,
                        'action': action
                    },
                });
            }
        });
    });
</script>

<?php
    echo("<br>");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $target = $_POST['target'];
        $action = $_POST['action'];
        if ($action == 'add') mysqli_query($conn,"update image set verified = 1 where id = ".$target." ");
        if ($action == 'decline') mysqli_query($conn,"delete from image where id = ".$target." ");
        }
?>
