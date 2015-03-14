<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div class="formbox w100">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">My Campaign</h1>

        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        <ol class="breadcrumb">
            <li><a href="#">Home</a>
            </li></ol>
            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">



            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add &amp; Remove Rows</h3>
                </div>

                <!-- Foo Table - Add & Remove Rows -->
                <!--===================================================-->
                <div class="panel-body">
                 <a href="http://localhost/campainstar/index.php/site/createcampaign" class="btn btn-purple btn-labeled fa fa-plus btn-campaign" style="margin-bottom: 20px !important;">New Campaign</a>
                   <table id="demo-foo-addrow" class="table table-bordered footable footable-loaded table-hover toggle-circle" data-filter="#filter" data-page-size="7">
								<thead>
									<tr>
										<th data-sort-initial="true" data-toggle="true">Campaign Name</th>
										<th>Opens</th>
										<th data-hide="phone, tablet">Clicks</th>
										<th data-hide="phone, tablet">Date</th>
										<th data-hide="phone, tablet">Status</th>
										<th data-hide="phone, tablet" style="width:50px;">Action</th>
									</tr>
								</thead>
								
								<tbody>
								<?php foreach($table as $row) {
                                    $row->reports=json_decode($row->reports);
                                    ?>
									<tr>
										<td><?php echo $row->Name; ?></td>
										<td><?php echo $row->reports[0]->value;?> </td>
										<td><?php echo $row->reports[1]->value;?> </td>
										<td><?php echo $row->startdate;?></td>
										<td><span class="label label-table label-success">Active</span></td>
										<td>
										<a href="<?php echo site_url("site/moremycampaign?id=").$row->id;?>" class="btn btn-primary">View</a>
<!--										<a href="<?php echo site_url("site/deletecampaignbyuser?id=").$row->id;?>" class="btn btn-danger">Delete</a></td>-->
									</tr>
									<?php } ?>
									
								</tbody>
								<tfoot>
									<tr>
										<td colspan="6">
											<div class="text-right">
												<ul class="pagination"></ul>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>

                </div>
                <!--===================================================-->
                <!-- End Foo Table - Add & Remove Rows -->

            </div>



    </div>
    <!--===================================================-->
    <!--End page content-->


</div>


<script>
    $(window).on('load', function() {

        $('#demo-foo-row-toggler').footable();

        var fooColExp = $('#demo-foo-col-exp');
        fooColExp.footable().trigger('footable_expand_first_row');


        $('#demo-foo-collapse').on('click', function() {
            fooColExp.trigger('footable_collapse_all');
        });
        $('#demo-foo-expand').on('click', function() {
            fooColExp.trigger('footable_expand_all');
        })

        $('#demo-foo-accordion').footable().on('footable_row_expanded', function(e) {
            $('#demo-foo-accordion tbody tr.footable-detail-show').not(e.row).each(function() {
                $('#demo-foo-accordion').data('footable').toggleDetail(this);
            });
        });

        $('#demo-foo-pagination').footable();
        $('#demo-show-entries').change(function(e) {
            e.preventDefault();
            var pageSize = $(this).val();
            $('#demo-foo-pagination').data('page-size', pageSize);
            $('#demo-foo-pagination').trigger('footable_initialized');
        });

        
        var filtering = $('#demo-foo-filtering');
        filtering.footable().on('footable_filtering', function(e) {
            var selected = $('#demo-foo-filter-status').find(':selected').val();
            e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
            e.clear = !e.filter;
        });

        // Filter status
        $('#demo-foo-filter-status').change(function(e) {
            e.preventDefault();
            filtering.trigger('footable_filter', {
                filter: $(this).val()
            });
        });

        // Search input
        $('#demo-foo-search').on('input', function(e) {
            e.preventDefault();
            filtering.trigger('footable_filter', {
                filter: $(this).val()
            });
        });
        
        var addrow = $('#demo-foo-addrow');
        addrow.footable().on('click', '.demo-delete-row', function() {

            //get the footable object
            var footable = addrow.data('footable');

            //get the row we are wanting to delete
            var row = $(this).parents('tr:first');

            //delete the row
            footable.removeRow(row);
        });

        // Search input
        $('#demo-input-search2').on('input', function(e) {
            e.preventDefault();
            addrow.trigger('footable_filter', {
                filter: $(this).val()
            });
        });

        // Add Row Button
        $('#demo-btn-addrow').click(function() {

            //get the footable object
            var footable = addrow.data('footable');

            //build up the row we are wanting to add
            var newRow = '<tr><td><button class="demo-delete-row btn btn-danger btn-xs btn-icon fa fa-times"></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">Active</span></td></tr>';

            //add it
            footable.appendRow(newRow);
        });
    });
</script>