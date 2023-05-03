<?php
namespace App\Controllers;
use App\Models\PrecollectionsPageModel;
class Precollections extends BaseController {

	/**
	 * Index Page for this controller.
	 * Maps to the following URL
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 */
	 //-----------------------------------------------------------------------------------------
	public function index()
	{
	   
		$session = \Config\Services::session();
		$data['cid']=$session->get('client_id');
		$clt_id=$session->get('client_id');
		error_reporting(0);
		$precollectionspagemodel = new PrecollectionsPageModel();
		$data['state']= $precollectionspagemodel->state_dropdown();
		$data['client_records']= $precollectionspagemodel->collection_client_records($clt_id);
		$data['client_batch']= $precollectionspagemodel->collection_batch($clt_id);
		return view('precollections_view',$data);
	}
	
	//------------------------------------------------------------------------------------------		
	public function action()
	{
		$session = \Config\Services::session();
		$validation = \Config\Services::validation();
		$request = \Config\Services::request();
		$validation->setRule('fname', 'first name', 'required|trim');
		$validation->setRule('lname', 'last name', 'required|trim');
		$validation->setRule('address', 'address', 'required|trim');
		$validation->setRule('city', 'city', 'required|trim');
		$validation->setRule('st', 'state', 'required|trim');
		$validation->setRule('zip', 'zipcode', 'required|trim');
		$validation->setRule('amountdue', 'amount due', 'required|trim');
		$validation->setRule('dls', 'last service date', 'required|trim');
		if($validation->withRequest($this->request)->run()) 
		{
			$data=$request->getPost();
			$precollectionspagemodel = new PrecollectionsPageModel();		
			unset($data['smt_enter']);
			unset($data['dob']);
			unset($data['Patientdob']);
			unset($data['Spousedob']);
			unset($data['dls']);
			//------------------------------------------------------------------------------------------------------------------
			$dob=$request->getPost('dob'); 
			if($dob!='')
			{
				$dobarr=explode("/",$dob);
				$data['dob']=$dobarr['2']."-".$dobarr['0']."-".$dobarr['1'];
			}
			//------------------------------------------------------------------------------------------------------------------	
			$Patientdob=$request->getPost('Patientdob'); 
			if($Patientdob!='')
			{
				$Patientdobarr=explode("/",$Patientdob);
				$data['Patientdob']=$Patientdobarr['2']."-".$Patientdobarr['0']."-".$Patientdobarr['1'];
			}
			//------------------------------------------------------------------------------------------------------------------		
			$Spousedob=$request->getPost('Spousedob');
			if($Spousedob!='')
			{
				$Spousedobarr=explode("/",$Spousedob);
				$data['Spousedob']=$Spousedobarr['2']."-".$Spousedobarr['0']."-".$Spousedobarr['1'];
			} 
			//------------------------------------------------------------------------------------------------------------------		
			$dls=$request->getPost('dls'); 
			if($dls!='')
			{
				$dlsarr=explode("/",$dls);
				$data['dls']=$dlsarr['2']."-".$dlsarr['0']."-".$dlsarr['1'];
			}
			//------------------------------------------------------------------------------------------------------------------		
			$dlp=$request->getPost('dlp'); 
			if($dlp!='')
			{
				$dlparr=explode("/",$dlp);
				$data['dlp']=$dlparr['2']."-".$dlparr['0']."-".$dlparr['1'];	
			}  


			//------------------------------------------------------------------------------------------	
			//------------------------------------------------------------------------------------------------------------------	 
			$collectionid=$precollectionspagemodel->collections_insert($data);
			//-------------------------------------------- Email Code Gose Here ------------------------------------------------
			$EmailStrClient = "";  
			$EmailStrClient.="----------------------------------------------------<br><br>

			Your file has been successfully uploaded to our server. Thank you for your continued business.<br><br><br><br>


			Thanks,<br><br>

			Patient Business Services<br> 
			<br><br><br>

			----------------------------------------------------------------------";

			$subject="PBS File Upload";
			// ------------------- load email library ------------------------------------------------------------ 
			$email = \Config\Services::email(); // loading for use
			$SystemEmailUser = SystemEmailUser;	
			$client_email=$session->get('client_email'); 
			$EmailUser=EmailUser;
			$email->setTo(trim($client_email));
			$email->setMailType('html');
			$email->setFrom($SystemEmailUser, '');
			$email->setSubject($subject);
			
			$email->setMessage($EmailStrClient);

			// Send email
			if ($email->send()) {
				//echo 'Email successfully sent, please check.';
			} else {
				//$data = $email->printDebugger(['headers']);
				
			}
			
			
			
			//------------------------------ email code gose here --------------------------------------------------
			$session->setFlashdata('collections', 'Collections records added successfully');
			return redirect()->to('precollections/finish/'.$collectionid);
		}
		else
		{
			$data['cid']=$session->get('client_id');
			$clt_id=$session->get('client_id');
			error_reporting(0);
			$precollectionspagemodel = new PrecollectionsPageModel();
			$data['state']= $precollectionspagemodel->state_dropdown();
			$data['client_records']= $precollectionspagemodel->collection_client_records($clt_id);
			$data['client_batch']= $precollectionspagemodel->collection_batch($clt_id);
			return view('precollections_view',$data);
		} 

	}   
	  
	  
	   //--------------------------------------------------- delete  coomon function--------------------------------------------------------------- 
	public function delete()
	{
		$session = \Config\Services::session();
		$data['cid']=$session->get('client_id');
		$clt_id=$session->get('client_id');
		$id=$this->request->uri->getSegment(3);
		$precollectionspagemodel = new PrecollectionsPageModel();
		$precollectionspagemodel->collection_delete($id,$clt_id);

		$session->setFlashdata('collections', 'Record deleted successfully');
		return redirect()->to('precollections');
	}
	//--------------------------------------------------- save ----------------------------------------------------------------- 
	public function save()
	{
		$session = \Config\Services::session();
		$clt_id=$session->get('client_id');
		$id=$this->request->uri->getSegment(3);
		$precollectionspagemodel = new PrecollectionsPageModel();
		$precollectionspagemodel->collection_submit_data($id,$clt_id);
		//---------------------------------- send email -----------------------------------------------------


		$client_fname=$session->get('client_fname');
		$client_lname=$session->get('client_lname');
		$client_company=$session->get('client_company');
		$client_acctno=$session->get('client_acctno');
		$client_email=$session->get('client_email');
		$subDate=date('H:i a m/d/Y'); 
		$SystemEmailUser = SystemEmailUser;

		$EmailStr = "";  //EMAIL CENTRON ABOUT PRECOLLECTION DATA REGISTRATION
		$EmailStr .= "---------------------------------------<br><br>

		A Managed Account Record has just been added to the database.  You should go to your Maintenance Console to download this record.   <br><br><br><br> 
		-------------------<br><br>

		CLIENT INFO:<br>
		-------------------<br><br>

		$client_fname $client_lname<br>

		$client_company<br>

		$client_email<br>

		Account # $client_acctno<br>

		Date: $subDate <br><br>

		-------------------<br><br><br><br>



		-------------------<br><br><br><br>
		";

		$EmailUser=EmailUser;	
		$email = \Config\Services::email(); // loading for use
		
		$email->setTo($EmailUser);
		$email->setMailType('html');
		$email->setFrom($SystemEmailUser, '');
		$email->setSubject('PBS Managed Account Record');
		
		$email->setMessage($EmailStr);

		// Send email
		if ($email->send()) {
			//echo 'Email successfully sent, please check.';
		} else {
			//$data = $email->printDebugger(['headers']);
			
		}
		
		//---------------------------------------------------------------------------------------------------
		$session->setFlashdata('collections', 'Records finalized and sent to staff successfully.');
		return redirect()->to('precollections');

	}    
	           //collection_submit_data($data,$id)
	 
