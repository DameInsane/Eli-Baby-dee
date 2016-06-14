<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'dumbani@qualitymaddness.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
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
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errPhone && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp"></script>
	<!--<script type="text/javascript" src="js/ellyScript.js"></script>-->
	<script type="text/javascript" src="js/script.js"></script>
 
  
  <title>Eli&Dee baby shower</title>
  

</head>
<body onload="disableSoldItems()">

<header>
<!-- 	data-spy="affix" -->
  <nav class="navbar navbar-default"  role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#featured">Baby Blue <!-- <span class="subhead"> -->Eli & Dee<!-- </span> --></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#featured">Home</a></li>
          <li><a href="#babyblue">Baby Blue</a></li>
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
		<div class="row" id="babyblue">
			<section class="page col-sm-12">
      <h2>Baby Blue</h2>  
<p id="demo"></p>	  

      <p>Hi, I want to introduce myself to you. I would tell you my name, but I'm not sure what it is yet. My parents are considering different names depending on whether I'm an African King or a Greek God. They haven't officially met me yet either, but Mom and I spend a lot of time together and share pretty much every meal together.</p>
<p>Anyway, I just wanted to let you know that I am excited to meet you, which will be happening some time towards the end of August or early September but definitely by 6th of September 2016.</p>

<!-- Walk timer Walk -->
  <div class="row" id="story">
    <section class="page col-sm-12">
      <h3 align="center">Are we there yet?</h3>
      <div class="row">
        <section  class="col-sm-3 col-xs-12">
<div align="center" id="walk-container">
  <div id="walk"></div>
</div>
        </section>
         <section class="col-sm-6 col-xs-12">
<div id="timer">
  <div id="days"></div>
  <div id="hours"></div>
  <div id="minutes"></div>
  <div id="seconds"></div>
</div>
         </section>
         <section class="col-sm-3 col-xs-12 hidden-xs">
<!-- 	         <span class = "hidden-sm">Small</span> -->
<div align="center" id="walk-container">
  <div id="walk"></div>
</div>
        </section>
      </div>
    </section>
  </div>

<p>Mummy and Daddy thought it would be a good idea to create this site where family, friends and others we know can find out about me, browse through pictures mainly of me and my elder sister Malaika obviously one or two of Mummy and Daddy. We also hope that those of you that are thinking or would like to buy a present can make a pledge to buy from the listings in the Baby shower catalogue section below</p>
    		</section>
  		</div>
	</blockquote>
  <div class="row" id="story">
    <section class="page col-sm-12">
      <h2>Our Story</h2>
      <div class="row">
        <section class="col-sm-6">
          <h3>Who We Are </h3>
          <p>We may not be a perfect couple. those of you who know us, we are a fiery couple. Well we were a fiery couple as since the conception of the little one hiding in Elly's belly, we have becoming rather boring. All of a sudden its safety first, what to eat and not, the rapid mood swings. the outrageous banning of chicken especially KFC. At one point I remember Elli in front of the TV crying, absurdly she was crying because of car advert   </p>
          <p><p align="center"><img  class="img-responsive" src="images/prego.jpg" width="500" height="375" alt="Pregnancy joke" ></p>
        </section>        
        <section class="col-sm-6">
          <h3>The Last Four Years</h3>
          <p>Sometimes life throws people together, people who had nothing in common Everything started at my birthday party at the local pub and Dee was playing pool as usual. Pretending to be an amateur player won his game and Elly tried to kiss Dee in front of everyone. That was it. Dee was intrigued and not more than a month later we went out again with a big crowd. After maybe 10 tequila shots or was it 20 Dee kissed Elly and she kissed him back. After that magic and imaginative to say at least night, everything short of fall into place. However, Dee had still to convince Elly to call him 'her Dee' and not just Dee. A trip to Greece and a few weeks in our new apartment though convince Elly that Dee was her Dee. University studies preoccupied us and our year anniversary came, which we nearly forgot - as usual. A year apart followed our first fiery year together, since Elly was in Belgium. We had so many different beers and so many fries that year, that we can still dream about them. 2015 was maybe the hardest year in our relationship and Elly said plenty of times that since Dee did not kick her out, he might never do so. And then magic happened! Just about time to start the healing process of a very hard year, the test turned blue and Elly was pregnant, finding that out on 3 of February 2016.</p>
        </section>        
      </div>
      <div class="row">
        <section class="col-sm-6">
          <h3>Baby blues</h3>
          <p>Dee told me once that I am the most annoying person he ever met. Well that counts both ways. Still we love each other and our little baby son to be. We hold hands when we walk and he is always looking at me with a smile on his face. His smile is bigger when he looks at my belly though.</p>
          <p>Lately the baby, I believe has began to recognizes daddy's voice and every time Dee speaks to me sweetly the baby moves about and kicks happily. Dee's attitude towards looking after the baby and I and his constant worrying and dotting about us makes me feel so unique, secure and happy the feeling is impossible to describe. </p>
        </section>        
        <section class="col-sm-6">
          <h3>Baby Names</h3>
          <p>Greek God or African King  Yeah that was the idea but after a lot of searching we still have not decided  </p>
          <p> Christos, Timon, Pumba, Orestis, Tshaka, Simba, Peter. We are open to suggestions though the names have to be african or greek origin</p>
		  <!-- Baby names poll created by: http://pollcode.com/ -->
		  <div align="center">
			<form method="post" action="http://poll.pollcode.com/82189527"><div style="background-color:#39D0EE;padding:2px;width:300px;font-family:Arial;font-size:medium;color:#000000;box-shadow: 0px 0px 5px #888;"><div align="center" style="padding:2px 0px 4px 2px;"><strong>Possible Baby Names</strong></div><div align="center"><input type="radio" name="answer" value="1" id="answer821895271"> <label for="answer821895271">Timon</label> <input type="radio" name="answer" value="2" id="answer821895272"> <label for="answer821895272">Hristos</label> <input type="radio" name="answer" value="3" id="answer821895273"> <label for="answer821895273">Peter</label> <input type="radio" name="answer" value="4" id="answer821895274"> <label for="answer821895274">Pumba</label> <input type="radio" name="answer" value="5" id="answer821895275"> <label for="answer821895275">Orestis</label> <input type="radio" name="answer" value="6" id="answer821895276"> <label for="answer821895276">Tshaka</label> <input type="radio" name="answer" value="7" id="answer821895277"> <label for="answer821895277">Simba</label> <nobr><input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View "></nobr></div><div align="right" style="font-size:10px">pollcode.com <a href="http://pollcode.com/">free polls</a></div></div></form>
		  </div>
		</section>        
      </div>
      <div class="row">
        <section class="col-sm-6">
          <h3>Our dreams for our baby</h3>
          <p>My sweet baby boy, I really hope that you will be a healthy and happy little baby.</p>
          <div id="thumbs">
          <p>
