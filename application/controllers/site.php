<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller 
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
//	function checkaccess($access)
//	{
//		$accesslevel=$this->session->userdata('accesslevel');
//		if(!in_array($accesslevel,$access))
//			redirect( base_url() . 'index.php/site?alerterror=You do not have access to this page. ', 'refresh' );
//        if($accesslevel==2)
//        {
//            $data[ 'facebook' ] = $this->session->userdata("facebook")=="";
//            $data[ 'twitter' ] = $this->session->userdata("twitter")=="";
//            if(!$data['twitter'] && !$data[ 'facebook' ])
//            {
//            }
//            else
//            {
//                if($this->uri->segment(2)=="index")
//                {
//                }
//                else
//                {
//                    redirect('/site/index/', 'refresh');
//                }
//            }
//        }
//	}
//	public function index()
//	{
//		$access = array("1","2","3");
//		$this->checkaccess($access);
//            $data[ 'page' ] = 'dashboard';
////            $data['base_url'] = site_url("site/index");
////            $data['totalcompassadors'] = $this->user_model->gettotalcompassadors();
////            $data['admindash'] = $this->userpost_model->getadmindash();
//            $data['title']='Admin Dashboard';
//            $this->load->view('template',$data);
//            
//	}
	public function viewmycampaign()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'viewmycampaign';
        $userid=$this->session->userdata('id');
        $data['table'] = $this->campaignaccess_model->getcampaignbyuser($userid);
        $data['title']='My Campaigns';
        $this->load->view('template',$data);
            
	}
    public function index()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'viewmycampaign';
        $userid=$this->session->userdata('id');
        $data['table'] = $this->campaignaccess_model->getcampaignbyuser($userid);
        $data['title']='My Campaigns';
        $this->load->view('template',$data);
            
	}
	public function moremycampaign()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'moremycampaign';
        $campaign= $this->input->get_post("id");
        $data['campaignid']= $this->input->get_post("id");
        $userid=$this->session->userdata('id');
        $data['campaign'] = $this->campaignaccess_model->getsinglecampaign($campaign);
        $data['groups'] = $this->campaignaccess_model->getselectedcampaigngroupbycampaign($campaign);
        $data['title']='My Campaigns';
        $this->load->view('template',$data);
            
	}
	public function editcampaignbyuser()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'editcampaignbyuser';
        $userid=$this->session->userdata('id');
        $campaignid=$this->input->get('id');
        $data['before'] = $this->campaignaccess_model->beforeedit($campaignid);
//        $data['table'] = $this->campaignaccess_model->getcampaignbyuser($userid);
        $data['title']='Edit Campaigns';
        $this->load->view('template',$data);
            
	}
	public function deletecampaignbyuser()
    {
        $access=array("1","3");
        $this->checkaccess($access);
        $this->campaignaccess_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewmycampaign";
        $this->load->view("redirect",$data);
    }
    public function editcampaignsubmitbyuser()
    {
        $access=array("1","3");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("Name","Name","trim");
//        $this->form_validation->set_rules("startdate","Start Date","trim");
//        $this->form_validation->set_rules("testdate","Test Date","trim");
//        $this->form_validation->set_rules("publishingdate","Publishing Date","trim");
        $this->form_validation->set_rules("user","User","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data[ 'page' ] = 'editcampaignbyuser';
            $userid=$this->session->userdata('id');
            $campaignid=$this->input->post('id');
            $data['before'] = $this->campaignaccess_model->beforeedit($campaignid);
            $data['title']='Edit Campaigns';
            $this->load->view('template',$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $Name=$this->input->get_post("Name");
            $emailused=$this->input->get_post("email_used");
            $question=$this->input->get_post("question");
            $deadline=$this->input->get_post("deadline");
            $goals=$this->input->get_post("goals");
            $audience=$this->input->get_post("audience");
            $callactivate=$this->input->get_post("callactivate");
            $reqelem=$this->input->get_post("reqelem");
            $keywords=$this->input->get_post("keywords");
            $specific=$this->input->get_post("specific");
            $outline=$this->input->get_post("outline");
            $avoid=$this->input->get_post("avoid");
            $material=$this->input->get_post("material");
            $instructions=$this->input->get_post("instructions");
            $uorganization=$this->input->get_post("uorganization");
            $industryp=$this->input->get_post("industryp");
            $propositions=$this->input->get_post("propositions");
            $propositions1=$this->input->get_post("propositions1");
            $propositions2=$this->input->get_post("propositions2");
            $itrends=$this->input->get_post("itrends");
            $mcompetitors=$this->input->get_post("mcompetitors");
            $branding=$this->input->get_post("branding");
            $user=$this->session->userdata('id');
//            $startdate=$this->input->get_post("startdate");
//            $testdate=$this->input->get_post("testdate");
//            $publishingdate=$this->input->get_post("publishingdate");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="specificfile";
			$specificfile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$specificfile=$uploaddata['file_name'];
			}
            
            if($specificfile=="")
            {
            $specificfile=$this->campaignaccess_model->getspecificfilebycampaignid($id);
               // print_r($specificfile);
                $specificfile=$specificfile->specificfile;
            }
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="outlinefile";
			$outlinefile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$outlinefile=$uploaddata['file_name'];
			}
            
            if($outlinefile=="")
            {
            $outlinefile=$this->campaignaccess_model->getoutlinefilebycampaignid($id);
               // print_r($outlinefile);
                $outlinefile=$outlinefile->outlinefile;
            }
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="materialfile";
			$materialfile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$materialfile=$uploaddata['file_name'];
			}
            
            if($materialfile=="")
            {
            $materialfile=$this->campaignaccess_model->getmaterialfilebycampaignid($id);
               // print_r($materialfile);
                $materialfile=$materialfile->materialfile;
            }
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="brandingfile";
			$brandingfile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$brandingfile=$uploaddata['file_name'];
			}
            
            if($brandingfile=="")
            {
            $brandingfile=$this->campaignaccess_model->getbrandingfilebycampaignid($id);
               // print_r($brandingfile);
                $brandingfile=$brandingfile->brandingfile;
            }
            
            
