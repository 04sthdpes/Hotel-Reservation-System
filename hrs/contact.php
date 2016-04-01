<?php
    session_start();
	include('header.php');
?>
<!-- START-SECTION-->
<section>
	<!-- START-SECTION-PAGE-->
	<div class="section-page">
    	<div class="wrapper">
        	<!-- START-ASIDE-LEFT-->
        	<div class="aside-left">                           	
               	<!-- START-ABOUT-US-->
                <div class="about-us">
                	<h2>Contact us</h2>
                    <hr width="100px">                    
                </div>
                <!-- END-ABOUT-US-->
                <img src="images/map.jpg" class="map" width="740" height="300" alt="image"/> 
                <!--START COL-MD-2-->
                <div class="col-md-2">
                    <!--START COL-MD-ROW-->
                    <div class="col-md-row">
                        <!--START COL-MD-3-->
                        <div class="col-md-3">
                            <h3>NASIKA HOTEL</h3>
                            <p>P.O. Box 985</p>
                            <p>Sanga, Kavre, Nepal</p>
                            <p>Telephone: 977-1-6630340</p>
                            <p>Fax: 977-1-1663572</p>
                            <p>Email: resv@nasikahotel.com</p>
                        </div>  
                        <!-- END-COL-MD-3-->
                        <!--START COL-MD-3-->
                        <div class="col-md-3">
                            <h3>KATHMANU SALES OFFICE</h3>
                            <p>C-65, Ground Floor</p>
                            <p>New Road, Kathmanu-35</p>
                            <p>Telephone: 977-1-4015624</p>
                            <p>Email: kso@nasikahotel.com</p>
                        </div>
                        <!-- END-COL-MD-3-->
                        <!--START COL-MD-3-->
                        <div class="col-md-3">
                            <h3>DHARAN SALES OFFICE</h3>
                            <p>5th Floor,Room No-A3 Dharan 569 012</p>
                            <p>Telephone: 977-1-7894763</p>
                            <p>Fax: 977-1-8730572</p>
                            <p>Email: dso@nasikahotel.com</p>
                        </div>
                         <!-- END-COL-MD-3-->    
                    </div>
                    <!-- END-COL-MD-row-->
                    <!--START-COL-MD-FORM -->
                    <div class="col-md-form">                        
                        <h2>LEAVE A REPLY</h2>
                        <?php 
                            if (isset($_POST['submit_comment'])){                                
                                $fullname=$_POST['fullname']; 
                                $email=$_POST['email'];
                                $comment=$_POST['comment'] ;

                                $query="INSERT INTO comment (`commentId`,`fullname`,`email`,`comment`) VALUES ('','$fullname','$email','$comment')";
    
                                if (mysql_query($query)) {
                                    echo("THANK YOU ! for your comment");
                                }
                                else{
                                    echo("There is a problem");
                                }

                            }
                        ?>
                        <!-- FORM-START -->
                        <form action="contact.php" method="POST">
                            <input type="hidden" name="submit_comment" value="true">
                            <p>
                                <input type="text" placeholder="Full Name" name="fullname" required="required"/>
                            </p>
                            <p>
                                <input type="email" placeholder="Email Address" name="email" required="required"/>
                            </p>
                            <p>
                                <textarea rows="10" name="comment" placeholder="Comment"required="required"></textarea>
                            </p>
                            <p>
                                <input type="submit" class="submit" value="POST COMMENT"/>
                            </p>
                            <p>
                              
                            </p>
                        </form>
                        <!-- FORM-END -->
                    </div>
                    <!-- END COL-MD-FORM -->
                    <div class="clearfix"></div>
                </div>
                <!-- END-col md -2 -->
            </div>
            <!-- END-ASIDE-LEFT-->
            <!-- START-ASIDE-RIGHT-->
            <div class="aside-right">
            	<!-- START-ASIDE-RIGHT-TOP-->
            	<div class="aside-right-top">
                    <div class="heading">
                        <h2>OUR EXCLUSIVE ROOM</h2>
                    </div>
                    <hr>
                    <img src="images/Superior room/9RF9U_superior-room.jpg" class="aside-room" width="306" height="185" alt="superior-room"/>
                   <img src="images/Deluxe room/ul1Lb_d1.jpg" class="aside-room" width="306" height="185" alt="deluxe-room"/>
                   <img src="images/Nasika club/Cr4tq_clubroom3.jpg" class="aside-room" width="306" height="185" alt="club-room"/> 
                   <div class="view-accomodation">
                        <a href="accomodation.php">VIEW ALL ACCOMODATION</a>
                   </div>
                   <hr width="280" class="hr-line"/>
                   <div class="book-now">
                        <a href="login.php">BOOK NOW</a>               					
                   </div>                  
                </div>
                 <!-- END-ASIDE-RIGHT-TOP-->                
                <!-- START-ASIDE-RIGHT-BOTTOM-->
                <div class="aside-right-bottom">
                	<h3>SOCIAL LINKS</h3>
                    <hr/>
                    <!-- START-SOCIAL-LINKS-->
                    <div class="social-link">
                        <a href="https://www.facebook.com/" class="fb"></a>
                        <a href="https://twitter.com/" class="twitter"></a>
                        <a href="https://plus.google.com/" class="google"></a>
                        <a href="https://www.youtube.com/" class="yt"></a>
                    </div>
                    <!-- END-SOCIAL-LINKS-->
                </div>
                <!-- END-ASIDE-RIGHT-BOTTOM-->
            </div>
            <!-- END-ASIDE-RIGHT-->
            <div class="clearfix"></div>
        </div>
        <!-- END-SECTION-PAGE-->
    </div>
</section>
<!-- END-SECTION-->
<?php
	include('end_footer.php');
?>