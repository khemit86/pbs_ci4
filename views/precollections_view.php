<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Managed Accounts Add/View</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script language="JavaScript">
			// .................. Function to Select / DeSelect all the CheckBoxes ........
			// .................. Function to Select / DeSelect all the CheckBoxes ........
			function checkall(){
				
				var objForm = document.forms[1];
				len = objForm.elements.length;
				var i=0;
				for( i=0 ; i<len ; i++) {
					if (objForm.elements[i].type=='checkbox') {
						objForm.elements[i].checked=true;
					}
				}
			}
			
			
			function uncheckall(){
				
				var objForm = document.forms[1];
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
		
		<script>
			$(function() {
				
				$("#datepickerdob").datepicker(
				{
					
					dateFormat: 'mm/dd/yy', 
					
					changeMonth: true,
					
					changeYear: true,
					
					maxDate: "+12M",
					
					numberOfMonths: 1,
					
					yearRange: '-90:+1',
					
				}
				
				);
				
			});
			
			
			
			$(function() {
				
				$( "#datepicker1").datepicker(
				
				{
					
					dateFormat: 'mm/dd/yy', 
					
					changeMonth: true,
					
					changeYear: true,
					
					maxDate: "+12M",
					
					numberOfMonths: 1,
					
					yearRange: '-90:+1',
					
				}
				
				);
				
			});
			
			
			
			$(function() {
				
				$( "#datepicker2").datepicker(
				
				{
					
					dateFormat: 'mm/dd/yy', 
					
					changeMonth: true,
					
					changeYear: true,
					
					maxDate: "+12M",
					
					numberOfMonths: 1,
					
					yearRange: '-90:+1',
					
				}
				
				);
				
			});
			
			
			
			$(function() {
				
				$( "#datepicker3").datepicker(
				
				{
					
					dateFormat: 'mm/dd/yy', 
					
					changeMonth: true,
					
					changeYear: true,
					
					//maxDate: "+12M",
					
					numberOfMonths: 1,
					
					yearRange: '-10:+10',
					
				}
				
				);
				
			});
			
			
			
			$(function() {
				
				$( "#dls").datepicker(
				
				{
					
					dateFormat: 'mm/dd/yy', 
					
					changeMonth: true,
					
					changeYear: true,
					
					// maxDate: "+12M",
					
					numberOfMonths: 1,
					
					yearRange: '-10:+10',
					
				}
				
				);
				
			});
			
			
			
		</script>
		
		
		
		<!-- ************************************party ssn**************************************** -->
		
		<script language="JavaScript">
			
			function party_ssn()
			
			{
				
				
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.ssn.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<6)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,5)
					
					document.form1.ssn.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,5)
						
						ssc=socnum.slice(5,9)
						
						document.form1.ssn.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{document.form1.ssn.value=socnum}
					
				}
				
			}
			
		</script>
		
		<!-- ************************************Patient_ssn ssn**************************************** -->
		
		<script language="JavaScript">
			
			function Patient_ssn()
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.Patientssn.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<6)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,5)
					
					document.form1.Patientssn.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,5)
						
						ssc=socnum.slice(5,9)
						
						document.form1.Patientssn.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{document.form1.Patientssn.value=socnum}
					
				}
				
			}
			
		</script>
		
		
		
		<!-- ************************************spouse_ssn ssn**************************************** -->
		
		
		
		<script language="JavaScript">
			
			function spouse_ssn() 
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.spousessn.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<6)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,5)
					
					document.form1.spousessn.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,5)
						
						ssc=socnum.slice(5,9)
						
						document.form1.spousessn.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{document.form1.spousessn.value=socnum}
					
				}
				
			}
			
		</script>
		
		
		
		<!-- ********************************************************  Responsible Party Home Phone  ********************************************************** -->
		
		<script language="JavaScript">
			
			function ResponsibleHome()
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.homephone.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<7)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,6)
					
					document.form1.homephone.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,6)
						
						ssc=socnum.slice(6,10)
						
						document.form1.homephone.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{
						
					document.form1.homephone.value=socnum}
					
				}
				
			}
			
		</script>
		
		
		
		<!-- ********************************************************  Responsible Party Work Phone  ********************************************************** -->
		
		<script language="JavaScript">
			
			function workphone_1()
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.workphone.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<7)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,6)
					
					document.form1.workphone.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,6)
						
						ssc=socnum.slice(6,10)
						
						document.form1.workphone.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{
						
					document.form1.workphone.value=socnum}
					
				}
				
			}
			
		</script>
		
		
		
		<!-- ********************************************************  Responsible Party Cell Phone  ********************************************************** -->
		
		<script language="JavaScript">
			
			function cellphone_1()
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.cellphone.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<7)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,6)
					
					document.form1.cellphone.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,6)
						
						ssc=socnum.slice(6,10)
						
						document.form1.cellphone.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{
						
					document.form1.cellphone.value=socnum}
					
				}
				
			}
			
		</script>
		
		<!-- ******************************************************** Spouse Work Phone  ********************************************************** -->
		
		<script language="JavaScript">
			
			function spouseworkphone_1()
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.spouseworkphone.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<7)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,6)
					
					document.form1.spouseworkphone.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,6)
						
						ssc=socnum.slice(6,10)
						
						document.form1.spouseworkphone.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{
						
					document.form1.spouseworkphone.value=socnum}
					
				}
				
			}
			
		</script>
		
		
		
		<!-- *************************************** Spouse Alternate and/or Cell Phone ********************************************************** -->
		
		
		
		<script language="JavaScript">
			
			function spousecellphone_1()
			
			{
				
				re = /\D/g; // remove any characters that are not numbers
				
				socnum=document.form1.spousecellphone.value.replace(re,"")
				
				sslen=socnum.length
				
				if(sslen>3&&sslen<7)
				
				{
					
					ssa=socnum.slice(0,3)
					
					ssb=socnum.slice(3,6)
					
					document.form1.spousecellphone.value=ssa+"-"+ssb 
					
				}
				
				else
				
				{
					
					if(sslen>5)
					
					{
						
						ssa=socnum.slice(0,3)
						
						ssb=socnum.slice(3,6)
						
						ssc=socnum.slice(6,10)
						
						document.form1.spousecellphone.value=ssa+"-"+ssb+"-"+ssc
						
					}
					
					else
					
					{
						
					document.form1.spousecellphone.value=socnum}
					
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
								
								
								
								<div class="panel panel-default">
									
									
									
									<div class="panel-heading panel_custom"> <i class="fa fa-medkit"></i> Managed Accounts Form: Add A Record </div>
									
									
									
									<div class="panel-body">
										
										
										
										
										
										<?php
											
											if($error = session()->getFlashdata('collections'))
											
											{  ?>
											
											<div class="alert alert-danger alert-dismissable">
												
												<?php echo $error ?>
												
											</div>
											
										<?php  } ?>
										
										
										
										<?php   // ------------------------------  form open ---------------------------------
											
											$attributes = array('class'=>'form-group','name'=>'form1', 'id' => 'form1');
											
											
											echo form_open_multipart(base_url('precollections/action'), $attributes);
											$validation = \Config\Services::validation();
											
										?>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Responsible Party  First Name <span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="First name of the person (Patient) being sent to PBS.."><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('fname'); ?></span>
											
											<?php
												
												$data = array('name'  => 'fname', 'id' => 'fname', 'class'=>"form-control",  'value'=>set_value('fname'),  'maxlength' => '200','placeholder'=>'First name of the person (Patient) being sent to PBS.');
												
												echo form_input($data);
												
											?>
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>Responsible Party Last Name<span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="
													Last name of the person (Patient) being sent to PBS.
												"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('lname'); ?></span>
											
											<?php
												
												$data = array('name'  => 'lname', 'id' => 'lname', 'class'=>"form-control",  'value'=>set_value('lname'),  'maxlength' => '200','placeholder'=>'Last name of the person (Patient) being sent to PBS.');
												
												echo form_input($data);
												
											?>
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Responsible Party Account#   </label> 
											
											<?php
												
												$data = array('name'  => 'acctno', 'id' => 'acctno', 'class'=>"form-control",  'value'=>set_value('acctno'),  'maxlength' => '100','placeholder'=>'');
												
												echo form_input($data);
												
											?>
											
											<small>This is an account # which you may have assigned and use internally for this
												
											person.&nbsp; It is only supplied for informational purposes.</small>
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Responsible Party Address <span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party Address"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('address'); ?></span>
											
											<?php
												
												$data = array('name'  => 'address', 'id' => 'address', 'class'=>"form-control", 'rows'=>'3', 'value'=>set_value('address'), 'placeholder'=>'');
												
												echo form_textarea($data);
												
											?>
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12"> 
											
											<label> Responsible Party City <span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party City"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('city'); ?></span>
											
											<?php
												
												$data = array('name'  => 'city', 'id' => 'city', 'class'=>"form-control",  'value'=>set_value('city'),  'maxlength' => '200','placeholder'=>'');
												
												echo form_input($data);
												
											?>  
											
										</div>
										
										
										
										
										
										
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Responsible Party State  <span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party State"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('st'); ?></span>
											
											
											
											<?php 
												
												$options[] ='Select State';
												
												foreach($state as $st_val)
												
												{
													
													$options[$st_val['code']] =$st_val['name'];
													
												}
												
												
												
												$selected=set_value('st');
												
												echo form_dropdown('st',  $options, $selected, 'class="form-control"');
												
											?>
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Responsible Party ZIP <span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party ZIP"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('zip'); ?></span>
											
											<?php
												
												$data = array('name'  => 'zip', 'id' => 'zip', 'class'=>"form-control",  'value'=>set_value('zip'),  'maxlength' => '30','placeholder'=>'');
												
												echo form_input($data);
												
											?>  
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>Responsible Party Place of Employment 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party Place of Employment"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<?php
												
												$data = array('name'  => 'employment', 'id' => 'employment', 'class'=>"form-control",  'value'=>set_value('employment'),  'maxlength' => '255','placeholder'=>'');
												
												echo form_input($data);
												
											?>  
											
										</div>
										
										
										
										
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>   Responsible Party Home Phone 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="(xxx) xxx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>   
												
											</label>
											
											<?php
												
												$data = array('name'  => 'homephone', 'id' => 'homephone', 'class'=>"form-control",'onKeyPress'=>'ResponsibleHome()',  'value'=>set_value('homephone'),  'maxlength' => '50','placeholder'=>'(xxx) xxx-xxxx'); 
												
												echo form_input($data);
												
											?>  
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>  Responsible Party Work Phone
												
												<span> <a data-toggle="tooltip" data-placement="top" title="(xxx) xxx-xxxx"><i class="fa fa-question-circle"></i> </a> </span> 
												
											</label>
											
											<?php
												
												$data = array('name'  => 'workphone', 'id' => 'workphone', 'class'=>"form-control", 'onKeyPress'=>'workphone_1()',  'value'=>set_value('workphone'),  'maxlength' => '60','placeholder'=>'(xxx) xxx-xxxx'); 
												
												echo form_input($data);
												
											?>  
											
										</div>
										
										
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>   Responsible Party Cell Phone
												
												<span> <a data-toggle="tooltip" data-placement="top" title="(xxx) xxx-xxxx"><i class="fa fa-question-circle"></i> </a> </span> 
												
											</label>
											
											
											
											<?php
												
												$data = array('name'  => 'cellphone', 'id' => 'cellphone', 'class'=>"form-control",'onKeyPress'=>'cellphone_1()' , 'value'=>set_value('cellphone'),  'maxlength' => '60','placeholder'=>'(xxx) xxx-xxxx'); 
												
												echo form_input($data);
												
											?>  
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Responsible Party Date of Birth </label>
											
											
											
											<?php
												
												$data = array('name'  => 'dob', 'id' => 'datepickerdob', 'class'=>"form-control",  'value'=>set_value('dob'),  'maxlength' => '60','placeholder'=>''); 
												
												echo form_input($data);
												
											?>  
											
											
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>     Responsible Party SSN 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="
													xxx-xx-xxxx e.g. 123-45-6789
												"><i class="fa fa-question-circle"></i> </a> </span> 
												
											</label> 
											
											
											
											<?php
												
												$data = array('name'  => 'ssn', 'id' => 'ssn', 'class'=>"form-control",  'value'=>set_value('ssn'),'onKeyPress'=>'party_ssn()',  'maxlength' => '60','placeholder'=>'xxx-xx-xxxx'); 
												
												echo form_input($data);
												
											?>  
											
											
											
										</div>
										
										
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>     Amount Due  <span class="color_red">*</span>
												
												<span> <a data-toggle="tooltip" data-placement="top" title="(Numbers only. ie 122.03)"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('amountdue'); ?></span>
											
											
											
											<?php
												
												$data = array('name'  => 'amountdue', 'id' => 'amountdue', 'class'=>"form-control",  'value'=>set_value('amountdue'),  'maxlength' => '60','placeholder'=>'(Numbers only. ie 122.03)'); 
												
												echo form_input($data);
												
											?>  
											
											
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>Last Service Date <span class="color_red">*</span> 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="Last Service Date"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('dls'); ?></span>
											
											
											
											<?php
												
												$data = array('name'  => 'dls', 'id' => 'dls', 'class'=>"form-control",  'value'=>set_value('dls'),  'maxlength' => '60','placeholder'=>''); 
												
												echo form_input($data);
												
											?>  
											
											
											
										</div>
										
										
										
										
										
										
										
										<div class="form-group col-lg-16 col-xs-12">
											
											<label> Bad Address </label>
											
											<?php 
												
												$checked=set_value('badaddr');
												
												if($checked=='Y') 
												
												{                 
													
													$data = array('name'  => 'badaddr', 'id' => 'newsletter', 'checked'=> TRUE, 'value'=> 'Y');
													
												}
												
												else
												
												{
													
													$data = array('name'  => 'badaddr', 'id' => 'newsletter', 'value'=> 'Y');
													
												}  
												
												echo form_checkbox($data);
												
											?> Click this box for YES
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>  Patient First Name    </label>
											
											
											
											<?php
												
												$data = array('name'  => 'PatientFName', 'id' => 'PatientFName', 'class'=>"form-control",  'value'=>set_value('PatientFName'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>  
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>  Patient Last Name    </label>
											
											
											
											<?php
												
												$data = array('name'  => 'PatientLName', 'id' => 'PatientLName', 'class'=>"form-control",  'value'=>set_value('PatientLName'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>  
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>  Patient DOB   </label>
											
											
											
											<?php
												
												$data = array('name'  => 'Patientdob', 'id' => 'datepicker1', 'class'=>"form-control",  'value'=>set_value('Patientdob'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>  
											
											
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label>  Patient SSN#   
												<span> <a data-toggle="tooltip" data-placement="top" title="
													xxx-xx-xxxx e.g. 123-45-6789
												"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											
											
											
											
											<?php
												
												$data = array('name'  => 'Patientssn', 'id' => 'Patientssn', 'class'=>"form-control", 'onKeyPress'=>'Patient_ssn()',  'value'=>set_value('Patientssn'),  'maxlength' => '50','placeholder'=>'xxx-xx-xxxx '); 
												
												echo form_input($data);
												
											?>          
											
											
											
											
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse First Name   </label>
											
											
											
											<?php
												
												$data = array('name'  => 'spousefname', 'id' => 'spousefname', 'class'=>"form-control",  'value'=>set_value('spousefname'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>  
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse Last Name   </label>
											
											<?php
												
												$data = array('name'  => 'spouselname', 'id' => 'spouselname', 'class'=>"form-control",  'value'=>set_value('spouselname'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>       
											
											
											
											
											
											
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse Employment   </label>
											
											
											
											<?php
												
												$data = array('name'  => 'spouseemployment', 'id' => 'spouseemployment', 'class'=>"form-control",  'value'=>set_value('spouseemployment'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>       
											
											
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse Work Phone 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="
												xxx-xx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											
											
											
											
											<?php
												
												$data = array('name'  => 'spouseworkphone', 'id' => 'spouseworkphone', 'class'=>"form-control",'onKeyPress'=>'spouseworkphone_1()',  'value'=>set_value('spouseworkphone'),  'maxlength' => '255','placeholder'=>'(xxx) xxx-xxxx'); 
												
												echo form_input($data);
												
											?>      
											
											
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse Alternate and/or Cell Phone 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="
												xxx-xx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>
												
												
											</label>
											
											
											
											<?php
												
												$data = array('name'  => 'spousecellphone', 'id' => 'spousecellphone', 'class'=>"form-control", 'onKeyPress'=>'spousecellphone_1()', 'value'=>set_value('spousecellphone'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>      
											
											
											
										</div>
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse DOB  </label>
											
											
											
											<?php
												
												$data = array('name'  => 'Spousedob', 'id' => 'datepicker2', 'class'=>"form-control",  'value'=>set_value('Spousedob'),  'maxlength' => '255','placeholder'=>''); 
												
												echo form_input($data);
												
											?>        
											
											
											
											
											
										</div>
										
										
										
										
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Spouse SSN: 
												
												<span> <a data-toggle="tooltip" data-placement="top" title="
												xxx-xx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>
												
											</label>
											
											
											
											<?php
												
												$data = array('name'  => 'spousessn', 'id' => 'spousessn', 'class'=>"form-control",'onKeyPress'=>'spouse_ssn()'  , 'value'=>set_value('spousessn'),  'maxlength' => '20','placeholder'=>'xxx-xx-xxxx'); 
												
												echo form_input($data);
												
											?>        
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-6 col-xs-12">
											
											<label> Last Payment Date  </label>
											
											
											
											<?php
												
												$data = array('name'  => 'dlp', 'id' => 'datepicker3', 'class'=>"form-control",  'value'=>set_value('dlp'),  'maxlength' => '20','placeholder'=>''); 
												
												echo form_input($data);
												
											?>        
											
											
											
											
											
											
											
										</div>   
										
										
										
										
										
										
										
										
										
										
										
										
										
										<div class="form-group col-lg-12 col-xs-12">
											
											
											
											<label> More Info  </label>
											
											
											
											
											
											<?php
												
												$data = array('name'  => 'moreinfo', 'id' => 'datepicker3', 'class'=>"form-control",'rows'=>'3' , 'value'=>set_value('moreinfo'),  'placeholder'=>''); 
												
												echo form_textarea($data);
												
											?>        
											
											
											
											
											
											
											
											
											
										</div>
										
										
										
										<div class="form-group col-lg-12 col-xs-12">
											
											
											
											<button name="smt_enter" value="" class="btn btn-primary"> <i class="fa fa-save"></i> Submit Record </button>
											
											
											
										</div>
										
										
										
										<?php  
											
											// ------------------------------  form end ---------------------------------
											
											$currentdate=date('Y-m-d');
											
											$data = array('submit_date'  => $currentdate);
											
											echo form_hidden($data);
											
											$data = array('clientid'  => $cid);
											
											echo form_hidden($data);
											
											$data = array('straight_pre'  => 'P');
											
											echo form_hidden($data);
											
											$data = array('status'  => 0);
											
											echo form_hidden($data);
											
											$data = array('submit'  => 'N');
											
											echo form_hidden($data);
											
											
											
											
											
											echo form_close();
											
										?>
										
										
										
										
										
										
										
									</div>
									
									
									
								</div>
								
								
								<!-- Table One #############################-->
								
								
								<div class="col-xs-12 col-md-12 padding_0px">
									
									<div class="panel panel-default">
										
										
										
										<div class="panel-heading panel_custom">
											
											<i class="fa fa-list"></i> All Records waiting to be finalized:
											
										</div>
										
										<div class="panel-body hidden-xs hidden-sm">
											
											<?php if(count($client_records) > 0) { 
												
												$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form2', 'id' => 'form2');
												echo form_open_multipart('precollections/bulk_action', $attributes); 
											?>   
											
											<table class="table table-responsive">
												
												<thead>
													
													<tr>
														<th ><?php	//$js = 'onClick="checkall(this.form)"'; echo form_checkbox('check_all', '1', false, $js);  uncheckall ?> 
														<a onClick="checkall()" href="javascript:void(0)">Select all</a>/<a onClick="uncheckall()" href="javascript:void(0)">Unselect all</a></th>
														<th> Name </th>
														
														<th> Account </th>
														
														<th> Amount Due </th>
														
														<th> Action </th>
														
													</tr>
													
												</thead>
												
												<tbody>
													
													<?php foreach($client_records as $cval) { ?>  
														
														<tr>
															<td ><input checked name="id[]" type="checkbox" value="<?php echo $cval['id']; ?>"></td>
															
															<td> <?php echo $cval['fname']; ?>  <?php echo $cval['lname']; ?> </td>
															
															<td> <?php echo $cval['acctno']; ?></td>
															
															<td> $ <?php echo $cval['amountdue']; ?> </td>
															
															<td>  
																
																<a class="bt btn-info btn-sm" href="<?php echo base_url() ?>precollections/edit/<?php echo $cval['id']; ?>"><i title="Edit" class="fa fa-pencil"></i></a>  &nbsp; 
																<a onClick="return confirm('Are you sure you want to delete?');" class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/delete/<?php echo $cval['id']; ?>"><i title="Delete" class="fa fa-trash"></i></a>  &nbsp; 
																<!--<a class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/save/<?php echo $cval['id']; ?>"><i title="Finalize" class="fa fa-save"></i></a>  -->
																
															</td>
															
														</tr>
														
													<?php } ?>   
													
													
													<tr>
														<td colspan="9" align="left"> <button onClick="return confdel();" class="btn btn-primary"> <i class="fa fa-save"></i> Finalize </button> <br>
															<small>NOTE: To Finalize and send to staff, select a record(s) and click the Finalize button.</small>
														</td>
													</tr>
													
												</tbody>
												
												
												
											</table>
											
											
											
											<?php
												echo form_close(); 
											} else { ?>  
											
											<table style="text-align:center;" class="table">
												
												
												
												<tr>
													
													<th> <center>No records to send to Centron.</center></th>
													
													
													
												</tr>
												
												
												
											</table>  
											
											<?php } ?>
											
											
											
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
																	
																	<a  class="bt btn-info btn-sm" href="<?php echo base_url() ?>precollections/edit/<?php echo $cval['id']; ?>"><i title="Edit" class="fa fa-pencil"></i></a>  &nbsp; 
																	<a onClick="return confirm('Are you sure you want to delete?');" class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/delete/<?php echo $cval['id']; ?>"><i title="Delete"  class="fa fa-trash"></i></a>  &nbsp; 
																	
																	<a  class="bt btn-danger btn-sm" href="<?php echo base_url() ?>precollections/save/<?php echo $cval['id']; ?>"><i title="Finalize"  class="fa fa-save"></i></a>  
																	
																</td>
																
															</tr>
															
															<tr>
																<td style="border-left:1px solid #fff;">   </td> <td style="border-right:1px solid #fff;">   </td>
															</tr>
															
														<?php } ?>   
														
														
														
													</tbody>
													
													
													
												</table>
												
												
												
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
								
								
								
								<div class="col-xs-12 col-md-12 padding_0px">
									
									<div class="panel panel-default">
										
										
										
										<div class="panel-heading panel_custom">
											
											<i class="fa fa-list"></i> Review Historical Batches
											
										</div>
										
										<div class="panel-body">
											
											<?php if(count($client_batch) > 0) { ?>   
												
												<table class="table table-responsive">
													
													<thead>
														
														<tr>
															
															<th> Date </th>
															
															<th> Action </th>
															
														</tr>
														
													</thead>
													
													<tbody>
														
														<?php foreach($client_batch as $cval) { ?>  
															
															<tr>
																
																<td> 
																	
																	<?php 
																		
																		$submit_date=$cval['submit_date']; 
																		
																		$submit_datearr=explode("-",$submit_date);
																		
																		echo $submit_datearrstr=$submit_datearr['1']."/".$submit_datearr['2']."/".$submit_datearr['0'];
																		
																	?> 
																	
																</td>
																
																
																
																<td>  
																	
																	<a class="bt btn-danger btn-sm" href="<?php echo base_url() ?>collections/batches/<?php echo $cval['id']; ?>/<?php echo $cval['straight_pre']; ?>/<?php echo $cval['submit_date']; ?>"><i class="fa fa-eye"></i></a>  
																	
																</td>
																
															</tr>
															
														<?php } ?>   
														
														
														
													</tbody>
													
													
													
												</table>
												
												
												
												<?php } else { ?>  
												
												<table style="text-align:center;" class="table">
													
													
													
													<tr>
														
														<th> <center>
															No historical record batches  found.
														</center></th>
														
														
														
													</tr>
													
													
													
												</table>  
												
											<?php } ?>
											
											
											
										</div>
										
										
										
									</div>
									
								</div>
								
								
								
								
								
								
								
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