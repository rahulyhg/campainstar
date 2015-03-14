<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller 
{
	
	
	public function details()
	{
        $data[ 'page' ] = 'account';
        $data['title']='Account';
        $this->load->view('template',$data);
    }
    public function createusersubmit() 
    {
//        print_r($_POST);
        $this->form_validation->set_rules("fullname","fullname","trim|required");
        $this->form_validation->set_rules("emailaddress","emailaddress","trim");
        $this->form_validation->set_rules("choosepassword","choosepassword","trim");
        $this->form_validation->set_rules("reenterpassword","reenterpassword","trim");
        $this->form_validation->set_rules("companyname","companyname","trim");
        $this->form_validation->set_rules("companyurl","companyurl","trim");
        $this->form_validation->set_rules("industry","industry","trim");
        $this->form_validation->set_rules("emailsystem","emailsystem","trim");
        $this->form_validation->set_rules("guidline","guidline","trim");
        $this->form_validation->set_rules("emailsystem2","emailsystem2","trim");
        $this->form_validation->set_rules("brandguidlines","brandguidlines","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="account";
            $data["title"]="Account";
            $this->load->view("template",$data);
        }
        else
        {
        $fullname=$this->input->get_post("fullname");
        $emailaddress=$this->input->get_post("emailaddress");
        $choosepassword=$this->input->get_post("choosepassword");
        $reenterpassword=$this->input->get_post("reenterpassword");
        $companyname=$this->input->get_post("companyname");
        $companyurl=$this->input->get_post("companyurl");
        $industry=$this->input->get_post("industry");
        $emailsystem=$this->input->get_post("emailsystem");
        $guidline=$this->input->get_post("guidline");
        $emailsystem2=$this->input->get_post("emailsystem2");
        $brandguidlines=$this->input->get_post("brandguidlines");
            
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$filename="companylogo";
		$companylogo="";
		if (  $this->upload->do_upload($filename))
		{
            $uploaddata = $this->upload->data();
            $companylogo=$uploaddata['file_name'];
		}
               
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$filename="guidlinesfile";
		$guidlinesfile="";
		if (  $this->upload->do_upload($filename))
		{
            $uploaddata = $this->upload->data();
            $guidlinesfile=$uploaddata['file_name'];
		}
            
        $campid=$this->user_model->createuser($fullname,$emailaddress,$choosepassword,$reenterpassword,$companyname,$companyurl,$industry,$emailsystem,$guidline,$emailsystem2,$brandguidlines,$companylogo,$guidlinesfile);
        
        if($campid==0)
        {
           $data["redirect"]="user/details";
        }
        else
        {
            $data["alertsuccess"]="User created Successfully.";
            $data["redirect"]="site/createcampaign";
        }
        $this->load->view("redirect",$data);
    }
    }
    
}
//EndOfFile
?>