<div class="boxed">
  							<div class="boxinner">								
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
										<div  class="button">
                                 
                                             <a href="<?php echo site_url('account/viewpost'); ?>" class="back">Back</a>
                                              <button type="submit"  class="continue">Continue</button>
<!--                                         <a href="<?php echo site_url('account/campany'); ?>" class="continue">Continue</a>-->
                                            
										</div>
									</form>
    </div>
</div>