//            $Name=$this->input->get_post("Name");
//            $startdate=$this->input->get_post("startdate");
//            $testdate=$this->input->get_post("testdate");
//            $publishingdate=$this->input->get_post("publishingdate");
//            $user=$this->input->get_post("user");
            
            if($this->campaignaccess_model->edit($id,$Name,$emailused,$question,$deadline,$goals,$audience,$callactivate,$reqelem,$keywords,$specific,$outline,$avoid,$material,$instructions,$uorganization,$industryp,$propositions,$propositions1,$propositions2,$itrends,$mcompetitors,$branding,$specificfile,$outlinefile,$materialfile,$brandingfile,$user)==0)
                $data["alerterror"]="New campaign could not be Updated.";
            else
                $data["alertsuccess"]="campaign Updated Successfully.";
            $data["redirect"]="site/viewmycampaign";
            $this->load->view("redirect",$data);
        }
    }
    
    
    public function previewcampaign()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $campaignid=$this->input->get('id');
        $data['table']=$this->campaignaccess_model->getcampaigntestbycampaignid($campaignid);
            $data[ 'page' ] = 'mycampaignteam';
           $data['title']='mycampaignteam';
            $this->load->view('template',$data);
   }
    
    public function resultsandanaltys()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
            $data[ 'page' ] = 'resultsandanaltys';
        $campaignid=$this->input->get_post("id");
        $userid=$this->session->userdata('id');
         $data['campaignid'] = $this->input->get_post("id");
        $data['campaigns'] = $this->campaignaccess_model->getcampaignbyuser($userid);
        $data['table']=$this->campaignaccess_model->getcampaignresults($campaignid);
           $data['title']='resultsandanaltys';
            $this->load->view('template',$data);
   }
    
    
	public function viewcampaigngroup()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'viewcampaigngroup';
        $campaignid=$this->input->get('id');
//        $data['table'] = $this->campaignaccess_model->getallgroup();
        $data['table'] = $this->campaignaccess_model->getallgroupbycampaign($campaignid);
        $data['before'] = $this->campaignaccess_model->beforeedit($campaignid);
        $data['selectedgroup']=$this->campaignaccess_model->getselectedcampaigngroupbycampaign($campaignid);
