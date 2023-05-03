<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Managed Accounts Finish</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script language="javascript" >
			
			
			
			function checkall(){
				
				var objForm = document.forms[0];
				len = objForm.elements.length;
				var i=0;
				for( i=0 ; i<len ; i++) {
					if (objForm.elements[i].type=='checkbox') {
						objForm.elements[i].checked=true;
					}
				}
			}
			
			
			function uncheckall(){
				
				var objForm = document.forms[0];
				len = objForm.elements.length;
				var i=0;
				for( i=0 ; i<len ; i++) {
					if (objForm.elements[i].type=='checkbox') {
						objForm.elements[i].checked=false;
					}
				}
			}
			
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// Javascript Function Check that atlease one Checkbox is checked to delete..If no then alert with (Nothing to Delete) and If yes then (Are you sure you want to Delete) and then return true / false........
			function confdel()
			{
				
				var fl = 0;
				for(i = 0; i < (document.form2.elements.length); i++)
				{
					
					if((document.form2.elements[i].type=="checkbox") && (document.form2.elements[i].checked==true))
					{
						fl = 1;
						break;
					}
				}
				if(fl == 1)
				{
					if(confirm("Are you sure you want to finalize?"))
					{
						fl = 1;
					}
					else
					{
						fl = 0;
					}
				}
				else
				{
					alert("Nothing to finalize.");
					fl = 0;
				}
				if(fl == 1)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		</script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/util.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/main.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/demo.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/component.css'); ?>" />
		
		<?php echo $this->include('includes/header_inner'); ?>
		<div class="col-lg-12 col-xs-12 col-md-12" style="padding: 0px;">
			<!-- Dashboard #start############################################################################## -->
			<div class="container-fluid display-table">
				<div class="row display-table-row">
					
					<div class="col-md-3 col-sm-2 hidden-xs display-table-cell v-align box" id="navigation">
						
						<div class="navi">
							
							<?php echo $this->include('includes/userleft'); ?>
							
						</div>
						
					</div>
					
					<div class="col-md-9 col-sm-10 display-table-cell v-align">
						
						<?php echo $this->include('includes/top'); ?>
						
						<div class="user-dashboard">
							
							<div class="col-lg-12 col-xs-12 padding_0px margin_top_panel">
								<?php
									if($error = session()->getFlashdata('collections'))
									{  ?>
									
                                    <div class="alert alert-danger alert-dismissable">
										
										<?php echo $error ?>
										
									</div>
									
								<?php  } ?>
								
								
								
								<!-- Table One #############################-->
								
								
								<div class="col-xs-12 col-md-12 padding_0px">
									
									<div class="panel panel-default">
										
										
										
										<div class="panel-heading panel_custom">
											
											<i class="fa fa-list"></i>Managed Accounts: All Submitted Records
											
										</div>
										
										<div class="panel-body hidden-xs hidden-sm">
											
											<?php if(count($client_records) > 0) {
												
												$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form2', 'id' => 'form2');
												echo form_open_multipart('precollections/bulk_action', $attributes); 
											?>   
											
											<table class="table table-responsive">
												
												<thead>
													
													<tr>
														<th><?php	//$js = 'onClick="checkall(this.form)"'; echo form_checkbox('check_all', '1', false, $js); ?>
															<a onClick="checkall()" href="javascript:void(0)">Select all</a>/<a onClick="uncheckall()" href="javascript:void(0)">Unselect all</a>
														</th>
														<th> Name </th>
														<th> Account </th>
														<th> Amount Due </th>
														<th> Address </th>
														<th> City </th>
														<th> State </th>
														<th> Zipcode </th>
														<th> Action </th>
														
													</tr>
													
												</thead>
												
												<tbody>
													
													<?php foreach($client_records as $cval) { ?>  
														
														<tr>
															
															<td><input name="id[]" checked type="checkbox" value="<?php echo $cval['id']; ?>"></td>
															<td> <?php echo $cval['fname']; ?>  <?php echo $cval['lname']; ?> </td>
															<td> <?php echo $cval['acctno']; ?></td>
															<td> $ <?php echo $cval['amountdue']; ?> </td>
															<td> <?php echo $cval['address']; ?></td>
															<td> <?php echo $cval['city']; ?></td>
															<td> <?php echo $cval['st']; ?></td>
															<td> <?php echo $cval['zip']; ?></td>
															
															<td>
																
																<a title="Edit"  class="bt btn-info btn-sm" href="<?php echo base_url() ?>precollections/edit/<?php echo $cval['id']; ?>"><i class="fa fa-pencil"></i></a>  &nbsp; 
																<a title="Delete" onClick="return confirm('Are you sure you want to delete?');" class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/delete/<?php echo $cval['id']; ?>"><i  class="fa fa-trash"></i></a>  &nbsp; 
																
																<!--  <a class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/save/<?php echo $cval['id']; ?>"><i title="Finalize this record " class="fa fa-save"></i></a> -->
																
															</td>
															
															
															
														</tr>
														
													<?php } ?>   
													
													
													
												</tbody>
												
												
												
											</table>
											
											
											
											<?php 
												
												
												} else { 
												
											?>  
											
											<table style="text-align:center;" class="table">
												
												<tr>
													<th> <center>No records to send to Centron.</center></th>
												</tr>
												
											</table>  
											
											<?php } ?>
											
											<hr>
											
											<div class="form-group col-lg-12 col-xs-12">
												
												<div class="form-group col-lg-2 col-xs-12">
													<button class="btn btn-primary"> <i class="fa fa-save"></i> Finalize records </button>
												</div>
												
												
												
												<?php   echo form_close();  ?>
												
												<div class="form-group col-lg-2 col-xs-12">
													<a href="<?php echo base_url('precollections'); ?>"><button type="button" class="btn btn-primary"> <i class="fa fa-save"></i> Enter another record  </button></a>
												</div>
												
											</div>   
											
											<div class="form-group col-lg-12 col-xs-12">
												<small>NOTE: To Finalize select a record(s) and click the Finalize button.</small>
											</div>   
											
										</div>
										
										
										<!--        Phone Show --------------------------------------------------- -->
										
										<div class="panel-body hidden-lg hidden-md">
											
											<?php if(count($client_records) > 0) { ?>   
												
												<table class="table table-responsive">
													
													
													
													<tbody>
														
														<?php foreach($client_records as $cval) { ?>  
															
															
															
															<tr>
																
																<td> Name : </td> <td> <?php echo $cval['fname']; ?>  <?php echo $cval['lname']; ?> </td>
																
																
																
															</tr>
															
															<tr>
																<td>  Account : </td> <td> <?php echo $cval['acctno']; ?>  </td>
															</tr>
															
															<tr>
																
																<td> Amount Due : </td>  <td> $ <?php echo $cval['amountdue']; ?> </td>
																
															</tr>
															
															<tr>
																
																<td>
																	Action : 
																</td>
																
																<td nowrap>   
																	
																	<a class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/save/<?php echo $cval['id']; ?>"><i title="Finalize this record " class="fa fa-save"></i></a> 
																	
																</td>
																
															</tr>
															
															<tr>
																<td style="border-left:1px solid #fff;">   </td> <td style="border-right:1px solid #fff;">   </td>
															</tr>
															
														<?php } ?>   
														
														
														
														
													</tbody>
													
													
													
												</table>
												
												<hr>
												
												
												<div class="form-group col-lg-2 col-xs-12">
													<a href="<?php echo base_url('precollections'); ?>"><button class="btn btn-primary"> <i class="fa fa-save"></i> Enter another record  </button></a>
												</div>
												
												
												
												<?php } else { ?>  
												
												<table style="text-align:center;" class="table">
													
													
													
													<tr>
														
														<th> <center>
															No records to send.
														</center></th>
														
														
														
													</tr>
													
													
													
												</table>  
												
											<?php } ?>
											
											
											
										</div>
										
										
										<!--        Phone Show End --------------------------------------------------- -->
										
									</div>
									
								</div>
								<!--econd Table ########################################################-->
								
							</div> 
							<!--  Table 1 #################################-->
						</div>
						
					</div>
					
				</div>
				
				
				
			</div>
			
			<!--  Dashboard #end ############################################################################## -->
			
		</div>
		
		<div class="col-xs-12 col-md-12" style="padding: 0px;">
			
			<?php echo $this->include('includes/footer'); ?>        
			
		</div>
		
		
		<script>
			
			
			
			$(document).ready(function(){
				
				$('[data-toggle="offcanvas"]').click(function(){
					
					$("#navigation").toggleClass("hidden-xs");
					
				});
				
			});
			
			
			
			
			
			
			
			new gnMenu( document.getElementById( 'gn-menu' ) );
			
			
			
			$(document).ready(function(){
				
				$('#s-icons').click(function() {
					
					$('.navbar-nav').toggleClass("show");
					
				});
				
			});
			
			
			
			
			
		</script>
		
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
		
		
		
	</body>
	
</html>