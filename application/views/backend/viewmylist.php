<div class="boxed">
    <div class="formbox w100 all-white">
          <div id="page-title">
					<h1 class="page-header text-overflow">My Campaigns</h1>

				
<ol class="breadcrumb">
    <li><a href="#">Select List</a></li></ol>
        <div class="panel-body">
          <a href="<?php echo site_url('account/viewmylistupload'); ?>" id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-plus">Add New List</a>
           <div class="padding"></div>
            <table id="demo-foo-row-toggler" class="table toggle-circle">
                <thead>
                    <tr>
                        <th data-toggle="true">Name</th>
                        <th>timestamp</th>
                        <th data-hide="all">File</th>
                        <th data-hide="all">Delete</th>
                       
                    </tr>
                </thead>
                <tbody>
              
                   <?php foreach($list as $listrow) {?>
                    <tr>
                        <td><?php echo $listrow ->name;?></td>
                        <td><?php echo $listrow ->timestamp;?></td>
                         <td>   <a class="btn btn-default" target="_blank"  href="<?php echo base_url('uploads/')."/".$listrow->filename  ?>"><i class="icon-upload"></i>Download</a> 
<!--                          <?php echo $listrow ->filename?></td>-->
                         
                        <td>
                            <a class="label label-table label-success" href="<?php echo site_url('account/deletelist?id=').$listrow ->id ?>"> Delete   </a>
                        </td>
                        </td>
                    </tr>
             <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>