<div class="boxed">
    <div class="formbox w100">
        <div id="page-title">
        <h1 class="page-header text-overflow">My Campaigns</h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="#">PREVIEW AND APPROVE</a>
            </li>
            <li><a href="">RED BULL NEWSLETTER</a></li>
        </ol>
        
        <div class="row">
           <?php
print_r($table);
            foreach($table as $row)
            {
            ?>
            <div class="col-md-6">
                <div class="panel">

                    <!--Panel heading-->
                    <div class="panel-heading">
                        <div class="panel-control">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#demo-tabs-box-1" data-toggle="tab">Preview</a>
                                </li>
                                <li><a href="#demo-tabs-box-2" data-toggle="tab">HTML</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="panel-title panel-title2"><?php echo $row->groupname;?></h3>
                    </div>

                    <!--Panel body-->
                    <div class="panel-body">
                        <div class="tab-content">
                           
                            <div class="tab-pane fade in active text-center" id="demo-tabs-box-1">
                                <img src="<?php echo base_url('uploads/').$row->image;?>" height="100%" width="100%">
                            </div>
                            <div class="tab-pane fade" id="demo-tabs-box-2">
                                <img src="<?php echo base_url('uploads/').$row->mobileimage;?>" height="100%" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="campaignteambtn">

                    <a href="#" class="btn btn-default">Give Feedback</a>
                    <a href="#" class="btn btn-primary">Approve</a>

                </div>
                <div class="clearfix"></div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="padding"></div>
    </div>
</div>