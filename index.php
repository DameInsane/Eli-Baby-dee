<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'dumbani@qualitymaddness.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!--

<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form'; 
		$to = 'elly@qualitymaddness.com'; 
		$subject = 'Message from Contact Form ';
		
		$body ="From: $name\n E-Mail: $email\n Phone Number: $phone\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if phone has been entered
		if (!$_POST['phone']) {
			$errPhone = 'Please enter your phone number';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 4) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !errPhone && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <title>Eli&Dee baby shower</title>
<!--
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 800px;
      height: 600px;
      margin: auto;
  }
  </style>
-->
</head>
<body >

<header>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#featured">Baby Blue <span class="subhead">Eli & Dee</span></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#featured">Home</a></li>
          <li><a href="#coming">Coming Soon</a></li>
          <li><a href="#story">Our Story</a></li>
          <li><a href="#catalogue">Baby Presents</a></li>
          <li><a href="#pictures">Pictures</a></li>
          <li><a href="#contact"> Contact us</a></li>
        </ul>
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>
</header>

<div class="container">
	<blockquote >
		<div class="row" id="coming">
			<section class="page col-sm-12">
      <h2>Baby Blue</h2>      

      <p>Wisdom Pet Medicine strives to blend the best in traditional and alternative medicine in the diagnosis and treatment of companion animals including dogs, cats, birds, reptiles, rodents, and fish. We apply the wisdom garne#EECBAD in the centuries old tradition of veterinary medicine, to find the safest treatments and&nbsp;cures.</p>

      <p>We strive to be your pet's medical experts from youth through the senior years. We build preventative health care plans for each and every one of our patients, based on breed, age, and sex, so that your pet receives the most appropriate care at crucial milestones. We want to give your pet a long and healthy&nbsp;life.</p>
    		</section>
  		</div>
	</blockquote>
  <div class="row" id="story">
    <section class="page col-sm-12">
      <h2>Our Story</h2>
      <div class="row">
        <section class="col-sm-6">
          <h3>Who We Are </h3>
          <p>We may not be a perfect couple. those of you who know us, we are a fiery couple.</p>
        </section>        
        <section class="col-sm-6">
          <h3>The Last Four Years</h3>
          <p>Our therapeutic grooming treatments help battle fleas, allergic dermatitis, and other challenging skin conditions.</p>
        </section>        
      </div>
      <div class="row">
        <section class="col-sm-6">
          <h3>Baby blues</h3>
          <p>Wellness and senior exams, ultrasound, x-ray, and dental cleanings are just a few of our general health story.</p>
        </section>        
        <section class="col-sm-6">
          <h3>Baby Names</h3>
          <p>Let our nutrition experts review your pet's diet and prescribe a custom nutrition plan for optimum health and disease prevention.</p>
        </section>        
      </div>
      <div class="row">
        <section class="col-sm-6">
          <h3>Pest Control</h3>
          <p>We offer the latest advances in safe and effective prevention and treatment of fleas, ticks, worms, heart worm, and other parasites.</p>
        </section>        
        <section class="col-sm-6" >
          <h3>Vaccinations</h3>
          <p>Our veterinarians are experienced in modern vaccination protocols that prevent many of the deadliest diseases in pets.</p>
        </section>        
      </div>
    </section>
  </div>