	  //--------------------------------------------------- edit ----------------------------------------------------------------- 
	public function edit()
	{
		error_reporting(0);
		$session = \Config\Services::session();
		$clt_id=$session->get('client_id');
		$data['cid']=$session->get('client_id');
		$id=$this->request->uri->getSegment(3);
		$precollectionspagemodel = new PrecollectionsPageModel();
		$data['state']= $precollectionspagemodel->state_dropdown();
		$data['edit_collection']=$precollectionspagemodel->collection_client_edit_records($id,$clt_id);   
		return view('precollections_modify',$data);
	}	
			  
		 //------------------------------------------- edit data -----------------------------------------------------------------
		      	
	public function editdo()
	{ 
		$validation = \Config\Services::validation();
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation->setRule('fname', 'first name', 'required|trim');
		$validation->setRule('lname', 'last name', 'required|trim');
		$validation->setRule('address', 'address', 'required|trim');
		$validation->setRule('city', 'city', 'required|trim');
		$validation->setRule('st', 'state', 'required|trim');
		$validation->setRule('zip', 'zipcode', 'required|trim');
		$validation->setRule('amountdue', 'amount due', 'required|trim');
		$validation->setRule('dls', 'last service date', 'required|trim');
		if($validation->withRequest($this->request)->run()) 
		{
			$data=$request->getPost();
			$precollectionspagemodel = new PrecollectionsPageModel();			
			unset($data['smt_enter']);
			unset($data['dob']);
			unset($data['Patientdob']);
			unset($data['Spousedob']);
			unset($data['dls']);
			unset($data['dlp']);

			//------------------------------------------------------------------------------------------------------------------
			$dob=$request->getPost('dob'); 
			if($dob!='')
			{
				$dobarr=explode("/",$dob);
				$data['dob']=$dobarr['2']."-".$dobarr['0']."-".$dobarr['1'];
			}
			//------------------------------------------------------------------------------------------------------------------	
			$Patientdob=$request->getPost('Patientdob'); 
			if($Patientdob!='')
			{
				$Patientdobarr=explode("/",$Patientdob);
				$data['Patientdob']=$Patientdobarr['2']."-".$Patientdobarr['0']."-".$Patientdobarr['1'];
			}		
			//------------------------------------------------------------------------------------------------------------------		
			$Spousedob=$request->getPost('Spousedob');
			if($Patientdob!='')
			{
				$Spousedobarr=explode("/",$Spousedob);
				$data['Spousedob']=$Spousedobarr['2']."-".$Spousedobarr['0']."-".$Spousedobarr['1'];
			}	
			//------------------------------------------------------------------------------------------------------------------		
			$dls=$request->getPost('dls'); 
			if($Patientdob!='')
			{
				$dlsarr=explode("/",$dls);
				$data['dls']=$dlsarr['2']."-".$dlsarr['0']."-".$dlsarr['1'];
			}	 
			//------------------------------------------------------------------------------------------------------------------		
			$dlp=$request->getPost('dlp');
			if($dlp!='')
			{ 
				$dlparr=explode("/",$dlp);
				$data['dlp']=$dlparr['2']."-".$dlparr['0']."-".$dlparr['1'];
			}	 	


			//------------------------------------------------------------------------------------------	
			//--------------------------------------------------------------------------------------------------------
			$clt_id=$session->get('client_id');
			$id=$request->getPost('id');
			$collectionid=$precollectionspagemodel->collections_editdita($data,$id,$clt_id);
			$session->setFlashdata('collections', 'Managed accounts record updated successfully');
			return redirect()->to('precollections');
		}
		else
		{
			$clt_id=$session->get('client_id');
			$data['cid']=$session->get('client_id');
			$id=$request->getPost('id');
			$precollectionspagemodel = new PrecollectionsPageModel();
			$data['state']= $precollectionspagemodel->state_dropdown();
			$data['edit_collection']=$precollectionspagemodel->collection_client_edit_records($id,$clt_id);   
			return view('nonmedicalcollections_modify',$data);
		}   


	} 	
		
//---------------------------------- finish ------------------------------------------------------------
//---------------------------------- finish ------------------------------------------------------------			 
			 
