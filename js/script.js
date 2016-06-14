// Elly's Scripts

// This is the main function that disables/enables the pledge and cancel buttons onload.
function disableSoldItems() {
    $.ajax({
        type: "GET",
        dataType: "json",
        ContentType: "application/json",
        url: "http://www.qualitymaddness.com/php/myPHP.php",
        data: { type: "getSold" },
        success: function (response) {
			$.each(response.outputArray, function (index, element) {
			// alert("In the loop");
            var ID = element.id;
			var itemName = element.presentName;
			var content = element.id + " - " + element.presentName;
			// console.log(content);
			document.getElementById(ID).disabled = true;
            });
        },
        error: function () {
            alert("Sorry, I still haven't found what I'm looking for!");
        }
    });

    $.ajax({
        type: "GET",
        dataType: "json",
        ContentType: "application/json",
        url: "http://www.qualitymaddness.com/php/myPHP.php",
        data: { type: "getNotSold" },
        success: function (response) {
			$.each(response.outputArray, function (index, element) {
			// alert("In the loop");
            var ID = element.id;
			var itemName = element.presentName;
			var content = element.id + " - " + element.presentName;
			// console.log(content);
			document.getElementById(ID).disabled = true;
            });
        },
        error: function () {
            alert("Sorry, I still haven't found what I'm looking for!");
        }
    });
}

// Click the Submit button from the Pledge Modal
$(document).ready(function() {	
	var id;
	$('.btn-default').click(function(){ 
		id=$(this).attr('id');
		document.getElementById('myHidden').setAttribute('value', id);
		$("#sub").click( function(event) {
			var x;
			// set the pledge form action
			$("#pledge").attr("action", "php/update.php");
			
			$.post( $("#pledge").attr("action"),
			x = $("#pledge :input").serializeArray(),
			function(info){ $("#result").html(info);
			});
			console.log("my data: " + JSON.stringify(x));
			document.getElementById("sub").disabled = true;
			alert("We thank you for your pledge.");
		});
	});
	clearInput();
});
$("#pledge").submit( function() {
	return false;
});
	
function clearInput() {
	$("#pledge :input").each( function() {
	   $(this).val('');
	});
}
	
// Click the Submit button from the Cancel Modal	
$(document).ready(function() {	
	var idc;
	$('.btn-default').click(function(){ 
		idc=$(this).attr('id');
		idc = idc.substr(0, idc.indexOf('c')); 
		
		document.getElementById('myHiddenCancel').setAttribute('value', idc);
		$("#subCancel").click( function(event) {
			var x;
			// this idc is the idc of the cancel button not the idc of the cancelForm buttons 
			$.post( $("#cancelForm").attr("action"),
				x = $("#cancelForm :input").serializeArray(),
				function(info){ $("#result").html(info);
				});
				// console.log("my data: " + JSON.stringify(x) + " and " + x);
		});
	});
	clearCInput();
});
	
$("#cancelForm").submit( function() {
	return false;
});
	
function clearCInput() {
	$("#cancelForm :input").each( function() {
	   $(this).val('');
	});
}

/*
	Validation Section
*/
function onChangeEvents(){
	var name = document.getElementById("buyerName");
	var msg = document.getElementById("buyerMessage");
	validateName(name);
	validateMessage(msg);
}

function onChangeEventsCancel(){
	var msgc = document.getElementById("buyerCMessage");
	validateMessage(msgc);
}

// validate the name
function validateName(field) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (field.value == "") {
        error = "You didn't enter a name.\n";
        alert(error);
        return false;
 
    } else if ((field.value.length < 3) || (field.value.length > 45)) {
        error = "The name is the wrong length. It needs to be between 4 to 45 characters.\n";
		alert(error);
		return false;
 
    } else if (illegalChars.test(field.value)) {
        error = "The name contains illegal characters.\n";
		alert(error);
		return false;
 
    } else {
        field.style.background = 'White';
    }
    return true;
}

// validate the message
function validateMessage(field) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
	if (field.value.length > 255) {
        error = "The message is the wrong length. It needs to be less than 255 characters.\n";
		alert(error);
		return false;
 
    } else if (illegalChars.test(field.value)) {
        error = "The message contains illegal characters.\n";
		alert(error);
		return false;
 
    } else {
        field.style.background = 'White';
    }
    return true;
}

// set endpoint and your access key. This access key is from the API: https://mailboxlayer.com/dashboard
var access_key = 'f21135e4a1109bcdf965b9213bb716ba';

function validateEmail(){
	var email_address = document.getElementById("buyerEmail").value;
	var res;
		// Validation functionality
		// verify email address via AJAX call
	$.ajax({
		url: 'http://apilayer.net/api/check?access_key=' + access_key + '&email=' + email_address,   
		dataType: 'jsonp',
		success: function(json) {
			console.log(json.format_valid);
			console.log(json.smtp_check);
			if (json.format_valid && json.smtp_check){
				res = true;
			}
			else{
				res= false;
				alert("Please verify your email address.");
			}
		},
		error: function () {
			alert("Sorry, I still haven't found what I'm looking for!");
		}
	});
}

function refreshPage(){
    window.location.reload();
} 



/*! Main */
jQuery(document).ready(function($) {
	// Fixa navbar ao ultrapassa-lo
	var navbar = $('#navbar-main'),
		distance = navbar.offset().top,
		$window = $(window);
	$window.scroll(function() {
		if ($window.scrollTop() >= distance) {
			navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
			$("body").css("padding-top", "70px");
		} else {
			navbar.removeClass('navbar-fixed-top');
			$("body").css("padding-top", "0px");
		}
	});
});

function makeTimer() {
	var endTime = new Date("September 09, 2016 15:00:00 PDT");
	var endTime = (Date.parse(endTime)) / 1000;
	var now = new Date();
	var now = (Date.parse(now) / 1000);
	var timeLeft = endTime - now;
	var days = Math.floor(timeLeft / 86400);
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
	if (hours < "10") {
		hours = "0" + hours;
	}
	if (minutes < "10") {
		minutes = "0" + minutes;
	}
	if (seconds < "10") {
		seconds = "0" + seconds;
	}
	$("#days").html(days + "<span>Days</span>");
	$("#hours").html(hours + "<span>Hours</span>");
	$("#minutes").html(minutes + "<span>Mins</span>");
	$("#seconds").html(seconds + "<span>Secs</span>");
}
setInterval(function() {
	makeTimer();
}, 1000);

function initialize() {
	var mapOptions = {
		center: new google.maps.LatLng(50.78709, -1.05635),
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.HYBRID,
		scrollwheel: false,
		draggable: false,
		panControl: true,
		zoomControl: true,
		mapTypeControl: true,
		scaleControl: true,
		streetViewControl: true,
		overviewMapControl: true,
		rotateControl: true,
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);