//        $data['campaigntestreports']=$this->campaignaccess_model->getcampaigntestreportbycampaign($campaignid);
        $data['campaigntestreports']=$this->campaignaccess_model->getcampaigntestreportbycampaign1($campaignid);
        $data['campaignresultreports']=$this->campaignaccess_model->getcampaignresultreportbycampaign($campaignid);
        $data['campaignid']=$this->input->get('id');
        $data['title']='Campaign Groups';
        $this->load->view('template',$data);
            
	}
    
	function changecampaigngroupstatustoactive()
	{
		$access = array("1","3");
		$this->checkaccess($access);
        $campaigngroupid=$this->input->get('campaigngroupid');
        $campaignid=$this->input->get('id');
		$this->campaignaccess_model->changecampaigngroupstatustoactive($campaigngroupid,$campaignid);
//        $data["redirect"]="site/viewcampaigngroup?id=".$campaignid;
        $data["redirect"]="site/moremycampaign?id=".$campaignid;
        $this->load->view("redirect2",$data);
	}
	function changecampaigngroupstatustoreject()
	{
		$access = array("1","3");
		$this->checkaccess($access);
        $campaigngroupid=$this->input->get('campaigngroupid');
        $campaignid=$this->input->get('id');
		$this->campaignaccess_model->changecampaigngroupstatustoreject($this->input->get('campaigngroupid'));
//        $data["redirect"]="site/viewcampaigngroup?id=".$campaignid;
        $data["redirect"]="site/viewcampaigngroupsbycampaign?id=".$campaignid;
        $this->load->view("redirect2",$data);
	}
	function changecampaignstatustopublishcomplete()
	{
		$access = array("1","3");
		$this->checkaccess($access);
        $campaignid=$this->input->get('id');
		$this->campaignaccess_model->changecampaignstatustopublishcomplete($this->input->get('id'));
        $data["redirect"]="site/viewcampaigngroup?id=".$campaignid;
        $this->load->view("redirect2",$data);
	}
	function changecampaignstatustoabtestcomplete()
	{
		$access = array("1","3");
		$this->checkaccess($access);
        $campaignid=$this->input->get('id');
		$this->campaignaccess_model->changecampaignstatustoabtestcomplete($this->input->get('id'));
        $data["redirect"]="site/viewcampaigngroup?id=".$campaignid;
        $this->load->view("redirect2",$data);
	}
    
	public function viewcalender()
	{
		$access = array("1","2","3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'viewcalender';
        $data['title']='Calender';
        $this->load->view('template',$data);
	}
	public function createcampaign()
	{
		$access = array("3");
		$this->checkaccess($access);
        $data[ 'page' ] = 'createcampaign';
        $data['title']='Create Campaign';
        $this->load->view('template',$data);
	}
	public function email()
	{
		$this->load->library('email');
		$this->email->from('your@example.com', 'campaign');
		$this->email->to('jagruti@wohlig.com'); 

		$this->email->subject('Test');
		$this->email->message('Testing the email');	

		$this->email->send();

		echo $this->email->print_debugger();
	}
    public function createcampaignsubmit() 
    {
        $access=array("3");
        $this->checkaccess($access);
        print_r($_POST);
        $this->form_validation->set_rules("Name","Name","trim|required");
        $this->form_validation->set_rules("email_used","email_used","trim");
        $this->form_validation->set_rules("question","question","trim");
        $this->form_validation->set_rules("deadline","deadline","trim");
//        $this->form_validation->set_rules("startdate","Start Date","trim|required");
//        $this->form_validation->set_rules("testdate","Test Date","trim|required");
//        $this->form_validation->set_rules("publishingdate","Publishing Date","trim|required");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createcampaign";
            $data["title"]="Create campaign";
//            $data["status"]=$this->campaign_model->getcampaignstatusdropdown();
            $this->load->view("template",$data);
        }
        else
        {
            $Name=$this->input->get_post("Name");
            $emailused=$this->input->get_post("email_used");
            $question=$this->input->get_post("question");
            $deadline=$this->input->get_post("deadline");
            $goals=$this->input->get_post("goals");
            $audience=$this->input->get_post("audience");
            $callactivate=$this->input->get_post("callactivate");
            $reqelem=$this->input->get_post("reqelem");
            $keywords=$this->input->get_post("keywords");
            $specific=$this->input->get_post("specific");
            $outline=$this->input->get_post("outline");
            $avoid=$this->input->get_post("avoid");
            $material=$this->input->get_post("material");
            $instructions=$this->input->get_post("instructions");
            $uorganization=$this->input->get_post("uorganization");
            $industryp=$this->input->get_post("industryp");
            $propositions=$this->input->get_post("propositions");
            $propositions1=$this->input->get_post("propositions1");
            $propositions2=$this->input->get_post("propositions2");
            $itrends=$this->input->get_post("itrends");
            $mcompetitors=$this->input->get_post("mcompetitors");
            $branding=$this->input->get_post("branding");
            $user=$this->session->userdata('id');
//            $startdate=$this->input->get_post("startdate");
//            $testdate=$this->input->get_post("testdate");
//            $publishingdate=$this->input->get_post("publishingdate");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="specificfile";
			$specificfile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$specificfile=$uploaddata['file_name'];
			}
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="outlinefile";
			$outlinefile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$outlinefile=$uploaddata['file_name'];
			}
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="materialfile";
			$materialfile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$materialfile=$uploaddata['file_name'];
			}
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$filename="brandingfile";
			$brandingfile="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$brandingfile=$uploaddata['file_name'];
			}
            
            $campaignid=$this->campaignaccess_model->create($Name,$emailused,$question,$deadline,$goals,$audience,$callactivate,$reqelem,$keywords,$specific,$outline,$avoid,$material,$instructions,$uorganization,$industryp,$propositions,$propositions1,$propositions2,$itrends,$mcompetitors,$branding,$specificfile,$outlinefile,$materialfile,$brandingfile,$user);
            if($campaignid==0)
            $data["alerterror"]="New Campaign could not be created.";
            else{
            	$data["alertsuccess"]="Campaign created Successfully.";
				
				
				$this->load->library('email');
				$this->email->from('campaign@campaign.com', 'campaign');
				$this->email->to($emailused); 

				$this->email->subject('Campaign Star');
				$this->email->message('<html>
				<head>
				<title>Campaign star</title>
				</head>
				<body>
				<p>Dear '.$Name.'</p>
				<p>We have received your campaign brief and have shared it with the best talent.</p>
				<p>Soon we will be updating you with the teams which would like to take up your campaign.</p>
				<p>Warm regards,</p>
				<p>Team Campaignstars</p>
				</body>
				</html>');	

				$this->email->send();

				echo $this->email->print_debugger();
				
				
			}
            $data["redirect"]="site/viewcampaigngroupsbycampaign?id=$campaignid";
            $this->load->view("redirect2",$data);
        }
    }
    
    public function viewcampaigngroupsbycampaign()
    {
        $access=array("3");
        $this->checkaccess($access);
//        $data["page"]="viewcampaigngroupsbycampaign";
        $data["page"]="selectteama";
        $campaignid=$this->input->get('id');
        $data['campaignid']=$campaignid;
        $data['before']=$this->campaignaccess_model->beforeedit($campaignid);
        $data['table'] = $this->campaignaccess_model->getallgroupbycampaign($campaignid);
       // $data['selectedgroup']=$this->campaignaccess_model->getselectedcampaigngroupbycampaign($campaignid);
//        print_r($data["base_url"]);
        $data["title"]="View Groups";
        $this->load->view("template",$data);
    }
    
    public function createcampaigngroup()
    {
           $access=array("3");
           $this->checkaccess($access);
        
//           $data["status"]=$this->CampaignGroup_model->getstatusdropdown();
           $data["group"]=$this->campaignaccess_model->getgroupdropdown();
           $data['campaign']=$this->input->get('id');
           $data["page"]="createcampaigngroupbycampaign";
           $data["title"]="Create Campaign Group";
           $this->load->view("template",$data);
    }
    public function createcampaigngroupsubmit() 
    {
        $access=array("3");
        $this->checkaccess($access);
         $campaign=$this->input->get_post("campaign");
        $this->form_validation->set_rules("order","order","trim");
        $this->form_validation->set_rules("status","Status","trim");
        $this->form_validation->set_rules("group","group","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
           $data["group"]=$this->campaignaccess_model->getgroupdropdown();
           $data['campaign']=$this->input->get_post('campaign');
            $data["page"]="createCampaignGroup";
            $data["title"]="Create CampaignGroup";
            $this->load->view("template",$data);
        }
        else
        {
            $campaign=$this->input->get_post("campaign");
            $order=$this->input->get_post("order");
            $status=$this->input->get_post("status");
            $group=$this->input->get_post("group");
            if($this->campaigngroup_model->create($campaign,$order,$status,$group)==0)
            $data["alerterror"]="New Campaign Group could not be created.";
        else
            $data["alertsuccess"]="Campaign Group created Successfully.";
             $data["redirect"]="site/viewcampaigngroupsbycampaign?id=".$campaign;
        $this->load->view("redirect2",$data);
        }
    }
    

}
?>