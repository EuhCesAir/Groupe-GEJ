<?php
session_start();
$servername = "localhost";
$username = "btssio";
$password = "btssio";
$dbname = "series_tv";
$pseudo  = $_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="SELECT SUM(rate_number) AS total_rate,count(id) as number_record FROM item_rating";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

function count_rate_data($rate_number)
{
    $servername = "localhost";
    $username = "btssio";
    $password = "btssio";
    $dbname = "series_tv";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql="SELECT count(id) as number_record FROM item_rating where rate_number='".$rate_number."' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if(!empty($data['number_record']))
    {
        return $data['number_record'];
    }
    else{
        return '0';
    }

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Font Awesome Icon Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {  box-sizing: border-box;} body {  font-family: Arial;  margin: 0 auto;   max-width: 800px;  padding: 20px; }
.heading {  font-size: 25px;  margin-right: 25px; } .fa {  font-size: 25px; } .checked {  color: orange; }
.side {  float: left;  width: 15%;  margin-top:10px; } .middle {  margin-top:10px;  float: left;  width: 70%; }
.right {  text-align: right; } .row:after {  content: "";  display: table;  clear: both; }
.bar-container {  width: 100%;  background-color: #f1f1f1;  text-align: center;  color: white; }
.bar-5 {width: <?php echo (count_rate_data('5')*100)/$data['number_record'];  ?>%; height: 18px; background-color: #4CAF50;} .bar-4 {width: <?php echo (count_rate_data('4')*100)/$data['number_record'];  ?>%; height: 18px; background-color: #2196F3;} .bar-3 {width: <?php echo (count_rate_data('3')*100)/$data['number_record'];  ?>%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: <?php echo (count_rate_data('2')*100)/$data['number_record'];  ?>%; height: 18px; background-color: #ff9800;} .bar-1 {width: <?php echo (count_rate_data('1')*100)/$data['number_record'];  ?>%; height: 18px; background-color: #f44336;}
label.error{ color:red; } .well{ margin-top: 25px; } .rating_bar{ margin-top: 20px; } .view_rating{ border-bottom: 1px solid #e3e3e3; padding: 20px; } .view_rating:last-child { border: none; }
@media (max-width: 400px) {  .side, .middle {    width: 100%;  }  .right {    display: none;  }}
</style>
<script>
$(document).ready(function(){
    $('.rating .fa-star').click(function(){
        if($(this).hasClass('checked')) {
            $(this).toggleClass('checked');
            $(this).prevAll('.fa-star').addClass('checked');
            $(this).nextAll('.fa-star').removeClass('checked');
        }
        else
        {
            $(this).toggleClass('checked');
            $(this).prevAll('.fa-star').addClass('checked');
        }
        $("#hdnRateNumber").val($('.checked').length);
    });
    $("#frmRating").validate({
        rules: {
        
            txtComment: {
                required: true
            }
        },
        submitHandler: function (form) {
            //Your code for AJAX starts
            jQuery.ajax({
                url: 'saveData.php',
                type: "post",
                data: $(form).serialize(),
                success: function (data) {
                    if(data=="success")
                    {
                        window.location.reload();
                    }
                },
                error: function () {
                }
            });
        }
    });
});
</script>
</head>
<body>

<div class="row">
    <div class="col-lg-3"><img src="t-shirt.jpg" width="175"></div>
    <div class="col-lg-9">
    <p><b>Black Adam</b></p>
        <p>Résumer</p>
        <p>The rock</p>
    </div>
</div>
<div class="row rating_bar">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-10">
                <p> <span class="btn btn-warning btn-xs"><?php echo number_format($data['total_rate']/$data['number_record'],2);?></span> basé sur <?php echo $data['number_record']; ?> note.</p>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Jugez</button>
            </div>
        </div>
        <hr style="border:3px solid #f1f1f1">
        <div class="row">
            <div class="col-lg-12">
                <div class="side"><div>5 étoile</div></div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-5"></div>
                    </div>
                </div>
                <div class="side right"><div><?php echo count_rate_data('5'); ?></div></div>
                <div class="side"><div>4 étoile</div></div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-4"></div>
                    </div>
                </div>
                <div class="side right"><div><?php echo count_rate_data('4'); ?></div></div>
                <div class="side"><div>3 étoile</div></div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-3"></div>
                    </div>
                </div>
                <div class="side right"> <div><?php echo count_rate_data('3'); ?></div></div>
                <div class="side"><div>2 étoile</div></div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-2"></div>
                    </div>
                </div>
                <div class="side right"><div><?php echo count_rate_data('2'); ?></div></div>
                <div class="side"><div>1 étoile</div></div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-1"></div>
                    </div>
                </div>
                <div class="side right"><div><?php echo count_rate_data('1'); ?></div></div>
            </div>
        </div>
    </div>
</div>

<div class="well">
<?php
$sql="SELECT * FROM item_rating ORDER by id DESC ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
?>

<div class="row view_rating">
    <div class="col-lg-3">
        <h1><?php 
           echo $row['pseudo'];
        ?></h1>
        <p><?php echo date('d M, Y',strtotime($row['created']));?></p>
    </div>
    <div class="col-lg-9">
        <p><span class="btn btn-warning btn-xs"><?php echo $row['rate_number'];?> <span class="fa fa-star" style="font-size: 12px;"></span></span> <?php echo $row['title'];?></p>
        <p><?php echo $row['comment'];?></p>
    </div>
</div>
<?php } ?>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="rating">
                    <span class="heading">Note</span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <form name="frmRating" id="frmRating">
                    <div class="form-group">
              
                        <input type="hidden" name="hdnRateNumber" id="hdnRateNumber">
               
                    </div>
                    <div class="form-group">
                        <label for="pwd">Commentaire:</label>
                        <textarea name="txtComment" id="txtComment" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Envoyer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermé</button>
            </div>
        </div>

    </div>
</div>

</body>
</html>