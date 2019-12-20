<?php 
<<<<<<< HEAD
    include 'includes/db_cnx.php' ; 
    $extra_css = '<link href="css/styles/admin.css" rel="stylesheet">';
    include 'includes/header.php'; 
=======
    include './includes/db_cnx.php'; 
    $extra_css = '<link href="css/styles/admin.css" rel="stylesheet">';
    include './includes/header.php'; 
>>>>>>> 0572400c90c420d76a06d9d6648bc545c7b094a7
?>

<form action="checkbox.php" method="POST">
    <div class="checkdivs">
        <?php
            $getAll = mysqli_query($conn,"select name,category,photographe.firstname,photographe.lastname,owner,image.id from image,photographe where
                photographe.id = owner and verified = 0 limit 1");

    if (mysqli_num_rows($getAll) > 0){
        while($row = mysqli_fetch_array($getAll)){    
                echo '
                        <div class="checkdiv" id="'.$row['id'].'">
                            <div class="img-div" style="background-image:url('.$row['name'].')">
                            </div>
                            
                            <div class=img-detail>
                                <a class=expand href='.$row['name'].' target=_blank>
                                    <img src="img/icons/expand.svg">
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
    </div>
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
                    opacity: "0"
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
</body>
<?php
    echo("<br>");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $target = $_POST['target'];
        $action = $_POST['action'];
        if ($action == 'add') mysqli_query($conn,"update image set verified = 1 where id = ".$target." ");
        if ($action == 'decline') mysqli_query($conn,"delete from image where id = ".$target." ");
        }
?>