<?php
ob_start();
session_start();
include('header.php');
?>
<section>
	<!-- START-SECTION-PAGE-->
	<div class="section-page">
    	<div class="wrapper">
        	<!-- START-ASIDE-LEFT-->
        	<div class="aside-left" style="margin-left: 200px;float:none;padding-bottom:50px;">
               	<!-- START-ABOUT-US-->
                <div class="about-us">
                	<h2 style="font-family:Verdana, Geneva, sans-serif; font-style:normal;text-align:center;">Monitor Reservation</h2>                </div>
                <!-- END-ABOUT-US-->
                <table id="mytable">
                    <tr>
                        <td id="label">Name</td>                           
                        <td id="label">Arrival</td> 
                        <td id="label">Departure</td> 
                        <td id="label">Room Type</td> 
                        <td id="label">Contact</td> 
                        <td id="label">Action</td>                        
                    </tr> 
                    <?php    
                        $qry=mysql_query("SELECT * FROM `roominventory`");
                        while($data=mysql_fetch_array($qry)){
                     
                    ?>
                    <tr>
                        <td>
                            <?php
                                $userId=$data['userId'];
                                $qry_user=mysql_query("SELECT * FROM `user` WHERE userId='$userId'");
                                while($data_user=mysql_fetch_array($qry_user)){
                                    echo $data_user['name'];
                                }
                            ?>
                        </td>
                        <td><?php echo $data['arrival']; ?></td>
                        <td><?php echo $data['departure']; ?></td>
                        <td>
                            <?php 
                                $roomId=$data['roomId']; 
                                $qry_room=mysql_query("SELECT * FROM `room` WHERE roomId='$roomId'");
                                while($data1=mysql_fetch_array($qry_room)){
                                    echo $data1['type'];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                $userId=$data['userId'];
                                $qry_user=mysql_query("SELECT * FROM `user` WHERE userId='$userId'");
                                while($data_user=mysql_fetch_array($qry_user)){
                                    echo $data_user['phone'];
                                }
                            ?>
                        </td>
                        <td><?php echo '<a href=out.php?id=' . $data["userId"] . '>' . 'Check Out' . '</a>'; ?></td>
                    </tr>   
                    <?php 
                        }
                            ?>
                    </table>
                
            </div>
            <!-- END-ASIDE-LEFT-->    
        </div>
        <!-- END-SECTION-PAGE-->
    </div>
</section>
<!-- END-SECTION-->
<?php
	include('../footer.php');
?>