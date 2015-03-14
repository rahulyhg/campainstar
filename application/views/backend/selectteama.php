<div class="boxed">
  							<div class="boxinner">
					<h3 class="started">My Campaigns</h3>
<!--					           <p class="account">RED BULL NEWSLETTER>SELECT TEAM A</p>-->
					           <p class="account">SELECT TEAS</p>
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
                                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url("assets");?>/img/av4.png">
                                                    <h4 class="mar-no"><?php echo $row->name;?></h4>
                                                    <p class="text-muted mar-btm"></p>

                                                    <div class="pad-ver">
                                                       <?php 
                                                        if($row->status==1)
                                                        {
                                                        ?>
                                                    <a class="btn btn-primary"  href="<?php echo site_url('site/changecampaigngroupstatustoreject?campaigngroupid='.$row->id."&id=".$row->campaign); ?>">Desselect </a>
                                                    <?php 
                                                        }
                                                        else if($row->status==2)
                                                        {
                                                            ?>
                                                        <a class="btn btn-primary"  href="<?php echo site_url('site/changecampaigngroupstatustoactive?campaigngroupid='.$row->id."&id=".$row->campaign); ?>">Select </a>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                        <a class="btn btn-primary"  href="<?php echo site_url('site/changecampaigngroupstatustoactive?campaigngroupid='.$row->id."&id=".$row->campaign); ?>">Select </a>
                                                        <a class="btn btn-primary"  href="<?php echo site_url('site/changecampaigngroupstatustoreject?campaigngroupid='.$row->id."&id=".$row->campaign); ?>">Disselect </a>
                                                        <?php 
                                                        } 
                                                        ?>
<!--                                                        <button class="btn btn-primary">Select</button>-->
                                                        <button class="btn btn-success">View Profile</button>
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

