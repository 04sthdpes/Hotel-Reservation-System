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
                	<h2 style="font-family:Verdana, Geneva, sans-serif; font-style:normal;text-align:center;">User Comment</h2>                </div>
                <!-- END-ABOUT-US-->
                <table id="mytable">
                    <tr>
                        <td id="label">Name</td>   
                        <td id="label">Email</td> 
                        <td id="label">Comment</td>                           
                    </tr> 
                    <?php    
                        $qry=mysql_query("SELECT * FROM `comment`");
                        while($data=mysql_fetch_array($qry)){
                     
                    ?>
                    <tr>
                        <td><?php echo $data['fullname']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['comment']; ?></td>
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