	public function finish()
	{
	// echo"-------------".$this->session->client_id;  
		$session = \Config\Services::session();
		$data['cid']=$session->get('client_id');
		$clt_id=$session->get('client_id');
		error_reporting(0);
		$id=$this->request->uri->getSegment(3);
		$data['id']=$id;
		$precollectionspagemodel = new PrecollectionsPageModel();
		$data['client_records']= $precollectionspagemodel->collection_finish_records($clt_id,$id);
		$session->setFlashdata('collections', 'Records saved successfully. Finalize record to send saved records to collections staff, or enter another record. ');
		return view('precollections_finish_view',$data);
	}	 
//--------------------------------------------- bulk action ----------------------------------------------	  
	 	
	function bulk_action()
	{
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$id_arr=$request->getPost('id');
		//  print_r($id_arr);
		//die();
		if(count($id_arr) > 0)
		{
			$clt_id=$session->get('client_id');
			$precollectionspagemodel = new PrecollectionsPageModel();
			$i=0;
			foreach($id_arr as $id)	
			{
				$precollectionspagemodel->collection_submit_data($id,$clt_id);

				//---------------------------------- send email -----------------------------------------------------
				$client_fname=$session->get('client_fname');
				$client_lname=$session->get('client_lname');
				$client_company=$session->get('client_company');
				$client_acctno=$session->get('client_acctno');
				$client_email=$session->get('client_email');
				$subDate=date('H:i a m/d/Y'); 
				$SystemEmailUser = SystemEmailUser;

				$EmailStr = "";  //EMAIL CENTRON ABOUT PRECOLLECTION DATA REGISTRATION
				$EmailStr .= "---------------------------------------<br><br>

				A Managed Account Record has just been added to the database.  You should go to your Maintenance Console to download this record.   <br><br><br><br> 
				-------------------<br><br>

				CLIENT INFO:<br>

				-------------------<br><br>

				$client_fname $client_lname<br>

				$client_company<br>

				$client_email<br>

				Account # $client_acctno<br>

				Date: $subDate <br><br>

				-------------------<br><br><br><br>

				-------------------<br><br><br><br>
				";

				// condition due to when I add and finalize multiple records, it STILL sends staff multiple email notices. It should only send staff ONE email notice when the finalize option is sent.

				if($i==0)
				{

					$EmailUser=EmailUser;	
					$email = \Config\Services::email(); // loading for use
					$email->setTo($EmailUser);
					$email->setMailType('html');
					$email->setFrom($SystemEmailUser, '');
					$email->setSubject('PBS Managed Account Record');
					
					$email->setMessage($EmailStr);

					// Send email
					if ($email->send()) {
						//echo 'Email successfully sent, please check.';
					} else {
						//$data = $email->printDebugger(['headers']);
						
					}
				}
				$i++;			
			} 			
			//---------------------------------------------------------------------------------------------------
			$session->setFlashdata('collections', 'Records finalized and sent to staff successfully.');
			return redirect()->to('precollections');
		}	
		else
		{

			$session->setFlashdata('collections', 'Nothing to finalize please select records to finalized.');
			//return redirect()->to('direct');
			return redirect()->to('precollections');

		}		


	}	

}
?>