´´´´´´´´´´´´´´´´´´´´´´¶¶¶¶¶¶¶¶¶<br>
´´´´´´´´´´´´´´´´´´´´¶¶´´´´´´´´´´¶¶<br>
´´´´´´¶¶¶¶¶´´´´´´´¶¶´´´´´´´´´´´´´´¶¶<br>
´´´´´¶´´´´´¶´´´´¶¶´´´´´¶¶´´´´¶¶´´´´´¶¶<br>
´´´´´¶´´´´´¶´´´¶¶´´´´´´¶¶´´´´¶¶´´´´´´´¶¶<br>
´´´´´¶´´´´¶´´¶¶´´´´´´´´¶¶´´´´¶¶´´´´´´´´¶¶<br>
´´´´´´¶´´´¶´´´¶´´´´´´´´´´´´´´´´´´´´´´´´´¶¶<br>
´´´´¶¶¶¶¶¶¶¶¶¶¶¶´´´´´´´´´´´´´´´´´´´´´´´´¶¶<br>
´´´¶´´´´´´´´´´´´¶´¶¶´´´´´´´´´´´´´¶¶´´´´´¶¶<br>
´´¶¶´´´´´´´´´´´´¶´´¶¶´´´´´´´´´´´´¶¶´´´´´¶¶<br>
´¶¶´´´¶¶¶¶¶¶¶¶¶¶¶´´´´¶¶´´´´´´´´¶¶´´´´´´´¶¶<br>
´¶´´´´´´´´´´´´´´´¶´´´´´¶¶¶¶¶¶¶´´´´´´´´´¶¶<br>
´¶¶´´´´´´´´´´´´´´¶´´´´´´´´´´´´´´´´´´´´¶¶<br>
´´¶´´´¶¶¶¶¶¶¶¶¶¶¶¶´´´´´´´´´´´´´´´´´´´¶¶<br>
´´¶¶´´´´´´´´´´´¶´´¶¶´´´´´´´´´´´´´´´´¶¶<br>
´´´¶¶¶¶¶¶¶¶¶¶¶¶´´´´´¶¶´´´´´´´´´´´´¶¶<br>
´´´´´´´´´´´´´´´´´´´´´´´¶¶¶¶¶¶¶¶¶¶¶<br>
          </p>
          </div>
        </section>        
        <section class="col-sm-6" >
          <h3>Wishes to our baby</h3>
          <p>
