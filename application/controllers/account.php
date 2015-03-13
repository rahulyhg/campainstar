<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class account extends CI_Controller 
{
	public function __construct( )
	{
		parent::__construct();
		
		$this->is_logged_in();
	}
	function is_logged_in( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
		if ( $is_logged_in !== 'true' || !isset( $is_logged_in ) ) {
			redirect( base_url() . 'index.php/login', 'refresh' );
		} //$is_logged_in !== 'true' || !isset( $is_logged_in )
	}
    function checkaccess($access)
	{
		$accesslevel=$this->session->userdata('accesslevel');
		if(!in_array($accesslevel,$access))
			redirect( base_url() . 'index.php/site?alerterror=You do not have access to this page. ', 'refresh' );
	}

	public function details()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'account';
           $data['title']='Account';
            $this->load->view('template',$data);
   }
    	public function campanyredirecct()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
           $data[ 'page' ] = 'campany';
           $data['title']='campany';
            $this->load->view('template',$data);
   }
    public function campany()
	{
      $fullname=$this->input->post('fullname');
             $emailaddresss=$this->input->post('emailaddresss');
          $choosepassword=$this->input->post('choosepassword');
              $reenterpassword=$this->input->post('reenterpassword');
            $this->account_model->account($fullname,$emailaddresss,$choosepassword,$reenterpassword);
        redirect('account/campanyredirecct', 'refresh');
    }
    	public function settingredirect()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'setting';
        $data['title']='setting';
        $this->load->view('template',$data);
   }
    public function setting()
	{
      $campanyname=$this->input->post('campanyname');
             $campanyurl=$this->input->post('campanyurl');
          $uploadlogo=$this->input->post('uploadlogo');
              $selectindustry=$this->input->post('selectindustry');
            $this->account_model->campany($campanyname,$campanyurl,$uploadlogo,$selectindustry);
        redirect('account/settingredirect', 'refresh');
    }
    
    	public function billingredirect()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'billing';
           $data['title']='billing';
            $this->load->view('template',$data);
   }
    	public function billing()
	{
		$campanyname=$this->input->post('campanyname');
             $campanyurl=$this->input->post('campanyurl');
          $uploadlogo=$this->input->post('uploadlogo');
              $selectindustry=$this->input->post('selectindustry');
            $this->account_model->campany($campanyname,$campanyurl,$uploadlogo,$selectindustry);
        redirect('account/settingredirect', 'refresh');
   }
    	public function mycampaign()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'mycampaign';
           $data['title']='mycampaign';
            $this->load->view('template',$data);
   }
    	public function resultsandanaltys()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'resultsandanaltys';
           $data['title']='resultsandanaltys';
            $this->load->view('template',$data);
   }
    public function result()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'result';
           $data['title']='result';
            $this->load->view('template',$data);
   }

public function mycampaignteam()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'mycampaignteam';
           $data['title']='mycampaignteam';
            $this->load->view('template',$data);
   }
public function team()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'team';
           $data['title']='team';
            $this->load->view('template',$data);
   }
	public function selectteama()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'selectteama';
           $data['title']='selectteama';
            $this->load->view('template',$data);
   }
    	public function campangnedit()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
         $data[ 'page' ] = 'campangnedit';
         $data['title']='campangnedit';
            $this->load->view('template',$data);
   }
    public function deletelist()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
//        echo "id is". $this->input->get('id');
        $this->account_model->deletelist($this->input->get('id'));
 redirect('account/viewmylist', 'refresh');
        
   }
        public function viewmylist()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data['list']=$this->account_model->viewalllist();
            $data[ 'page' ] = 'viewmylist';
           $data['title']='view my list';
            $this->load->view('template',$data);
   }
         public function viewmylistupload()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'viewmylistupload';
           $data['title']='view my list';
            $this->load->view('template',$data);
   }
           public function mailchipid()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'mailchipid';
             $data['title']='view my list';
            $this->load->view('template',$data);
   }
            public function mailchipidsubmit()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
          $id=$this->input->get_post('id');
        $this->account_model->mailchip($id);
      redirect('account/mailchipid', 'refresh');    
   }
    function viewmylistuploadsubmit()
	{
      	$access = array("1","2","3");
		$this->checkaccess($access);
 $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $filename="file";
        $file="";
        if ($this->upload->do_upload($filename))
        {
            $uploaddata = $this->upload->data();
            $file=$uploaddata['file_name'];
            $filepath=$uploaddata['file_path'];
        }
        $fullfilepath=$filepath."".$file;
       $name=$this->input->get_post('name');
        echo "filename is".$name;
      ////$file = $this->csvreader->parse_file($fullfilepath);
        $id1=$this->account_model->viewmylist($file,$name);
//        echo $id1;
        if($id1==0)
        $data['alerterror']="New Users could not be Uploaded.";
		else
		$data['alertsuccess']="Users Uploaded Successfully.";
redirect('account/viewmylist', 'refresh');
    }
     
    
}
?>