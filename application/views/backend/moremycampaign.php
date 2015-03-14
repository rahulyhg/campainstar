<div class="boxed">
    <div class="formbox w100">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">My Campaign</h1>

            <!--Searchbox-->
           
        </div>
        <ol class="breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <div id="page-content">



            </div>
            <div class="panel">
                <div class="panel-body">

              <div class="content1">
                  <span class="bold">Campaign created on:</span> 1-Mar-2015 <br>
                  <span class="bold">Team A:</span> Select Your Team <br>
                  <span class="bold">Team B:</span> Jim &amp; Jack
              </div>
              
               <a id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-edit" href="<?php echo site_url("site/editcampaignbyuser?id=").$campaignid;?>">Edit Campaign Brief</a>
               &nbsp;
               <a href="<?php echo site_url("site/previewcampaign?id=").$campaignid;?>" id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-eye">Preview &amp; Approve</a>
               &nbsp;
               <a href="<?php echo site_url("site/resultsandanaltys?id=").$campaignid;?>" id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-bar-chart">Campaign Analysis</a>
               
                </div>
            </div>
    </div>


</div>