<script>
	
	
function myFunction(id) {
	var hot= document.getElementById(id);
	alert(hot.id);
}
</script>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-heart-empty"></span> Baby's Present</h3>
        </div>
        <p style="background-color:azure" >This pledge area is to inform us of your decision that you intend to buy our little bundle of  joy the present you clicked under. In order to purchase click on the product picture and follow the link alternatively you can purchase the present at your preferred stores</p>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
              <input type="text" class="form-control" id="name" placeholder="Please enter your name">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-share"></span> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Please enter your email address">
            </div>|
            
			<div class="form-group">
              <label for="msg"><span class="glyphicon glyphicon-envelope"></span> Message</label>
              <input type="text" class="form-control" id="msg" placeholder="Enter your message to us.">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button></br>
			  <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 
  
    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-heart-empty"></span> Cancelation</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
		<p>Please enter your email address that you used to confirm your cancelation</p>
          <form role="form">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-share"></span> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Please enter your email address">
            </div>
			<div class="form-group">
              <label for="msg"><span class="glyphicon glyphicon-envelope"></span> Message</label>
              <input type="text" class="form-control" id="msg" placeholder="Enter your message to us.">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button></br>
			  <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 

  <div class="row">
    <section id="catalogue" class="page col-sm-12">
      <h2>Baby Shower Catalogue</h2>
	  <div class="row">
		<section class="col-sm-12">
			<p class="well" style="background-color:#D0FAEE">Click on the PLEDGE button beneath the product to let us know you are considering purchasing that particular item below for our little boy!</p>
			<p class="well" style="background-color:#EECBAD">Click on the Cancel button if you have had a change of heart and you wish cancel your pledge to buy:) </p>
		</section>
	  </div>
      <h3>The big stuff </h3>
      <div class="row">
        <section class="col-sm-4">
          <h4>Da King's ride</h4>
         <p><a href="http://www.bergsteiger-kinderwagen.de/en/produkt/pram-set-bergsteiger-capri-beige-circles/"><img class="img-responsive" src="images/stroller.jpg"  alt="Stroller (Baby buggy)" >No girlie colors</a></p>
		 <button  id="11" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="101"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
		</section>
  		
        <section class="col-sm-4">
          <h4>Da King's Bed</h4>
      <p><a href="http://www.mothercare.com/Tutti-Bambini-Three-Bears-Fixed-Side-Cot-Bed---grey/323991,default,pd.html"><img class="img-responsive" src="images/crib.jpg" alt="Baby bed">"We love the bears" Elly</a></p>
        <button  id="12" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="102"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
		</section>
		
        <section class="col-sm-4">
          <h4>Mummy da baby slave's throne</h4>
      <p><a href="http://www.mothercare.com/Mothercare-Reclining-Glider-Chair---grey-With-Grey-Cushion/788929,default,pd.html"><img class="img-responsive" src="images/chair.jpg" alt="Rocking Chair">dat chair</a></p>
         <button  id="13" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="103"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
		</section>
      </div>
      
      <div class="row">
    <section class="col-sm-12">
      <h3>Toys and Necessities</h3>      
    </section>
  </div>

  <div class="row">
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Rainforest Friends Rocker</h5>
      <p><a href="http://www.fisher-price.com/en_GB/products/Rainforest-Friends-Infant-to-Toddler-Rocker"><img class="img-responsive" src="images/rocker.jpg" alt="Baby Rocker">Baby rocker</a></p>
		 <button  id="14" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="104"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>

    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Rinse-n-Grow-Tub</h5>
      <p><a href="http://www.fisher-price.com/en_GB/brands/babygear/products/Rinse-n-Grow-Tub"><img class="img-responsive" src="images/grooming.jpg" alt="Baby bath">"Super cute baby bath" Elly</a></p>
		 <button  id="15" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="105"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>    
	</div>

    <div class="col-xs-6 col-sm-4 col-lg-3">
     
      <h5>Kick and Play Piano Gym </h5>
      <p><a href="https://www.amazon.co.uk/Fisher-Price-Kick-Play-Piano-Gym/dp/B00F2MQDU2?ie=UTF8&m=A3P5ROKL5A1OLE&tag=ps-uk-mattel-04-21%0D%0A"> <img class="img-responsive" src="images/piano.jpg" alt="baby gym">Baby's first big toy!</a></p>
		<button  id="16" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="106"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>

    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Baby Penguin Gift Set </h5>
      <p><a href="http://www.originalpenguin.co.uk/kids-baby/baby-distressed-logo-gift-set--0-6-months-PGN0109GP.html?cgid=opukkidsbaby&dwvar_PGN0109GP_color=118&srule=NewArrivals&start=10"><img class="img-responsive" src="images/pingu.jpg" alt="Pingu set">Baby's first penguin outfit</a></p>
    	<button  id="17" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="107"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>

    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5> Wrist and Rattle Set</h5>
      <p><a href="http://www.mothercare.com/East-Coast-Say-Hello-Wrist-and-Rattle-Set/144059,default,pd.html"><img class="img-responsive" src="images/rattles.jpg" alt="Baby Rattles">The baby rattles</a></p>
    	<button  id="18" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="108"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>

    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Bed Set Turquoise</h5>
      <p><a href="http://www.babyshop.com/bed-set-turquoise/p/47521?nosto=cross-selling"><img class="img-responsive" src="images/pinguBedding.jpg" alt="Bedding with pingu">Pingu bedding</a></p>
    	<button  id="19" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="109"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Blanket Pingu</h5>
      <p><a href="http://www.babyshop.com/blanket-pingu/p/47461"><img class="img-responsive" src="images/pinguBlanket.jpg" alt="Blanket with pingu">Soft pingu!</a></p>
    	 <button  id="20" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="120"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
     
      <h5>Plastic Bib</h5>
      <p><a href="http://www.babyshop.com/plastic-bib/p/47445?nosto=cross-selling"> <img class="img-responsive" src="images/pinguBib.jpg" alt=""pingu Bib>Pingu Bib</a></p>
    	<button  id="21" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="121"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
     
      <h5>Pocket Spring Mattress</h5>
      <p><a href="http://www.mothercare.com/Kit-for-Kids-Ventiflow-70x140cm-Pocket-Spring-Cotbed-Mattress---grey/342849,default,pd.html"> <img class="img-responsive" src="images/mattress.jpg" alt="Mattress">Baby's mattress</a></p>
		<button  id="22" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="122"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
     
      <h5>Bodysuit Set</h5>
      <p><a href="http://www.mothercare.com/My-First-Bear-Dungarees-and-Bodysuit-Set/LH5949,default,pd.html"> <img class="img-responsive" src="images/bodysuit.jpg" alt="Bodysuit">Baby's first dungarees</a></p>
    	 <button  id="22" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="122"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Elephant Bodysuits </h5>
      <p><a href="http://www.mothercare.com/Mummy-and-Daddy-Elephant-Bodysuits---5-Pack/LH6545,default,pd.html"><img class="img-responsive" src="images/ebodysuit.jpg" alt="Elephant Bodysuit">Elephant Bodysuit set</a></p>
    	 <button  id="23" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="123"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Little Bear Sleepsuits</h5>
      <p><a href="http://www.mothercare.com/Little-Bear-Sleepsuits---3-Pack/LH6504,default,pd.html"><img class="img-responsive" src="images/sleepsuit.jpg" alt="Sleepsuit">Baby's first sleepsuit</a></p>
    	 <button  id="24" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="124"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Electric Steam Steriliser</h5>
      <p><a href="http://www.mothercare.com/Philips-AVENT-2-in-1-Electric-Steam-Steriliser/629677,default,pd.html"><img class="img-responsive" src="images/sterilizer.jpg" alt="Steriliser">For baby's safety</a></p>
    	<button  id="25" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="125"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>125ml Feeding Bottle- 3 pack</h5>
      <p><a href="http://www.mothercare.com/Philips-Avent-Classic-125ml-Bottle--3-pack/705032,default,pd.html"><img class="img-responsive" src="images/bottle.jpg" alt="Bottles">Baby's first bottles</a></p>
    	<button  id="26" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="126"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Donald Duck 3 Piece Set</h5>
      <p><a href="http://www.mothercare.com/Disney-Donald-Duck-3-Piece-Set/LH6529,default,pd.html"><img class="img-responsive" src="images/donald.jpg" alt="Sleepsuit">Baby's first Disney set</a></p>
    	<button  id="27" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="127"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
     <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Textu#EECBAD Teething Linkies</h5>
      <p><a href="http://www.mothercare.com/Textu#EECBAD-Linkies/732264,default,pd.html"><img class="img-responsive" src="images/teether.jpg" alt="Teether">Baby's teether</a></p>
    	<button  id="28" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="128"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>3 in 1 Projector Mobile</h5>
      <p><a href="http://www.mothercare.com/3-in-1-Projector-Mobile/142602,default,pd.html"><img class="img-responsive" src="images/projector.jpg" alt="Cot Projector">Baby's cot projector</a></p>
    		 <button  id="29" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="129"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>London Sleeping Bag</h5>
      <p><a href="http://www.thegreycompany.com/the-little-grey-company/baby/baby-boys/london-sleeping-bag-2-5-tog--grey/"><img class="img-responsive" src="images/sleepingbag.jpg" alt="sleepingbag">Baby's sleeping bag</a></p>
		 <button  id="30" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="130"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>    	
		</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Winnie the Pooh Hat and Mittens Set</h5>
      <p><a href="http://www.toysrus.co.uk/babiesrus/winnie-the-pooh-hat-and-mittens-set/TRUP2151120001"><img class="img-responsive" src="images/winnie.jpg" alt="Winnie the Pooh hat and mittens">We love Winnie</a></p>
		 <button  id="31" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="131"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	 </div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Dumbo Blue Baby Comforter</h5>
      <p><a href="http://www.disneystore.co.uk/dumbo-blue-baby-comforter/mp/91139/1500072/"><img class="img-responsive" src="images/dumbo.jpg" alt="Dumbo baby blanky">Baby's cute blanky</a></p>
		 <button  id="32" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="132"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Motorola MBP25 Video Baby Monitor</h5>
      <p><a href="http://www.mothercare.com/Motorola-MBP25-Video-Baby-Monitor/834548,default,pd.html"><img class="img-responsive" src="images/monitor.jpg" alt="Baby monitor">Baby monitor</a></p>
       <button  id="33" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="133"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
    
    <div class="col-xs-6 col-sm-4 col-lg-3">
      
      <h5>Universal Cot Top Changer</h5>
      <p><a href="http://www.mothercare.com/Mothercare-Universal-Cot-Top-Changer/748513,default,pd.html"><img class="img-responsive" src="images/changer.jpg" alt="Baby changer">Baby's changer</a></p>
    	<button  id="34" type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Pledge</b></span>
		 </button>
		 <button type="button" id="134"  class="btn btn-default" aria-label="Left Align" style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"></span> <span style="color:grey"><b>Cancel</b></span>
		 </button>
	</div>
  		</div>
    </section>
  </div>

  <div class="row">
    <section id="pictures" class="page col-sm-12">
      <h2>Baby scans</h2>
      <div class="row">
        <section class="col-sm-6">
	        <div id="cr2" class="carousel slide" data-ride="carousel">
		        <ol class="carousel-indicators">
			        <li data-target="#cr2" data-slide-to="0" class="active"></li>
			        <li data-target="#cr2" data-slide-to="1"></li>
			        <li data-target="#cr2" data-slide-to="2"></li>
			        <li data-target="#cr2" data-slide-to="3"></li>
			        <li data-target="#cr2" data-slide-to="4"></li>
			        <li data-target="#cr2" data-slide-to="5"></li>
			        <li data-target="#cr2" data-slide-to="6"></li>
			        <li data-target="#cr2" data-slide-to="7"></li>
		        </ol>
		        <div class="carousel-inner">
			        <div class="item active">
				        <img src="images/scan2.jpg" >
			        </div>
			        <div class="item">
				        <img src="images/scan4.jpg">
			        </div>
			        <div class="item">
				        <img src="images/scan5.jpg">
			        </div>
			        <div class="item">
				        <img src="images/scan6.jpg">
			        </div>
			        <div class="item">
				        <img src="images/scan7.jpg">
			        </div>
			        <div class="item">
				        <img src="images/scan1.jpg" >
			        </div>
			        <div class="item">
				        <img src="images/scan3.jpg" >
			        </div>
			        <div class="item">
				        <img src="images/scan8.jpg" >
			        </div>
		        </div>
				<a href="#cr2" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#cr2" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
	        </div>
        </section>
        
	    <section class="col-sm-6">
          <blockquote>
	            <p>When Samantha, our Siamese cat, began sleeping all the time and urinating excessively, we brought her to see the specialists at Wisdom. After running a blood test, Dr. Winthrop confirmed what we all fea#EECBAD - Samantha was showing signs of diabetes. The doctor put us on a daily routine to provide Samantha insulin injections, and showed us how to administer the shots.</p>
            <footer>The McPhersons</footer>
        	</blockquote>
        </section>
      </div>
        <h2>Pictures</h2>
      <div class="row">
	      <section class="col-sm-6">
          <blockquote>
            <p>Wisdom Pet Medicine is the only clinic around that will even book pet fish for appointments. When our 13-year old Comet goldfish, McAllister, turned from silvery grey to an angry #EECBAD, we called around, urgently trying to find a veterinarian who could help. Wisdom not only got us in the same day, but also was able to diagnose McAllister as having a severe case of septicemia.</p>
            <footer>Lorraine S</footer>
          </blockquote>
        </section>
        
        <section class="col-sm-6">
                
	        <div id="cr1" class="carousel slide" data-ride="carousel">
		        <ol class="carousel-indicators">
			        <li data-target="#cr1" data-slide-to="0" class="active"></li>
			        <li data-target="#cr1" data-slide-to="1"></li>
			        <li data-target="#cr1" data-slide-to="2"></li>
			        <li data-target="#cr1" data-slide-to="3"></li>
			        <li data-target="#cr1" data-slide-to="4"></li>
			        <li data-target="#cr1" data-slide-to="5"></li>
			        <li data-target="#cr1" data-slide-to="6"></li>
