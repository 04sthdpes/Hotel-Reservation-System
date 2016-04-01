<?php
ob_start();
	include('connection.php');
?>
<!doctype html>
<html lang=''>
<head>
	<title>Nasika Hotel</title>
	<meta charset='utf-8'>
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link type="text/css" rel="stylesheet" href="css/menu.css"/>	
   	<script src="js/menu.js"></script>
   	<script type="text/javascript">
		function makeTwoChars(inp) {
        	return String(inp).length < 2 ? "0" + inp : inp;
		}
		function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        	document.getElementById("sd").value = "";
        	document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        	datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
            var sd = datePickerController.getDatePicker("sd");
            var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
            if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
            return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
	}

	function removeInputEvents() {
	        // Remove the onchange event handler set within the function initialiseInputs
	        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
	}

	datePickerController.addEvent(window, 'load', initialiseInputs);
	datePickerController.addEvent(window, 'unload', removeInputEvents);

	//]]>
</script>
<!--sa minus date-->
<script type="text/javascript">
	// Error checking kept to a minimum for brevity
 
	function setDifference(frm) {
	var dtElem1 = frm.elements['start'];
	var dtElem2 = frm.elements['end'];
	var resultElem = frm.elements['result'];
	 
// Return if no such element exists
	if(!dtElem1 || !dtElem2 || !resultElem) {
return;
	}
	 
	//assuming that the delimiter for dt time picker is a '/'.
	var x = dtElem1.value;
	var y = dtElem2.value;
	var arr1 = x.split('/');
	var arr2 = y.split('/');
	 
// If any problem with input exists, return with an error msg
if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
resultElem.value = "Invalid Input";
return;
	}
	 
var dt1 = new Date();
dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
var dt2 = new Date();
dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
}
</script>

<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

</head>
<body>
	<!-- HEADER START-->
	<header>
		<!-- DIV BIZ-LOGO START-->
		<div class="navbar">
			<div class="wrapper">			
				<!-- DIV BIZ-LOGO START-->
				<div class="biz-logo">
					<img src="images/logo.png" width="130" height="75" alt="logo" />
				</div>
				<!--END BIZ-LOGO-->
				<!-- DIV CSS MENU START-->
				<div id='cssmenu'>
					<ul>
					   <li><a href='index.php'><span>Home</span></a></li>
					   <li><a href='aboutus.php'><span>About us</span></a></li>
					   <li><a href='services.php'><span>Services</span></a></li>
					   <li class='active has-sub'><a href='accomodation.php'><span>ACCOMODATION</span></a>
						  <ul>
							 <li><a href='superiorroom.php'><span>superior room</span></a></li>
							 <li><a href='deluxeroom.php'><span>deluxe room</span></a></li>
							 <li class='last'><a href='nasikaclub.php'><span>nasika club room</span></a></li>
						  </ul>
					   </li>      
					   </li>
					   <li><a href='contact.php'><span>contact us</span></a></li>
					   <li><a href='userguide/userguide.pdf'><span>help</span></a></li>
					   <li class='last'><a href='login.php'><span>login</span></a></li>
					</ul>
					</div>			
				<!-- END OF CSS MENU-->
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="shadow"></div>
	</header>
	<div class="clearfix"></div>
	<div class="partition"></div>
    <!-- END OF HEADER-->
    <?php
    	ob_flush();
    ?>