<head>
<!DOCTYPE html>
<html lang="en">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply snippet - Bootply Bootstrap Preview</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">










        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            /* BOOTSTRAP 3.x GLOBAL STYLES
-------------------------------------------------- */
body {
  padding-bottom: 40px;
  color: #5a5a5a;
}

form {
  text-align: center;
}

/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}

/* CUSTOMIZE THE JUMBOTRON
-------------------------------------------------- */
.jumbotron {
  background-image:url("http://i0.bookcdn.com/data/Photos/OriginalPhoto/1555/155556/155556044/Castello-Beach-Hotel-photos-Exterior.JPEG");
  height: 400px;
background-size: 100% 100%;
    background-repeat: no-repeat;
}

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 1;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 400px;
  background-color:#555;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 400px;
}



/* MARKETING CONTENT
-------------------------------------------------- */

/* Pad the edges of the mobile views a bit */
.marketing {
  padding-left: 15px;
  padding-right: 15px;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  text-align: center;
  margin-bottom: 20px;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-left: 10px;
  margin-right: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 45px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
  padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
  overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
  margin-right: 40px;
}
.featurette-image.pull-right {
  margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
  font-size: 100px;
  font-weight: 600;
  line-height: 1;
  letter-spacing: -1px;
            color: Black;
            text-shadow: 3px 3px white;
}



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {

  /* Remve the edge padding needed for mobile */
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }

  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

}

        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        <div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#">Biltmore Hotels</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://www.bootply.com" target="ext">Employee</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->


<!-- Carousel
================================================== -->

<!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->



  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2 class="featurette-heading">Beach Palm Hotel</h2>
      </div>
    </div>

  <hr class="featurette-divider">

<!-- Double -->
<div class="row">
    <div class="col-md-4 text-center">
      <img class="img-circle" src="http://thecentralhotelharrisburg.com/wp-content/uploads/2014/04/deluxe-double-queen-guest-room-central-hotel-harrisburg-pa-8278_HDR-150x150.jpg">
      <h2>Double</h2>
      <p>Our most economical room.</p>
   
      
            <div class="mod">
  <!-- Trigger the modal with a button -->
  <p><a<button type="button" class="btn btn btn-default" data-toggle="modal" data-target="#mary">Reserve 

  <!-- Modal -->
  <div class="modal fade" id="mary" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <div class="modal-body">
          <form action="MakeReservation.php" method="post">
            <p>Start date: <input type="text" name="startdate" placeholder="01/01/2016"></p>
            <p> End date: <input type="text" name="enddate" placeholder="01/03/2016"> </p>
      
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.open('http://plato.cs.virginia.edu/~jmb3qr/costumlogin', 'newwindow', 'width=400, height=500'); return false;" >Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>  
              </a></p>
      
      
      
<!-- KING -->      
    </div>
    <div class="col-md-4 text-center">
      <img class="img-circle" src="http://www.brycecanyongrand.com/wp-content/uploads/2014/12/hotel-room-in-bryce-canyon-150x150.jpg">
      <h2>King</h2>
      <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
 
            <div class="mod">
  <!-- Trigger the modal with a button -->
  <p><a<button type="button" class="btn btn btn-default" data-toggle="modal" data-target="#mary">Reserve 

  <!-- Modal -->
  <div class="modal fade" id="mary" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <div class="modal-body">
          <form action="MakeReservation.php" method="post">
            <p>Start date: <input type="text" name="startdate" placeholder="01/01/2016"></p>
            <p> End date: <input type="text" name="enddate" placeholder="01/03/2016"> </p>

</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.open('http://plato.cs.virginia.edu/~jmb3qr/costumlogin', 'newwindow', 'width=400, height=5)0'); return false;">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>  
              </a></p>  
    </div>
  
  
<!-- SUIT -->
    <div class="col-md-4 text-center">
      <img class="img-circle" src="http://www.edenresort.com/wp-content/uploads/2014/04/Eden-Resort-Lancaster-PA-Hotel-Two-Room-King-Suite-P0000056-150x150.jpg">
      <h2>Suite</h2>
      <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
      
      
            <div class="mod">
  <!-- Trigger the modal with a button -->
  <p><a<button type="button" class="btn btn btn-default" data-toggle="modal" data-target="#mary">Reserve 

  <!-- Modal -->
  <div class="modal fade" id="mary" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <div class="modal-body">
          <form action="MakeReservation.php" method="post">
            <p>Start date: <input type="text" name="startdate" placeholder="01/01/2016"></p>
            <p> End date: <input type="text" name="enddate" placeholder="01/03/2016"> </p>
      
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.open('http://plato.cs.virginia.edu/~jmb3qr/costumlogin', 'newwindow', 'width=400, height=500'); return false;">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>  
              </a></p>
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->
<h1>Contact Us</h1>
   
    
    
  <p><center>Beach Palms	</p>
   <p>Haversham Close	</p>
    <p>Charleston SC, 25678 </p>
    <p><u> 630-285-9023</u></p>
  </center>

    
    
    
    
    

  <!-- FOOTER -->

</div><!-- /.container -->
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>


        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        
        
    </body>
</html>