<!--
			        <li data-target="#cr1" data-slide-to="7"></li>
			        <li data-target="#cr1" data-slide-to="8"></li>
			        <li data-target="#cr1" data-slide-to="9"></li>
			        <li data-target="#cr1" data-slide-to="10"></li>
			        <li data-target="#cr1" data-slide-to="11"></li>
			        <li data-target="#cr1" data-slide-to="12"></li>
			        <li data-target="#cr1" data-slide-to="13"></li>
			        <li data-target="#cr1" data-slide-to="14"></li>
			        <li data-target="#cr1" data-slide-to="15"></li>
			        <li data-target="#cr1" data-slide-to="16"></li>
			        <li data-target="#cr1" data-slide-to="17"></li>
			        <li data-target="#cr1" data-slide-to="18"></li>
			        <li data-target="#cr1" data-slide-to="19"></li>
-->
			        

		        </ol>
		        <div class="carousel-inner">
			        <div class="item active">
				        <img src="images/de1.jpg">
			        </div>
			        <div class="item">
				        <img src="images/de2.jpg">
			        </div>
			        <div class="item">
				        <img src="images/de3.jpg">
			        </div>
			        <div class="item">
				        <img src="images/de4.jpg">
			        </div>
			        <div class="item">
				        <img src="images/de5.jpg">
			        </div>
			        <div class="item">
				        <img src="images/dm1.jpg">
			        </div>
			        <div class="item">
				        <img src="images/dm2.jpg">
			        </div>
			        <div class="item">
				        <img src="images/dm3.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma1.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma2.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma3.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma4.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma5.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma7.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma8.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma9.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma10.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma11.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma12.jpg">
			        </div>
			        <div class="item">
				        <img src="images/ma13.jpg">
			        </div>
		        </div>
				<a href="#cr1" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#cr1" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
	        </div>
        </section>
      </div>
