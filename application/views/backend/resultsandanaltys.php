<div class="boxed">
<div class="boxall">
                         
                         <?php 
    $test1=json_decode($table->tests[0]->reports);
    $test2=json_decode($table->tests[1]->reports);
 $result=json_decode($table->result->reports);

if($test1[0]->value < $test2[0]->value)
{
    $abc=$text2;
    $test2=$test1;
    $test1=$abc;
}



    ?>
                         
								<!-- Circular Form Wizard -->
								<!--===================================================-->
								<div id="demo-step-wz">
									  <div class="row">
                          <div class="col-md-10">
					          <h3 class="started">Reports and analtys</h3>
					           <p class="account">Home</p>
					           <select name="" id="" class="allcampaigns">
					              <?php foreach($campaigns as $campaign) { ?>
					               <option value="<?php echo $campaign->campaignid;?>"><?php echo $campaign->Name;?></option>
					               <?php } ?>
					           </select>
<p class="Results">Final Campaign Results</p>
					           </div>
<!--
					           <div class="col-md-2 dwreports">
					               <button class="reports"><span><img src="<?php echo base_url("assets");?>/bg-img/report.png" alt=""></span>Download</button>
					           </div>
-->
					           </div>
					                  	<div class="row">
									    <div class="col-md-3 text-center">
								<div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Opened</p>
									<p class="h2 text-thin"><?php echo $result[0]->value;?></p>
									<hr >
									<h4><?php echo $result[4]->value;?>%</h4>
								</div>
							</div>

									    </div>
									    <div class="col-md-3">
									       <div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Clicked</p>
									<p class="h2 text-thin"><?php echo $result[1]->value;?></p>
									<hr>
									<h4><?php echo $result[5]->value;?>%</h4>
								</div>
							</div>
							</div>
									       
									    </div>
									    									    <div class="col-md-3">
									       <div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Bounced</p>
									<p class="h2 text-thin"><?php echo $result[2]->value;?></p>
									<hr>
									<h4><?php echo $result[6]->value;?>%</h4>
								</div>
							</div>
							</div>
									       
									    </div>
									    
									        									    <div class="col-md-3">
									       <div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel panel-danger panel-colorful bluetxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Unsubscribed</p>
									<p class="h2 text-thin"><?php echo $result[3]->value;?></p>
									<hr>
									<h4><?php echo $result[7]->value;?>%</h4>
								</div>
							</div>
							</div>
									       
									    </div>
									
                        
									</div>
									    <p class="txtalign">Team A Results (winner)</p>
				<div class="row">

				           <div class="col-md-3">
								<div class="panel panel-danger panel-colorful yellowtxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Opened</p>
									<p class="h2 text-thin"><?php echo $test1[0]->value;?></p>
									<hr>
									<h4><?php echo $test1[4]->value;?>%</h4>
								</div> 
									</div>

								</div>
								  <div class="col-md-3">
								<div class="panel panel-danger panel-colorful yellowtxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Clicked</p>
									<p class="h2 text-thin"><?php echo $test1[1]->value;?></p>
									<hr>
									<h4><?php echo $test1[5]->value;?>%</h4>
								</div> 
									</div>

								</div>
								  <div class="col-md-3">
								<div class="panel panel-danger panel-colorful yellowtxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Bounced</p>
									<p class="h2 text-thin"><?php echo $test1[2]->value;?></p>
									<hr>
									<h4><?php echo $test1[6]->value;?>%</h4>
								</div> 
									</div>

								</div>
								<div class="col-md-3">
								<div class="panel panel-danger panel-colorful yellowtxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Unsubscribed</p>
									<p class="h2 text-thin"><?php echo $test1[3]->value;?></p>
									<hr>
									<h4><?php echo $test1[7]->value;?>%</h4>
								</div> 
									</div>

								</div>
									       
									    </div>
								<!--===================================================-->
								<!-- End Circular Form Wizard -->
</div>
   <p class=" txtalign">Team A Results (winner)</p>
<div class="row">
  <div class="col-md-3">
        <div class="panel panel-danger panel-colorful pinktxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Opened</p>
									<p class="h2 text-thin"><?php echo $test2[0]->value;?></p>
									<hr>
									<h4><?php echo $test1[4]->value;?>%</h4>
								</div> 
									</div>
  </div>
  <div class="col-md-3">
        <div class="panel panel-danger panel-colorful pinktxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Clicked</p>
									<p class="h2 text-thin"><?php echo $test1[1]->value;?></p>
									<hr>
									<h4><?php echo $test1[5]->value;?>%</h4>
								</div> 
									</div>
  </div>
  <div class="col-md-3">
        <div class="panel panel-danger panel-colorful pinktxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Bounced</p>
									<p class="h2 text-thin"><?php echo $test1[2]->value;?></p>
									<hr>
									<h4><?php echo $test1[6]->value;?>%</h4>
								</div> 
									</div>
  </div>
  <div class="col-md-3">
        <div class="panel panel-danger panel-colorful pinktxt">
								<div class="panel-body text-center ">
									<p class="text-uppercase mar-btm text-sm">Unsubscribed</p>
									<p class="h2 text-thin"><?php echo $test1[3]->value;?></p>
									<hr>
									<h4><?php echo $test1[7]->value;?>%</h4>
								</div> 
									</div>
  </div>
  
</div>

</div>

<script>
$(document).ready(function() {
    console.log(<?php echo $campaignid;?>);
    $(".allcampaigns").val(<?php echo $campaignid;?>);
    
    
    $(".allcampaigns").change(function() {
        var myval=$(this).val();
        window.location.href="<?php echo site_url("site/resultsandanaltys?id=");?>"+myval;
    });
});
    
    
    </script>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

