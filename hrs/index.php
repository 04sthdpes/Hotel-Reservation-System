<?php
mysql_connect("localhost","root","");
if (!mysql_select_db("hrs"))
{
    header("location:setup.php");
    }
 include('header.php');
?>
<!-- START-SECTION-->
<section>
    <!-- START-SLIDER -->
	<div class="slider" style="background-image:url(images/SLZ-Bg-Lobby-Lounge.jpg);">
	</div>
    <!-- END-SLIDER -->
    <!-- START-EXCLUSIVE-ROOM -->
	<div class="exclusive-room">
		<div class="wrapper">
            <div class="heading">
                <h2>OUR EXCLUSIVE ROOM</h2>
            </div>
 			<p>best place for your vacation</p>        
            <img src="images/Superior room/9RF9U_superior-room.jpg" width="326" height="205" alt="superior-room"/>
            <img src="images/Deluxe room/ul1Lb_d1.jpg" width="326" height="205" alt="deluxe-room"/>
            <img src="images/Nasika club/Cr4tq_clubroom3.jpg" width="326" height="205" alt="club-room"/> 
            <div class="view-accomodation">
                <a href="accomodation.php">VIEW ALL ACCOMODATION</a>
            </div>
    	</div>
    </div>
    <!-- END-EXCLUSIVE-ROOM -->
    <!-- START-BANNER -->
    <div class="banner">
        <div class="wrapper">
            <h1>"Loved beauty, accommodations, and most of all staff <span>NASIKA HOTEL</span>"</h1>
        </div>
    </div>
    <!-- END-BANNER -->
</section>
<!-- END-SECTION -->
<?php
 include('footer.php');
?>