<!--
          <blockquote>
          <p>During the summer, our rabbit, Tonto, began to have severe #EECBADness and itching on his belly and feet. Through diagnostic testing, we learned that Tonto is severely allergic to over a dozens kinds of grass pollens. We've now been doing allergy injections for several months, and his itching and #EECBADness have nearly gone away.</p>
          <footer>Jane H.</footer>
          </blockquote
-->
<!--
        </section>
      <div class="row">
        <section class="col-sm-6">
-->
<!--
          <blockquote>
            <p>The catalogue at Wisdom worked tirelessly to determine why our three-year old Golden Retriever, Roxie, started going into sudden kidney failure. They stabilized her and provided fluids until her kidneys were again functioning normally. We learned just how toxic grapes and raisins are to pets, and Roxie is no longer allowed to roam unattended in the orchard.</p>
            <footer>John B</footer>
          </blockquote>
        </section>
        
-->
      </div>
    </section>
  </div>


    </section>
  </div><!-- row -->   
  <div class="row" id="contact" class="page col-sm-12">
      <h2>Contact details</h2>
     
      <div class="row">
        <section class="col-sm-6">
          <h3 align="center">Contact us</h3>
<!--           <blockquote > -->
<!--
    <div class="row">
  			<div class="col-md-6">
-->
<!--   				<h1 class="page-header text-center">Contact Form Example</h1> -->
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
<!--
			</div>
		</div>
