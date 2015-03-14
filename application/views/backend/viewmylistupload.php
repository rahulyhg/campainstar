<div class="boxed">
  							<div class="formbox w100">	
                                      	    
					           <div id="page-title">
					<h1 class="page-header text-overflow">Create New List</h1>

				
<ol class="breadcrumb">
    <li><a href="#">New List</a></li></ol>
                                      															
                                       	<form class="form-horizontal bg" action="<?php echo site_url('account/viewmylistuploadsubmit');?>" method="post" enctype= "multipart/form-data">
                                        <div class="formspac">
                                         <div class="form-group">
														<label class="col-lg-3 control-label txt"> Name</label>
														<div class="col-lg-7">
															<input type="text" class="form-control txt" name="name" placeholder="Full Name">
														</div>
													</div>                                        
																<div class=" form-group">
				  <label class="col-lg-3 control-label txt" for="normal-field">User CSV File</label>
				  <div class="col-lg-7">
					<input type="file" id="normal-field" class="form-control" name="file">
				  </div>
				</div>
               </div>
										<!--Footer button-->
										<div  class="button padding">
                                 
                                             <a href="<?php echo site_url('account/viewpost'); ?>" class="btn btn-default">Back</a>
                                              <button type="submit"  class="btn btn-primary">Continue</button>
<!--                                         <a href="<?php echo site_url('account/campany'); ?>" class="continue">Continue</a>-->
                                            
										</div>
									</form>
    </div>
</div>