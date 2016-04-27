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
        <title>Employee</title>
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

/* Tables CSS
-------------------------------------------------- */
<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
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

p {
    text-indent: 15em;
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

<p><a href="javascript:window.location.href=window.location.href">Clear Search</a></p>

     <div class="row">
    <div class="col-md-4 text-center">
  <div class="container">
<div>
    
  <head>
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script> 
	<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
 	<title>AJAX Persons Example</title>
	<script>
	$(document).ready(function() {
		$( "#option" ).change(function() {
		
			$.ajax({
				url: 'employeeaction.php', 
				data: {whichtable: $( "#option" ).val()},
				success: function(data){
					$('#tableresult').html(data);	
				
				}
			});
		});
		
	});
	</script>
      <script>
	$(document).ready(function() {
		$( "#Ninput" ).change(function() {
		
			$.ajax({
				url: 'employeesearch.php', 
				data: {GuestName: $( "#Ninput" ).val()},
				success: function(data){
					$('#searchresult').html(data);	
				
				}
			});
		});
		
	});
	</script>
      <script>
	$(document).ready(function() {
		$( "#rooms" ).change(function() {
		
			$.ajax({
				url: 'employeerooms.php', 
				data: {Hotel: $( "#rooms" ).val()},
				success: function(data){
					$('#roomresult').html(data);	
				
				}
			});
		});
		
	});
	</script>
      <script>
	$(document).ready(function() {
		$( "#Naminput" ).change(function() {
		
			$.ajax({
				url: 'employeesearchname.php', 
				data: {Guest: $( "#Naminput" ).val()},
				success: function(data){
					$('#guestresult').html(data);	
				
				}
			});
		});
		
	});
	</script>
      <script>
	$(document).ready(function() {
		$( "#billinput" ).change(function() {
		
			$.ajax({
				url: 'billsearch.php', 
				data: {Guest: $( "#billinput" ).val()},
				success: function(data){
					$('#billresult').html(data);	
				
				}
			});
		});
		
	});
	</script>
</head>
<center><label>Search for Guests, Bills, and Reservations</label></center>	
    <br>
           
	<center><input class="xlarge" id="Ninput" type="search" size="30" placeholder="Search Name, Email or Date"/></center>
    <center><input class="xlarge" id="Naminput" type="search" size="30" placeholder="Search Name or Email"/></center>
    <center><input class="xlarge" id="billinput" type="search" size="30" placeholder="Search Bill No. or Name"/></center>


    
    
    <br>
</div>
  </div>
    

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
  
<center><div id="searchresult"></div></center>
    <center><div id="guestresult"></div></center>
        <center><div id="billresult"></div></center><br>
        </div>   
       
    <div class="col-md-4 text-center">
      <div class="container">
<div>
  
<form>
<label for="rooms">View Rooms</label>
    <select id="rooms" name="rooms">
      <option value="beach">Beach Palms</option>
      <option value="casino">Casino Royale</option>
      <option value="palms">Three Palms</option>
        <option value="court">CourtYard</option>
        <option value="sleep">Sleep Inn</option>
        <option value="house">Hartford House</option>
    </select>  
</form>
</div>
  </div>
    <center><div id="roomresult"></div></center><br>
        
        </div>
        
        
        
    <div class="col-md-4 text-center">
<div class="container">
<div>
  
  <form action="action_page.php">
    
<label for="country">Choose Information to Export</label>
    <select onChange="window.location.href=this.value">
      <option value="Download_Guest.php">Guest</option>
      <option value="Download_Bills.php">Bills</option>
      <option value="Download_Employee.php">Employee</option>
    </select> 

  </form>
</div>
  </div>
        </div>
    </div>
        
    <br>
    

 <div class="row">
    <div class="col-md-4 text-center">
  <div class="container">
<div>
  
<!--  <form action="#">-->
<form action="updatereservation.php" method="post" >
    <label for="updateres">Update Reservation</label><br><br>
    <input type="number" id="Rid" name="Rid" placeholder="Enter Reservation ID">
    <input type="number" id="newroom" name="newroom" placeholder="Enter New Room">
    <input type="submit" name="submit">
</form>
</div>
  </div>

        </div>
               

       <div class="col-md-4 text-center">
    <div class="container">
<div>
  
  <form action="updateroom.php" method="post" >
    
<label for="update">Check In/Out Room</label><br><br>
    <input type="number" id="Hid" name="Hid" placeholder="Enter Hotel ID">
    <input type="number" id="room" name="room" placeholder="Enter Room Number">
    <input type="submit" name="submit">

  </form>
</div>
  </div>
        </div>
        
    <div class="col-md-4 text-center">
<div class="container">
<div>
  
  <form action="deletereservation.php" method="post" onsubmit="return confirm('Are you sure you want to delete this Reservation?');">
    
<label for="country">Delete Reservation</label><br><br>
    <input type="number" id="Rid" name="Rid" placeholder="Enter Reservation ID">
    <input type="submit" name="submit">

  </form>
</div>
  </div><br>
        </div>
     <div class="col-md-4 text-center">
    <div class="container">
<div>
  
  <form>
<label for="option">Employees, Guests, Reservations</label>
    <select id="option" name="option">
      <option value="reservation">Reservations</option>
        <option value="bills">Bills</option>
      <option value="guest">Guest</option>
      <option value="employee">Employee Info</option>
    </select>  
</form>
    <br>
</div>
  </div>
        </div>

     <center><div id="tableresult"></div></center><br>
     <div class="col-md-4 text-center">
<div>

         </div>
        </div>
     <div class="col-md-4 text-center">
    <div class="container">
<div>
  
  <form action="makebill.php" method="post" >
    
<label for="bill">Pay Bill</label><br><br>
    <input type="number" id="amt" name="amt" placeholder="Enter Amount" required>
    <input type="number" id="guest" name="guest" placeholder="Enter Guest ID" required>
    <select id="method" name="method" required>
      <option value="Credit Card">Credit Card</option>
        <option value="Cash">Cash</option>
      <option value="Check">Check</option>
    </select>
    <input type="submit" name="submit">
  </form>
</div>
  </div>
        </div>


        
        
      
  
    
  <hr class="featurette-divider">

    </div>
    <br>
        

</div><!-- /.container -->
    