-->
	      
	      <!--
Wisdom Pet Medicine strives to blend the best in traditional and alternative medicine in the diagnosis and treatment of companion animals including dogs, cats, birds, reptiles, rodents, and fish. We apply the wisdom garne#EECBAD in the centuries old tradition of veterinary medicine, to find the safest treatments and&nbsp;cures.</p>

      <p>We strive to be your pet's medical experts from youth through the senior years. We build preventative health care plans for each and every one of our patients, based on breed, age, and sex, so that your pet receives the most appropriate care at crucial milestones. We want to give your pet a long and healthy&nbsp;life.
--></p>
<!-- 			</blockquote> -->
        </section>
        
        <section class="col-sm-6">
          <h3 align="center">Dee</h3>
<!--            <blockquote > -->
   <div id="map-canvas"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.381285275428!2d-1.0582847342563972!3d50.78704202952318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48745c4e420b8639%3A0x73fb11286b14a91a!2sEastney+Rd%2C+Portsmouth%2C+Southsea%2C+Portsmouth+PO4+9HY!5e0!3m2!1sen!2suk!4v1462580922750" width=100% height="135" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	      <!-- Wisdom Pet Medicine strives to blend the best in traditional and alternative medicine in the diagnosis and treatment of companion animals including dogs, cats, birds, reptiles, rodents, and fish. We apply the wisdom garne#EECBAD in the centuries old tradition of veterinary medicine, to find the safest treatments and&nbsp;cures. -->

      <p>We strive to be your pet's medical experts from youth through the senior years. We build preventative health care plans for each and every one of our patients, based on breed, age, and sex, so that your pet receives the most appropriate care at crucial milestones. We want to give your pet a long and healthy&nbsp;life.</p>