<p>As parents we want you to be happy. Our duty to  you is to fill your heart with feelings of wonder and to be full of courage and hope.</p>
<p>We want you to have the type of friendship that is a treasure - and the kind of love that is beautiful forever. Wishing you contentment: the sweet, quiet, inner kind that comes around and never goes away.</p>

<p>We want you to have hopes and have them all come true. Throughout your life you should feel you have a real understanding of how unique and rare you truly are. Constantly we will  remind you that the sun may disappear for a while, but it never forgets to shine. May the words you listen to, say the things you need to hear. And may a cheerful face lovingly look back at you when you happen to glance in your mirror.</p>

<p>We wish you the insight to see your inner and outer beauty. We wish you sweet dreams. Your life should to have times when you feel like singing and dancing and laughing out loud. We want you to be able to make your good times better and your hard times easier to handle. I wish I could find a way to tell you - in untold ways - how important you are to us.</p>

<p>Of all the things we will be wishing for, wherever you are and whatever we may do, there will never be a day in our lives when we won’t be wishing for the best… for you.</p>

</p>
        </section>        
      </div>
    </section>
  </div>

  <!-- Modal -->
  <div class="modal fade preview-modal" data-backdrop="" id="myModal"  role="dialog"   aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" onClick="refreshPage()" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-heart-empty"></span> Baby's Present</h3>
        </div>
        <p style="background-color:azure">This pledge area is to inform us of your decision that you intend to buy our little bundle of joy the present you clicked under. In order to purchase click on the product picture and follow the link alternatively you can purchase the present at your preferred stores. You can find our postal address and contact details on the contact us section of this page.</p>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="pledge" action="php/empty.php" accept-charset="UTF-8" method="post" target="myIframe">
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
              <input type="text" class="form-control" name="buyerName" id="buyerName" onchange="onChangeEventsName()" placeholder="Please enter your name">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-share"></span> Email</label>
              <input type="text" class="form-control" name="buyerEmail" id="buyerEmail" placeholder="Please enter your email address" required>
            </div>
			<div class="form-group">
              <label for="msg"><span class="glyphicon glyphicon-envelope"></span> Message</label>
              <input type="text" class="form-control" name="buyerMessage" id="buyerMessage" onchange="onChangeEventsMessage()" placeholder="Enter your message to us.">
            </div>
			  <input type="hidden" name="id" id="myHidden">
			  <iframe name="myIframe" id="phpEcho" frameBorder="0"></iframe>
              <button type="submit" id="sub" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
			  <button type="submit" onClick="refreshPage()" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
  
    <div class="modal fade preview-modal" data-backdrop="" id="myModal2"  role="dialog"   aria-hidden="true">
    <div class="modal-dialog">
	    
      <!-- Modal content-->
      
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" onClick="refreshPage()" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-heart-empty"></span> Cancelation</h3>
        </div>
		<p style="background-color:azure" >Please enter your email address that you used to confirm your cancelation</p>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="cancelForm" action="php/cancel.php" accept-charset="UTF-8" method="post" target="myCIframe">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-share"></span> Email</label>
              <input type="text" class="form-control" name="buyerEmail" id="buyerCEmail" placeholder="Please enter your email address" required>
            </div>
			<div class="form-group">
              <label for="msg"><span class="glyphicon glyphicon-envelope"></span> Message</label>
              <input type="text" class="form-control" name="cancelMessage" id="buyerCMessage" onchange="onChangeEventsCancel()" placeholder="Enter your message to us.">
            </div>
			  <input type="hidden" name="idcancel" id="myHiddenCancel">
			  <iframe name="myCIframe" id="phpEcho" frameBorder="0"></iframe>
              <button type="submit" id="subCancel"  class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
			  <button type="submit" onClick="refreshPage()" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
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
         <p align="center"><a href="http://www.bergsteiger-kinderwagen.de/en/produkt/pram-set-bergsteiger-capri-beige-circles/"><img class="img-responsive" src="images/stroller.jpg" width="400" height="300" alt="Stroller (Baby buggy)" >No girlie colors</a></p>
		 <button  id="1" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="1c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
		</section>
  		
        <section class="col-sm-4">
          <h4>Da King's Bed</h4>
      <p align="center"><a href="http://www.mothercare.com/Tutti-Bambini-Three-Bears-Fixed-Side-Cot-Bed---grey/323991,default,pd.html"><img class="img-responsive" src="images/crib.jpg" width="400" height="300" alt="Baby bed">"We love the bears" Elly</a></p>
        <button  id="2" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="2c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
		</section>
		
        <section class="col-sm-4">
          <h4>Mummy da baby slave's throne</h4>
      <p align="center"><a href="http://www.mothercare.com/Mothercare-Reclining-Glider-Chair---grey-With-Grey-Cushion/788929,default,pd.html"><img class="img-responsive" src="images/chair.jpg" width="400" height="300" alt="Rocking Chair">dat chair</a></p>
         <button  id="3" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="3c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
		</section>
      </div>
      
  <div class="row">
    <section class="col-sm-12">
      <h3>Toys and Necessities</h3>      
    </section>
  </div>

  <div class="row">
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Rainforest Friends Rocker</h5>
      <p align="center"><a href="http://www.fisher-price.com/en_GB/products/Rainforest-Friends-Infant-to-Toddler-Rocker"><img class="img-responsive" src="images/rocker.jpg" width="400" height="300" alt="Baby Rocker">Baby rocker</a></p>
		 <button  id="4" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="4c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>

    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Rinse-n-Grow-Tub</h5>
      <p align="center"><a href="http://www.fisher-price.com/en_GB/brands/babygear/products/Rinse-n-Grow-Tub"><img class="img-responsive" src="images/grooming.jpg" width="400" height="300" alt="Baby bath">"Super cute baby bath" Elly</a></p>
		 <button  id="5" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="5c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>    
	</section>

    <section class="col-xs-12 col-sm-4 col-lg-3">
     
      <h5>Kick and Play Piano Gym </h5>
      <p align="center"><a href="http://www.amazon.co.uk/Fisher-Price-Kick-Play-Piano-Gym/dp/B00F2MQDU2?ie=UTF8&m=A3P5ROKL5A1OLE&tag=ps-uk-mattel-04-21%0D%0A"> <img class="img-responsive" src="images/piano.jpg" width="400" height="300" alt="baby gym">Baby's first big toy!</a></p>
		<button  id="6" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="6c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>

    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Baby Penguin Gift Set </h5>
      <p align="center"><a href="http://www.originalpenguin.co.uk/kids-baby/baby-distressed-logo-gift-set--0-6-months-PGN0109GP.html?cgid=opukkidsbaby&dwvar_PGN0109GP_color=118&srule=NewArrivals&start=10"><img class="img-responsive" src="images/pingu.jpg" width="400" height="300" alt="Pingu set">Baby's first penguin outfit</a></p>
    	<button  id="7" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="7c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>

    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5> Wrist and Rattle Set</h5>
      <p align="center"><a href="http://www.mothercare.com/East-Coast-Say-Hello-Wrist-and-Rattle-Set/144059,default,pd.html"><img class="img-responsive" src="images/rattles.jpg" width="400" height="300" alt="Baby Rattles">The baby rattles</a></p>
    	<button  id="8" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="8c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>

    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Bed Set Turquoise</h5>
      <p align="center"><a href="http://www.babyshop.com/bed-set-turquoise/p/47521?nosto=cross-selling"><img class="img-responsive" src="images/pinguBedding.jpg" width="400" height="300" alt="Bedding with pingu">Pingu bedding</a></p>
    	<button  id="9" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="9c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Blanket Pingu</h5>
      <p align="center"><a href="http://www.babyshop.com/blanket-pingu-blue/p/47674"><img class="img-responsive" src="images/pinguBlanket.jpg" width="400" height="300" alt="Blanket with pingu">Soft pingu!</a></p>
    	 <button  id="10" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="10c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
     
      <h5>Pingu bodysuit</h5>
      <p align="center"><a href="http://www.zazzle.co.uk/baby_bodysuit_my_pingu_comfy_best_selling_tshirts-235208923129804906"> <img class="img-responsive" src="images/pinguSuit.jpg" width="400" height="300" alt="pingu suit">Pingu Suit</a></p>
    	<button  id="11" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="11c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
     
      <h5>Pocket Spring Mattress</h5>
      <p align="center"><a href="http://www.mothercare.com/Kit-for-Kids-Ventiflow-70x140cm-Pocket-Spring-Cotbed-Mattress---grey/342849,default,pd.html"> <img class="img-responsive" src="images/mattress.jpg" width="400" height="300" alt="Mattress">Baby's mattress</a></p>
		<button  id="12" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="12c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
     
      <h5>Bodysuit Set</h5>
      <p align="center"><a href="http://www.mothercare.com/My-First-Bear-Dungarees-and-Bodysuit-Set/LH5949,default,pd.html"> <img class="img-responsive" src="images/bodysuit.jpg" width="400" height="300" alt="Bodysuit">Baby's first dungarees</a></p>
    	 <button  id="13" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="13c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Elephant Bodysuits </h5>
      <p align="center"><a href="http://www.mothercare.com/Mummy-and-Daddy-Elephant-Bodysuits---5-Pack/LH6545,default,pd.html"><img class="img-responsive" src="images/ebodysuit.jpg" width="400" height="300" alt="Elephant Bodysuit">Elephant Bodysuit set</a></p>
    	 <button  id="14" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="14c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Little Bear Sleepsuits</h5>
      <p align="center"><a href="http://www.mothercare.com/Little-Bear-Sleepsuits---3-Pack/LH6504,default,pd.html"><img class="img-responsive" src="images/sleepsuit.jpg" width="400" height="300" alt="Sleepsuit">Baby's first sleepsuit</a></p>
    	 <button  id="15" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="15c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Electric Steam Steriliser</h5>
      <p align="center"><a href="http://www.mothercare.com/Philips-AVENT-2-in-1-Electric-Steam-Steriliser/629677,default,pd.html"><img class="img-responsive" src="images/sterilizer.jpg" width="400" height="300"  alt="Steriliser">For baby's safety</a></p>
    	<button  id="16" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="16c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>125ml Feeding Bottle- 3 pack</h5>
      <p align="center"><a href="http://www.mothercare.com/Philips-Avent-Classic-125ml-Bottle--3-pack/705032,default,pd.html"><img class="img-responsive" src="images/bottle.jpg" width="400" height="300" alt="Bottles">Baby's first bottles</a></p>
    	<button  id="17" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="17c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Donald Duck 3 Piece Set</h5>
      <p align="center"><a href="http://www.mothercare.com/Disney-Donald-Duck-3-Piece-Set/LH6529,default,pd.html"><img class="img-responsive" src="images/donald.jpg" width="400" height="300" alt="Sleepsuit">Baby's first Disney set</a></p>
    	<button  id="18" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="18c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
     <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Texture Teething Linkies</h5>
      <p align="center"><a href="http://www.mothercare.com/Textu#EECBAD-Linkies/732264,default,pd.html"><img class="img-responsive" src="images/teether.jpg" width="400" height="300" alt="Teether">Baby's teether</a></p>
    	<button  id="19" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="19c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>3 in 1 Projector Mobile</h5>
      <p align="center"><a href="http://www.mothercare.com/3-in-1-Projector-Mobile/142602,default,pd.html"><img class="img-responsive" src="images/projector.jpg" width="400" height="300" alt="Cot Projector">Baby's cot projector</a></p>
    	 <button  id="20" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="20c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>London Sleeping Bag</h5>
      <p align="center"><a href="http://www.thegreycompany.com/the-little-grey-company/baby/baby-boys/london-sleeping-bag-2-5-tog--grey/"><img class="img-responsive" src="images/sleepingbag.jpg" width="400" height="300" alt="sleepingbag">Baby's sleeping bag</a></p>
		 <button  id="21" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="21c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>    	
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Winnie the Pooh Hat Mittens Set</h5>
      <p align="center"><a href="http://www.toysrus.co.uk/babiesrus/winnie-the-pooh-hat-and-mittens-set/TRUP2151120001"><img class="img-responsive" src="images/winnie.jpg" width="400" height="300"  alt="Winnie the Pooh hat and mittens">We love Winnie</a></p>
		 <button  id="22" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="22c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	 </section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Dumbo Blue Baby Comforter</h5>
      <p align="center"><a href="http://www.disneystore.co.uk/dumbo-blue-baby-comforter/mp/91139/1500072/"><img class="img-responsive" src="images/dumbo.jpg" width="400" height="300" alt="Dumbo baby blanky">Baby's cute blanky</a></p>
		 <button  id="23" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="23c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Motorola Baby Monitor</h5>
      <p align="center"><a href="http://www.mothercare.com/Motorola-MBP25-Video-Baby-Monitor/834548,default,pd.html"><img class="img-responsive" src="images/monitor.jpg" width="400" height="300" alt="Baby monitor">Baby monitor</a></p>
       <button  id="24" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="24c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
    
    <section class="col-xs-12 col-sm-4 col-lg-3">
      
      <h5>Universal Cot Top Changer</h5>
      <p align="center"><a href="http://www.mothercare.com/Mothercare-Universal-Cot-Top-Changer/748513,default,pd.html"><img class="img-responsive" src="images/changer.jpg" width="400" height="300" alt="Baby changer">Baby's changer</a></p>
    	<button  id="25" type="button" class="btn btn-default"   style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
		 </button>
		 <button type="button" id="25c" class="btn btn-default"    style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
		 </button>
	</section>
	
	<section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Girafe teether</h5>
          <p align="center"><a href="http://www.johnlewis.com/sophie-la-girafe-teether-in-gift-box/p231050761?sku=231050761&amp;kpid=231050761&amp;s_kenid=22f3388c-844f-46fc-88e7-ee199f789e5f&amp;s_kwcid=403x766656&amp;tmad=c&amp;tmcampid=73">
            <img class="img-responsive" src="images/girafeteether.jpg" width="400" height="300" alt="Girafe teether" >My cute teether</a>
          </p>
          <button id="26" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="26c" class="btn btn-default"   style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
          </button>
	</section>
          
          <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Picnic hamper</h5>
          <p align="center"><a href="http://www.beaubabybundles.com/shop/baby-picnic-baskets-large/">
            <img class="img-responsive" src="images/babypicnic.jpg" width="400" height="300" alt="Baby picnic basket" >Baby picnic basket</a>
          </p>
          <button id="27" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="27c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
         	 </button>
	</section>
