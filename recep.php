    <?php
session_start();

if(!isset($_SESSION["login"])){
$_SESSION["error"] = "You have not logged in. Please log in first";
    echo('You are not logged in'); 
    header("Location: employeelogin.php");
}
?>
 
    <head>
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
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
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
  font-size: 50px;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {

  /* Remve the edge padding needed for mobile */
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }


  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }
   
 div.container {
    width: 30em;
    border: .5em solid;
     margin: 0 auto;
}           
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-boxborder-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
            
button {
    border-radius: 8px;
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 2px 2px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}          
            
}

            
            

        </style>
    </head>
        </style>
    </head>

<body>


  
  

</style>

<body>
    
    
  


<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://www.renaissanceasheville.com/images/masthead/biltmore-estate.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Biltmore Hotels</h1>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://www.renaissanceasheville.com/images/home-slider/slide01.jpg" class="img-responsive">    
    </div> 
  </div>
</div>
<!-- /.carousel -->

  <div class="container">
<div>
  
  <form action="action_page.php">

<label for="country">What do you want to see?</label>
    <select id="country" name="country">
      <option value="australia">Reservations</option>
      <option value="canada">Guest</option>
      <option value="usa">Employee Shifts</option>
    </select>  
   <center> <button><a class="btn btn-default" href="http://plato.cs.virginia.edu/~jmb3qr/recep">Submit </a></button></center>
    
  </form>
</div>
  </div>
  <br>
  <div class="container">
<div>
  
<h3>Search substring of Last Name</h3>	
           
	<input class="xlarge" id="LastNinput" type="search" size="30" placeholder="Last Name Contains"/>

	<div id="LastNresult">Search Result</div>

	<br/><br/>
	index.html - View the source here to see the HTML<BR>
	dbutil.php - <a href="./dbutil.php.txt">Code</a><BR>
	ex01searchPersons.php - <a href="./ex01searchPersons.php.txt">Code</a><BR>

</div>
  </div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
  

  
  <hr class="featurette-divider">


</div><!-- /.container -->
    