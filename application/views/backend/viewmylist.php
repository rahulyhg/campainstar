<div class="boxed">
    <div class="boxinner all-white">
        <div class="col-sm-6 text-xs-center">
            <div class="form-group">
                <button id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-plus"><a href="<?php echo site_url('account/viewmylistupload'); ?>">Add New List</a></button>
            </div>
        </div>
        <div class="col-sm-6 text-xs-center text-right">
            <div class="form-group">
                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
            </div>
        </div>
        <div class="panel-body">
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