<div class="boxed">
  							<div class="boxinner">
					<h3 class="started">Get Started</h3>
					           <p class="account">Account setup</p>
								<!-- Circular Form Wizard -->
								<!--===================================================-->
								<div id="demo-step-wz">
									<div class="menu">
					
										<!--Progress bar-->
<!--
										<div class="progress progress-xs">
											<div style="width: 15%;" class="progress-bar progress-bar-dark"></div>
										</div>
-->
					
										<!--Nav-->
										<div class="align">
                                           <div class="col-md-3">
										       <div class="circle circlecolor">
										          1
                                             </div>
                                               <div class="circletxt circletxtchange ">Accounts</div>
										    </div >
										                                               <div class="col-md-3">
										       <div class="circle circlecolorsame">
										          2
                                             </div>
                                                                                             <div class="circletxt circletxtsame">Campany</div>
										    </div >
                                           <div class="col-md-3">
										       <div class="circle circlecolorsame">
										          3
                                             </div>
                                                                                             <div class="circletxt circletxtsame">Setting</div>
										    </div >
                                           <div class="col-md-3">
										       <div class="circle circlecolorsame">
										          4
                                             </div>
                                                                                            <div class="circletxt circletxtsame">Billing</div>
										    </div >
										</div>
									</div>
					
									<!--Form-->
									<form class="form-horizontal bg" action="<?php echo site_url('account/campany');?>" method="post">
                                        <div class="formspac">
                                         <div class="form-group">
														<label class="col-lg-3 control-label txt">Full Name</label>
														<div class="col-lg-7">
															<input type="text" class="form-control txt" name="fullname" placeholder="Full Name">
														</div>
													</div>                                        
													 <div class="form-group">
														<label class="col-lg-3 control-label txt">Email Addresss</label>
														<div class="col-lg-7">
															<input type="text" class="form-control txt" name="emailaddresss" placeholder="Email Addresss">
														</div>
													</div>
                              													 <div class="form-group">
														<label class="col-lg-3 control-label txt">Choose Password</label>
														<div class="col-lg-7">
															<input type="password" class="form-control txt" name="choosepassword" placeholder="Choose
Password">
														</div>
													</div>
                              													 <div class="form-group">
														<label class="col-lg-3 control-label txt">Re Enter Password</label>
														<div class="col-lg-7">
															<input type="password" class="form-control txt" name="reenterpassword" placeholder="Re
Enter
Password">
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
								<!--===================================================-->
								<!-- End Circular Form Wizard -->
</div>

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