<section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Bathtime hamper</h5>
          <p align="center"><a href="http://www.babyblooms.co.uk/baby-gifts/calming-bathtime-baby-hamper/">
            <img class="img-responsive" src="images/bathtimehamper.jpg" width="400" height="300" alt="Baby bathtime hamper" >Calming hamper</a>
          </p>
          <button id="28" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="28c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
          	 </button>
	</section>
          <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Baby boy hamper</h5>
          <p align="center"><a href="http://www.babyblooms.co.uk/baby-gifts/boys/babyblooms-new-baby-boy-gift-basket/">
            <img class="img-responsive" src="images/babyboyhamper.jpg" width="400" height="300" alt="Baby boy hamper" >Baby boy hamper</a>
          </p>
          <button id="29" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="29c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
          	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Bear Sleepsuits</h5>
          <p align="center"><a href="http://www.matalan.co.uk/kids-clothing/girls/shop-by-age/baby--newborn-0-18mths/bodysuits-and-sleepsuits/s2615100/unisex-3-pack-sleepsuits-tiny-baby-18mths">
            <img class="img-responsive" src="images/sleepsuits3x.jpg" width="400" height="300" alt="Bear sleepsuits" >Sleepsuit set</a>
          </p>
          <button id="30" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="30c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
        	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Winnie Gift Set</h5>
          <p align="center"><a href="http://www.matalan.co.uk/kids-clothing/girls/shop-by-age/baby--newborn-0-18mths/bodysuits-and-sleepsuits/s2614282/unisex-winnie-the-pooh-4-piece-gift-set-tiny-baby-12mths">
            <img class="img-responsive" src="images/winniegift.jpg" width="400" height="300" alt="Winnie gift set" >We love winnie</a>
          </p>
          <button id="31" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="31c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
    	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Boat bodysuit set</h5>
          <p align="center"><a href="http://www.next.co.uk/x57782s8#355763">
            <img class="img-responsive" src="images/shipbodysuit.jpg" width="400" height="300" alt="Boat bodysuit set" >My bodysuit has boats</a>
          </p>
          <button id="32" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="32c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
          	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Boat sleepsuit Set</h5>
          <p align="center"><a href="http://www.next.co.uk/x57782s7#129113">
            <img class="img-responsive" src="images/boatsleepsuit.jpg" width="400" height="300" alt="Boat sleepsuit" >My sleepsuit has boats too</a>
          </p>
          <button id="33" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="33c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
      	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>First dungarees</h5>
          <p align="center"><a href="http://www.next.co.uk/x57778s8#105104">
            <img class="img-responsive" src="images/dungarees.jpg" width="400" height="300" alt="First dungarees" >My dungarees have boats</a>
          </p>
          <button id="34" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="34c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
       	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Duck set</h5>
          <p align="center"><a href="http://www.marksandspencer.com/8-piece-pure-cotton-starter-set/p/p22386158?prevPage=plp">
            <img class="img-responsive" src="images/duckset.jpg" width="400" height="300" alt="Duck set" >Soo cute!</a>
          </p>
          <button id="35" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="35c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
        	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Winnie the pooh Jacket</h5>
          <p align="center"><a href="http://www.disneystore.co.uk/winnie-the-pooh-baby-hooded-knitted-jacket/mp/91349/1500070/">
            <img class="img-responsive" src="images/winniejacket.jpg" width="400" height="300" alt="Winnie the pooh jacket" >My first jacket</a>
          </p>
          <button id="36" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="36c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
      	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>First sunhat</h5>
          <p align="center"><a href="http://www.mothercare.com/Blue-Fisherman-Hat-with-Ties/LH6112,default,pd.html">
            <img class="img-responsive" src="images/sunhat.jpg" width="400" height="300" alt="sunhat" >For the sunny UK days lolz</a>
          </p>
          <button id="37" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="37c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
       	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>First socks</h5>
          <p align="center"><a href="http://www.disneystore.co.uk/mickey-mouse-baby-socks-3-pairs/mp/91367/1500071/">
            <img class="img-responsive" src="images/socks.jpg" width="400" height="300" alt="socks" >Mickey socks</a>
          </p>
          <button id="38" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="38c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
          	 </button>
	</section>
		  <section class="col-xs-12 col-sm-4 col-lg-3">
          <h5>Muslin squares</h5>
          <p align="center"><a href="http://www.mothercare.com/Mothercare-Whale-Bay-Muslins---6-Pack/660710,default,pd.html#q=muslin%20squares">
            <img class="img-responsive" src="images/muslinsq.jpg" width="400" height="300" alt="muslin Squares" >My muslin squares</a>
          </p>
          <button id="39" type="button" class="btn btn-default"   
          style="background-color:#D0FAEE" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:grey"> <b>Pledge</b></span>
          </button> 
          <button type="button" id="39c" class="btn btn-default"   
          style="background-color:#EECBAD" data-toggle="modal" data-target="#myModal2">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:grey"> <b>Cancel</b></span>
      	 </button>
	</section>
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
			          <div class="item active"><img src="images/scan2.jpg" alt="Baby scan"></div>

                                <div class="item"><img src="images/scan4.jpg"alt="Baby scan"></div>

                                <div class="item"><img src="images/scan5.jpg"alt="Baby scan"></div>

                                <div class="item"><img src="images/scan6.jpg"alt="Baby scan"></div>

                                <div class="item"><img src="images/scan7.jpg"alt="Baby scan"></div>

                                <div class="item"><img src="images/scan1.jpg"alt="Baby scan"></div>

                                <div class="item"><img src="images/scan3.jpg"alt="Baby scan"></div>

                                <div class="item"><img src="images/scan8.jpg"alt="Baby scan"></div>		        </div>
				<a href="#cr2" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#cr2" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
	        </div>
        </section>
        
	    <section id="scroller" class="col-sm-6">
          <blockquote>
	          
	        <div class="scroll">
	          <h3>From Daddy...</h3>
	       
	            <p>When you feel a hand rest upon your Mum,
