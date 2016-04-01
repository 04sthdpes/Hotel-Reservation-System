<?php
ob_start();
session_start();
	include('user_header.php');	
$userId=$_SESSION['userId'];
?>
<section>
	<div class="section-page">
		<div class="wrapper">
            <div class="aside-left" style="margin-left: 200px;float:none;padding-bottom:50px;">
                <!-- START-ABOUT-US-->
                <div class="about-us">
                    <h2 style="font-family:Verdana, Geneva, sans-serif; font-style:normal;text-align:center;">THANK YOU FOR YOUR RESERVATION</h2>  
                    <h2 style="font-family:Verdana, Geneva, sans-serif; font-style:normal;text-align:center;">Reservation Schedule</h2>  
                </div>       
                    <table id="mytable">
                            <tr>
                                <td id="label">Check in time</td>   
                                <td id="label">Check out time</td> 
                                <td id="label">Room Type</td> 
                                <td id="label">No. of rooms</td> 
                                <td id="label">Action</td>                          
                            </tr> 
                            <?php    
                                $qry=mysql_query("SELECT * FROM `roominventory` WHERE userId='$userId'");
                                while($data=mysql_fetch_array($qry)){
                             
                            ?>
                            <tr>
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
                                <td><?php echo $data['qty_reserve']; ?></td>
                                <td><?php echo '<a href=cancel.php?id=' . $data["roominventoryId"] . '>' . 'Cancel' . '</a>'; ?></td>
                            </tr>   
                            <?php 
                        }
                            ?>
                    </table>
        	</div>	
		</div>
	</div>
</section>
<?php
    include('footer.php');
    ob_end_flush();
?>