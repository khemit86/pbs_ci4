<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Managed Accounts Edit</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			
			$( "#datepickerdob").datepicker(
			
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
	
	<?php echo $this->include('includes/header_inner');?>
	
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
								
								
								
								<div class="panel-heading panel_custom"> <i class="fa fa-medkit"></i> Pre-Collection Form :  Edit Record </div>
								
								
								
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
										
										echo form_open_multipart(base_url('precollections/editdo'), $attributes);
										$validation = \Config\Services::validation();
										
									?>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Responsible Party  First Name <span class="color_red">*</span>
											
											<span> <a data-toggle="tooltip" data-placement="top" title="First name of the person (debtor) being sent to collection."><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('fname'); ?></span>
										
										<?php
											
											$data = array('name'  => 'fname', 'id' => 'fname', 'class'=>"form-control",  'value'=>$edit_collection[0]['fname'],  'maxlength' => '200','placeholder'=>'First name of the person (debtor) being sent to collection.');
											
											echo form_input($data);
											
										?>
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>Responsible Party Last Name<span class="color_red">*</span>
											
											<span> <a data-toggle="tooltip" data-placement="top" title="Last name of the person (debtor) being sent to collection."><i class="fa fa-question-circle"></i> </a> </span>                    
											
										</label>
										
										<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('lname'); ?></span>
										
										<?php
											
											$data = array('name'  => 'lname', 'id' => 'lname', 'class'=>"form-control",  'value'=>$edit_collection[0]['lname'],  'maxlength' => '200','placeholder'=>'Last name of the person (debtor) being sent to collection.');
											
											echo form_input($data);
											
										?>
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Responsible Party Account#   </label> 
										
										<?php
											
											$data = array('name'  => 'acctno', 'id' => 'acctno', 'class'=>"form-control",  'value'=>$edit_collection[0]['acctno'],  'maxlength' => '100','placeholder'=>'');
											
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
											
											$data = array('name'  => 'address', 'id' => 'address', 'class'=>"form-control", 'rows'=>'3', 'value'=>$edit_collection[0]['address'], 'placeholder'=>'');
											
											echo form_textarea($data);
											
										?>
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12"> 
										
										<label> Responsible Party City <span class="color_red">*</span>
											
											<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party City"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('city'); ?></span>
										
										<?php
											
											$data = array('name'  => 'city', 'id' => 'city', 'class'=>"form-control",  'value'=>$edit_collection[0]['city'],  'maxlength' => '200','placeholder'=>'');
											
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
											
											
											
											$selected=$edit_collection[0]['st'];
											
											echo form_dropdown('st',  $options, $selected, 'class="form-control"');
											
										?>
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Responsible Party ZIP <span class="color_red">*</span>
											
											<span> <a data-toggle="tooltip" data-placement="top" title="Responsible Party ZIP"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('zip'); ?></span>
										
										<?php
											
											$data = array('name'  => 'zip', 'id' => 'zip', 'class'=>"form-control",  'value'=>$edit_collection[0]['zip'],  'maxlength' => '30','placeholder'=>'');
											
											echo form_input($data);
											
										?>  
										
									</div>
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>Responsible Party Place of Employment 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="
												Place of Employment
											"><i class="fa fa-question-circle"></i> </a> </span>    
											
										</label>
										
										<?php
											
											$data = array('name'  => 'employment', 'id' => 'employment', 'class'=>"form-control",  'value'=>$edit_collection[0]['employment'],  'maxlength' => '255','placeholder'=>'');
											
											echo form_input($data);
											
										?>  
										
									</div>
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>   Responsible Party Home Phone 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="(xxx) xxx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>  
											
										</label>
										
										<?php
											
											
											
											$data = array('name'  => 'homephone', 'id' => 'homephone', 'class'=>"form-control",'onKeyPress'=>'ResponsibleHome()',  'value'=>$edit_collection[0]['homephone'],  'maxlength' => '50','placeholder'=>'(xxx) xxx-xxxx'); 
											
											echo form_input($data);
											
										?>  
										
									</div>
									
									
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>  Responsible Party Work Phone 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="(xxx) xxx-xxxx"><i class="fa fa-question-circle"></i> </a> </span> 
											
											
										</label>
										
										<?php
											
											$data = array('name'  => 'workphone', 'id' => 'workphone', 'class'=>"form-control", 'onKeyPress'=>'workphone_1()',  'value'=>$edit_collection[0]['workphone'],  'maxlength' => '60','placeholder'=>'(xxx) xxx-xxxx'); 
											
											echo form_input($data);
											
										?>  
										
									</div>
									
									
									
									
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>   Responsible Party Cell Phone 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="(xxx) xxx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										
										
										<?php
											
											$data = array('name'  => 'cellphone', 'id' => 'cellphone', 'class'=>"form-control",'onKeyPress'=>'cellphone_1()' , 'value'=>$edit_collection[0]['cellphone'],  'maxlength' => '60','placeholder'=>'(xxx) xxx-xxxx'); 
											
											echo form_input($data);
											
										?>  
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Responsible Party Date of Birth 
											
											
										</label>
										
										
										
										<?php
											
											$dob=$edit_collection[0]['dob']; 
											
											$dobarr=explode("-",$dob);
											
											$dobstr=$dobarr['1']."/".$dobarr['2']."/".$dobarr['0'];
											
											$data = array('name'  => 'dob', 'id' => 'datepickerdob', 'class'=>"form-control",  'value'=>$dobstr,  'maxlength' => '60','placeholder'=>''); 
											
											echo form_input($data);
											
										?>  
									</div>
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>     Responsible Party SSN 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="xxx-xx-xxxx e.g. 123-45-6789"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label> 
										<?php
											
											$data = array('name'  => 'ssn', 'id' => 'ssn', 'class'=>"form-control",  'value'=>$edit_collection[0]['ssn'],'onKeyPress'=>'party_ssn()',  'maxlength' => '60','placeholder'=>'xxx-xx-xxxx'); 
											
											echo form_input($data);
											
										?>  
										
									</div>
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>  Amount Due  <span class="color_red">*</span>
											
											<span> <a data-toggle="tooltip" data-placement="top" title="(Numbers only. ie 122.03)"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('amountdue'); ?></span>
										<?php
											
											$data = array('name'  => 'amountdue', 'id' => 'amountdue', 'class'=>"form-control",  'value'=>$edit_collection[0]['amountdue'],  'maxlength' => '60','placeholder'=>'(Numbers only. ie 122.03)'); 
											
											echo form_input($data);
											
										?>  
									</div>
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>Last Service Date <span class="color_red">*</span> 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="Last Service Date"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo $validation->showError('dls'); ?></span>
										<?php
											
											$dls=$edit_collection[0]['dls']; 
											
											$dlsarr=explode("-",$dls);
											
											$dlsstr=$dlsarr['1']."/".$dlsarr['2']."/".$dlsarr['0'];
											
											
											
											$data = array('name'  => 'dls', 'id' => 'dls', 'class'=>"form-control",  'value'=>$dlsstr,  'maxlength' => '60','placeholder'=>''); 
											
											echo form_input($data);
											
										?>  
										
									</div>
									
									<div class="form-group col-lg-16 col-xs-12">
										
										<label> Bad Address </label>
										
										<?php 
											
											$checked=$edit_collection[0]['badaddr'];
											
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
											
											$data = array('name'  => 'PatientFName', 'id' => 'PatientFName', 'class'=>"form-control",  'value'=>$edit_collection[0]['PatientFName'],  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>  
										
										
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>  Patient Last Name    </label>
										
										
										
										<?php
											
											$data = array('name'  => 'PatientLName', 'id' => 'PatientLName', 'class'=>"form-control",  'value'=>$edit_collection[0]['PatientLName'],  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>  
										
										
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>  Patient DOB   </label>
										
										
										
										<?php
											
											$Patientdob=$edit_collection[0]['Patientdob']; 
											
											$Patientdobarr=explode("-",$Patientdob);
											
											$Patientdobstr=$Patientdobarr['1']."/".$Patientdobarr['2']."/".$Patientdobarr['0'];
											
											
											
											
											
											$data = array('name'  => 'Patientdob', 'id' => 'datepicker1', 'class'=>"form-control",  'value'=>$Patientdobstr,  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>  
										
										
										
										
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label>  Patient SSN# 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="xxx-xx-xxxx e.g. 123-45-6789"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										
										
										
										
										<?php
											
											$data = array('name'  => 'Patientssn', 'id' => 'Patientssn', 'class'=>"form-control", 'onKeyPress'=>'Patient_ssn()',  'value'=>$edit_collection[0]['Patientssn'],  'maxlength' => '50','placeholder'=>'xxx-xx-xxxx '); 
											
											echo form_input($data);
											
										?>          
										
										
										
										
										
									</div>
									
									
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse First Name   </label>
										
										
										
										<?php
											
											$data = array('name'  => 'spousefname', 'id' => 'spousefname', 'class'=>"form-control",  'value'=>$edit_collection[0]['spousefname'],  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>  
										
										
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse Last Name   </label>
										
										<?php
											
											$data = array('name'  => 'spouselname', 'id' => 'spouselname', 'class'=>"form-control",  'value'=>$edit_collection[0]['spouselname'],  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>       
										
										
									</div>
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse Employment   </label>
										
										
										
										<?php
											
											$data = array('name'  => 'spouseemployment', 'id' => 'spouseemployment', 'class'=>"form-control",  'value'=>$edit_collection[0]['spouseemployment'],  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>       
									</div>
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse Work Phone 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="xxx-xx-xxxx
											"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										<?php
											
											$data = array('name'  => 'spouseworkphone', 'id' => 'spouseworkphone', 'class'=>"form-control",'onKeyPress'=>'spouseworkphone_1()',  'value'=>$edit_collection[0]['spouseworkphone'],  'maxlength' => '255','placeholder'=>'(xxx) xxx-xxxx'); 
											
											echo form_input($data);
											
										?>      
										
										
										
									</div>
									
									
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse Alternate and/or Cell Phone 
											
											<span> <a data-toggle="tooltip" data-placement="top" title="xxx-xx-xxxx"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										
										
										<?php
											
											$data = array('name'  => 'spousecellphone', 'id' => 'spousecellphone', 'class'=>"form-control", 'onKeyPress'=>'spousecellphone_1()', 'value'=>$edit_collection[0]['spousecellphone'],  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>      
										
										
										
									</div>
									
									
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse DOB  </label>
										
										
										
										<?php
											
											$Spousedob=$edit_collection[0]['Spousedob']; 
											
											$Spousedobarr=explode("-",$Spousedob);
											
											$Spousedobstr=$Spousedobarr['1']."/".$Spousedobarr['2']."/".$Spousedobarr['0'];
											
											
											
											$data = array('name'  => 'Spousedob', 'id' => 'datepicker2', 'class'=>"form-control",  'value'=>$Spousedobstr,  'maxlength' => '255','placeholder'=>''); 
											
											echo form_input($data);
											
										?>        
										
										
										
										
										
									</div>
									
									
									
									
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Spouse SSN:  
											
											<span> <a data-toggle="tooltip" data-placement="top" title="xxx-xx-xxxx e.g. 123-45-6789
											"><i class="fa fa-question-circle"></i> </a> </span>
											
										</label>
										
										
										
										<?php
											
											$data = array('name'  => 'spousessn', 'id' => 'spousessn', 'class'=>"form-control",'onKeyPress'=>'spouse_ssn()'  , 'value'=>$edit_collection[0]['spousessn'],  'maxlength' => '20','placeholder'=>'xxx-xx-xxxx'); 
											
											echo form_input($data);
											
										?>        
										
										
										
										
										
									</div>
									
									
									
									<div class="form-group col-lg-6 col-xs-12">
										
										<label> Last Payment Date  </label>
										
										
										
										<?php
											
											
											
											$dlp=$edit_collection[0]['dlp']; 
											
											$dlparr=explode("-",$dlp);
											
											$dlparrstr=$dlparr['1']."/".$dlparr['2']."/".$dlparr['0'];
											
											$data = array('name'  => 'dlp', 'id' => 'datepicker3', 'class'=>"form-control",  'value'=>$dlparrstr,  'maxlength' => '20','placeholder'=>''); 
											
											echo form_input($data);
											
										?>      
										
									</div>   
									
									<div class="form-group col-lg-12 col-xs-12">
										<label> More Info  </label>
										
										<?php
											
											$data = array('name'  => 'moreinfo', 'id' => 'moreinfo', 'class'=>"form-control",'rows'=>'3' , 'value'=>$edit_collection[0]['moreinfo'],  'placeholder'=>''); 
											
											echo form_textarea($data);
											
										?>  
									</div>
									<div class="form-group col-lg-12 col-xs-12">
										<button name="smt_enter" value="" class="btn btn-primary"> <i class="fa fa-save"></i> Submit Record </button>
										
									</div>
									
									<?php  
										
										// ------------------------------  form end ---------------------------------
										
										$data = array('id'  => $edit_collection[0]['id']);
										
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
							
						</div> 
						
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