And you hear the sound of a low deep hum,
I hope you know, and to yourself think gladly,
This touch and voice is of my Daddy.

It's still early days but you've got my heart,
And I know that this is just the start,
Because from now on and forevermore,
I will love you, cherish you, and always adore.

Every day my love for you grows, 
And I hope to you this already shows, 
I will do everything I can to make you see,
That you will always mean the world to me.

And from today until the day you're born,
I swear to keep the oath I've sworn,
You and Mum will always be cared for,
Protection is the oath I swore.

Not just to protect, but to always love,
Because you were a gift from above,
I never thought I would feel this way, 
But now I can't wait until next May.

For when the day that you arrive,
I would have never before felt so alive,
You'll bring a tear straight to my eye,
And you'll look at me and you'll know why.

Because you will be the greatest gift,
And my heart and soul you will uplift,
That feeling there will be hard to beat,
From that moment on my life's complete.

But for now you sleep inside your Mummy,
Keep warm and snug inside her tummy, 
And I'll look forward to the day you're here,
To take my heart when you appear.

So when you feel that hand on Mum,
And hear the sound of my low deep hum,
I know you'll know and for that I'm glad,
That here with Mum is your very proud Dad.</p>
	          </div>
            <footer>Carlisa P. Branch</footer>
        	</blockquote>
        </section>
      </div>
      
      
        <h2>Pictures</h2>
      <div class="row">
	      <section id="scroller" class="col-sm-6">
          <blockquote>
	          <div class="scroll">
	          <h3>From Mummy...</h3>
            <p>The first image I have in my mind of our little baby boy is a foot. When the doctor placed the scan on my belly the first image I saw was that foot, and I asked if there is a second one, out of all things to say... However, this was not the first time I have seen you nor dreamt about you. Apart from the previous scan that confirmed that I am pregnant, I was dreaming about you for so long, so many years and so many long nights that seemed almost unreal when you were actually inside me, true to be born, not a dream or a figment of my imagination any more. When the dream finally came true, I was and still am over the moon, feeling so happy, thrilled and terrified to be a good mommy to you. You my baby boy are the only one that matters and I promise to be there for you and attend your needs and give you a trillion cuddles every day! My first baby, my first son, my first unique love; you make me a mother for the first time and together we will find out the rest and plan and live our lives happily.</p>
	          </div>
            <footer>Elly</footer>
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

			        

		        </ol>
		         <div class="carousel-inner">
                                <div class="item active"><img src="images/de1.jpg" alt="Picture"></div>

                                <div class="item"><img src="images/de2.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/de3.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/de4.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/de5.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/dm1.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/dm2.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/dm3.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma1.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma2.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma3.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma4.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma5.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma7.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma8.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma9.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma10.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma11.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma12.jpg"alt="Picture"></div>

                                <div class="item"><img src="images/ma13.jpg"alt="Picture"></div>		        </div>
				<a href="#cr1" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#cr1" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
	        </div>
        </section>
      </div>
      </div>
  </div><!-- row --> 

   <h2 align="center"> Contact details</h2>
 <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 >Elly&Dee<i class="fa fa-paper-plane-o"></i></h2>
                    <h4> 
                        <address>
                        
	                        20 Eastney Road
                            Southsea
                            Hampshire
                            PO4 9HY
                           
                        </address>
                       <a class="fa fa"></a></h4>
                </div>
            </div>
            <div id="map-canvas"></div>

            <div class="row">
                <form method="post" action="index.php" name="contactform" id="contactform">
	                

                    <div class="col-md-6">
	                    
                        <fieldset>
                            <input name="name" type="name" id="name" size="30" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName";?>
                            <br>
                            <input name="email" type="text" id="email" size="30" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail";?>
                            <br>
                            <input name="phone" type="text" id="phone" size="30" placeholder="Phone number" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
							<?php echo "<p class='text-danger'>$errPhone";?>
                            <br>
                            <input name="human" type="text" id="human" size="30" placeholder="What is 2+3?" value="<?php echo htmlspecialchars($_POST['human']); ?>">
                            <?php echo "<p class='text-danger'>$errHuman";?>
                            <br>
                        </fieldset>
                    </div>
                    <div class="col-md-6"> 
                        <fieldset>
                            <!--<textarea  " input name="message" cols="40" rows="20" type="text" id="message"placeholder="Type your message herevalue="<?php echo htmlspecialchars($_POST['message']);?>"></textarea>-->
							<textarea  placeholder="Type your message here" name="message" cols="40" rows="20" id="message" value="<?php echo htmlspecialchars($_POST['message']);?>"></textarea>
							<?php echo "<p class='text-danger'>$errMessage";?> 
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                         <!--<input id="submit" name="submit" button type="submit" value="Send" class="btn btn-lg"> -->
						 <input id="submit" name="submit" type="submit" value="Send" class="btn btn-lg"> 
                         <?php echo $result; ?>	
                        </fieldset>
                    </div>
                </form>
                  <div class="col-md-12">
                        <fieldset>
                         
                        </fieldset>
         
                    </div>
            </div>
        </div>
    </section>
