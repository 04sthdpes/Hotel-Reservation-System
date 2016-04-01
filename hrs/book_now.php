<?php
ob_start();
session_start();
	include('user_header.php');

    if (isset($_POST['bookroom'])) {
        $arrival=$_POST['start'];
        $depature=$_POST['end']; 
        $qty_reserve=$_POST['no_room'];
        $roomId=$_SESSION['roomId'];
        $userId=$_SESSION['userId'];
        $qry_book="INSERT INTO `roominventory`(`roominventoryId`, `arrival`, `departure`, `qty_reserve`, `roomId`, `userId`, `status`) VALUES ('','$arrival','$depature','$qty_reserve','$roomId','$userId','booked')";
        if(mysql_query($qry_book)){
            header('location:user_panel.php');
        }
        else
            mysql_error();
    }
    
?>
<section>	
    <!-- START-SLIDER -->
    <div class="slider" style="background-image:url(images/booknow.jpg); height:300px;">
    </div>
    <!-- END-SLIDER -->
    <!-- START-SECTION-PAGE-->
	<div class="section-page">
    	<div class="wrapper">
        	<form id="testform" method="post" action="book_now.php" onsubmit="return validateForm()" name="room">                    
                <input type="hidden" name="bookroom" value="true">
                <h1 style="color:#278810;">Check Avaiability</h1>
                <h2 style="text-align:center;padding:10px 0px;">Book a Room</h2>
                <fieldset>
                    <label for="sd">Start Date : </label>
                    <p><input type="text" class="w8em format-y-m-d highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" style="margin-bottom: 25px;" required readonly/></p>
                    <label for="ed">End Date : </label>
                  <p class="lastup"><input type="text" class="w8em format-y-m-d highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" style="margin-bottom: 25px;" required readonly/></p>
                  <p><label>No. of rooms : </label>
                        <input type="number" name="no_room" required/>
                  </p>
                  <p><input type="submit" name="submit" value="Book room" style="font-size:20px;"></p>
                </fieldset>                    
            </form>
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END-SECTION-PAGE-->
</section>
<!-- END-SECTION-->
<?php
    include('end_footer.php');
    ob_end_flush(); 
?>
