<head>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="jquery-1.12.0.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" media="all" href="style.css" />
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
      <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
      $(window).load(function() {
      $('.flexslider').flexslider({
          animation: "slide"
        });
      });
    </script>
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!----script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
    <!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script-->
</head>
<body>
  <div id="header">
    <div class="header_content">
      <div class="logo"><a href="home.php">Easy Shopper</a> <span>.</span></div>
        <div class="menu">
          <ul>
            <li class="selected"><a href="home.php">Home</a></li>
            <li><a href="#Contactus">Contact Us</a></li>
            <?php
            session_start();
            if(!isset($_SESSION['username']))
              {
               echo "<li><a href='ToLogin.php'>Login</a></li><li><a href='ToRegister.php'>Register</a></li>";
              }
            else
              {
                echo "<strong>Welcome </strong>";
                echo "<a href='Account.php'>";
                echo "<strong>".$_SESSION['username']."</strong>";
    //echo "&nbsp|&nbsp</a><a href='Wishlist.html'>Wishlist</a>&nbsp|&nbsp";
    //echo "&nbsp <a href='Logout.php' style='text-decoration:none'><i class='glyphicon glyphicon-off'></i> Log out</a>";
              }
            session_write_close ();
            ?>   
          </ul>
        </div>
      </div>
    </div>
  </div><!-- End of Header-->
<hr>

  