<!--
	    </div>
    </div>
    </div>
-->
  
  
 <section align=center>
	 <p> “Life is a flame that is always burning itself out, but it catches fire again every time a child is born.”</p>
	 <footer>– George Bernard Shaw</footer>
 </section>
 
 <div class="container">
   
        <div class="row">
            <div class="col-xs-6">
	            
	            
	           
               <h6 align="center">Dee</h6>
               
                <div class="col-xs-12 col-sm-4" align="center">
                <p><a href="https://www.facebook.com/damiantunthuwa.tyson?fref=ts" title="Facebook Daddy"><img src="images/socialMedia/FB-f-Logo__blue_29.png" alt="Facebook Daddy"></a></p>
                </div>
                <div class="col-xs-12 col-sm-4"align="center">
                <p><a href="https://github.com/DameInsane" title="Github Daddy"><img src="images/socialMedia/GitHub-Mark-32px.png" alt="Github Daddy"></a></p>
                </div>
                <div class="col-xs-12 col-sm-4"align="center">
                	<p><a href="https://uk.linkedin.com/pub/dumbani-tunthuwa/18/1a6/336">
      
          <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_profile_bluetxt_80x15.png" width="80" height="15" border="0" alt="View dumbani tunthuwa's profile on LinkedIn">
        
    </a></p>
                </div>

        </div>
            
            <div class="col-xs-6">
	          
	            <h6 align="center">Elly</h6>
	              
                <div class="col-xs-12 col-sm-4 "align="center">
               <p> <a href="https://www.facebook.com/elli.andrikopoulou" title="Facebook Mommy"><img src="images/socialMedia/FB-f-Logo__blue_29.png" alt="Facebook Mommy"> </a></p>
                </div>
                 <div class="col-xs-12 col-sm-4 "align="center">
                <p><a href="https://github.com/Prayance" title="Github Mommy"><img src="images/socialMedia/GitHub-Mark-32px.png" alt="Github Mommy"> </a></p>
                 </div>
                  <div class="col-xs-12 col-sm-4 "align="center">
                 <p> 
	<a href="https://uk.linkedin.com/pub/elisavet-andrikopoulou/51/a24/402">
      
          <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_profile_bluetxt_80x15.png" width="80" height="15" border="0" alt="View Elisavet Andrikopoulou's profile on LinkedIn">
        
    </a></p>
				</div>

                </div>
            </div>
        
 
 </div>
 
 
 <footer>
	<p align="center">Dee&EllyProduction@01/05/16 </p>
 </footer>
   
</body>
</html>