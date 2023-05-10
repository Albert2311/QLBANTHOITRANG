<?php 
include_once("controller.php"); 
?>
<?php 
include_once("controller.php"); 
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TIN TỨC</title>
    <link rel="shortcut icon" href="images/ava.png">
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>
<style>
    body{
        font-family: -webkit-body;
    }
    #fh5co-title-box {
    z-index: 0;
}
#fh5co-title-box .overlay {
    top: 91px;
}
#fh5co-title-box .page-title img {
    height: 76px;
}
#fh5co-title-box .overlay {
    top: 72px;
}
ol, ul, dl {
    margin-top: 17px;
    margin-bottom: 1rem;
}
</style>
<body class="single">



<?php include_once('connection.php');

$result = mysqli_query($conn, "SELECT * FROM news WHERE id = " .$_GET['id']);
$news = mysqli_fetch_assoc($result);
?>

<?php include 'header.php'?>
<div class="single">
<div id="fh5co-title-box" style="background-image: url(images/<?php echo $news['img']?>); background-position: 50% 70.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <img src="images/<?php echo $news['img']?>" alt="Free HTML5 by FreeHTMl5.co">
        <span><?php echo $news['ngaytao']?></span>
        <h2><?php echo $news['title']?></h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                <?php echo $news['status']?><br>
                </p>
                
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div class="clearfix"></div>           
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>

                <?php 
  include_once("connection.php");
  $result = mysqli_query($conn, "SELECT * FROM news ORDER BY ngaytao LIMIT 4" );
  while($row = mysqli_fetch_array($result)){

?>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <a href="báo.php?id=<?php echo $row['id']?>">
                        <img src="images/<?php echo $row['img']?>" alt="img" class="fh5co_most_trading"/></a>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <?php echo $row['title']?></div>
                        <div class="most_fh5co_treding_font_123"> <?php echo $row['ngaytao']?></div>
                    </div>
                </div>
                <?php }?>
              
            </div>
        </div>
    </div>
</div>



</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
<?php include 'footer.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>