<!-- 			</blockquote> -->
        </section>
         <footer align="center">Dee&EllyProduction@01/05/16 </footer>
      </div>
  </div>
  
<!--
  <section class="contact" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Contact Us<i class="fa fa-paper-plane-o"></i></h2>
      </div>
    </div>
    <div id="map-canvas"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.381285275428!2d-1.0582847342563972!3d50.78704202952318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48745c4e420b8639%3A0x73fb11286b14a91a!2sEastney+Rd%2C+Portsmouth%2C+Southsea%2C+Portsmouth+PO4+9HY!5e0!3m2!1sen!2suk!4v1462580922750" width=100% height="135" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="row">
      <form method="post" action="index.php" name="contactform" id="contactform">
        <div class="col-md-6">
          <fieldset>
            <input name="name" type="text" id="name" size="30" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>"><?php echo "<p class='text-danger'>$errName</p>";?>
            <br>
            <input name="email" type="text" id="email" size="30" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>"><?php echo "<p class='text-danger'>$errEmail</p>";?>
            <br>
            <input name="phone" type="text" id="phone" size="30" placeholder="Phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>"><?php echo "<p class='text-danger'>$errPhone</p>";?>
            <br>
            <input name="human" type="text" id="human" size="30" placeholder="Prove your not a robot... What is 2+2?"><?php echo "<p class='text-danger'>$errHuman</p>";?>
            <br>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset>
            <textarea name="message" cols="40" rows="20" id="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
          </fieldset>
        </div>
        <div class="col-md-12">
          <fieldset>
            <button type="submit" class="btn btn-lg" id="submit" value="Submit">Send Message</button>
          </fieldset>
        </div>
      </form>
    </div>
  </div>
</section>
-->
<!--
<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Form Example</h1>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
-->

  
      
          

 
  </div>

</div><!-- content container -->

<!-- for resizing: http://resizeimage.net/ -->
<!--Google Maps API-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>