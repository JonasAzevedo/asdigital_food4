<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $title = "Food"; ?>
<title> <?php echo($title); ?></title>

<!-- CSS -->
	<link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/responsive.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- CSS -->

<!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<!--FONTS-->

<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
<!-- JS -->
</head>

<body>

<!-- HEADER STARTS HERE -->
<div class="container-fluid main-head">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"></a>
        </div>
        <div class="collapse navbar-collapse myMenu" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>"><a href="index.php">HOME</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'about.php'){echo 'active'; }else { echo ''; } ?>"><a href="about.php">ABOUT US</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'product.php'){echo 'active'; }else { echo ''; } ?>"><a href="product.php">PRODUCTS</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'order-now.php'){echo 'active'; }else { echo ''; } ?>"><a href="order-now.php">ORDERS</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>"><a href="contact.php">CONTACT US</a></li>
            <!-- <li><a href="contact.html"><button class="btn btn-top">GET TYME</button></a></li> -->
            <li class="btn-top">
                <a href="order-now.php"><span>GET TYME</span></a>
            </li>
          </ul>    
        </div><!-- /.navbar-collapse --> 
    </nav>
</div>
<!-- HEADER ENDS HERE -->