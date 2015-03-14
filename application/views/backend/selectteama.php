<div class="boxed">
  							<div class="formbox w100">
					           
					           <div id="page-title">
					<h1 class="page-header text-overflow">My Campaigns</h1>

				
<ol class="breadcrumb">
    <li><a href="#">Select Teams</a></li></ol>
								<!-- Circular Form Wizard -->
								<!--===================================================-->
								<div id="demo-step-wz">
									
									<div class="row">
                                    <?php
                                    foreach($table as $row)
                                    {
                                        ?>
									    <div class="col-md-3">
									        <div class="panel widget">
                                                <div class="widget-header bg-primary1"></div>
                                                <div class="widget-body text-center">
                                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url("assets");?>/img/av1.png">
                                                    <h4 class="mar-no"><?php echo $row->name;?></h4>
                                                    <p class="text-muted mar-btm"></p>

                                                    <div class="pad-ver">
                                                      <a class="btn btn-primary"  href="<?php echo site_url('site/changecampaigngroupstatustoactive?campaigngroupid='.$row->id."&id=".$campaignid); ?>">Select </a>

                                                    </div>
                                                </div>
                                            </div>
									    </div>
									    <?php
                                    }
                                        ?>
									</div>
									
					
									
								</div>
								<!--===================================================-->
								<!-- End Circular Form Wizard -->
</div>

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

