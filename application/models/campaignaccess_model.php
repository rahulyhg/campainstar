<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class campaignaccess_model extends CI_Model
{
    
    
    public function create($Name,$emailused,$question,$deadline,$goals,$audience,$callactivate,$reqelem,$keywords,$specific,$outline,$avoid,$material,$instructions,$uorganization,$industryp,$propositions,$propositions1,$propositions2,$itrends,$mcompetitors,$branding,$specificfile,$outlinefile,$materialfile,$brandingfile,$user)
    {
        $data=array(
            "Name" => $Name,
            "emailused" => $emailused,
            "question" => $question,
            "deadline" => $deadline,
            "goals" => $goals,
            "audience" => $audience,
            "callactivate" => $callactivate,
            "reqelem" => $reqelem,
            "keywords" => $keywords,
            "specific" => $specific,
            "outline" => $outline,
            "avoid" => $avoid,
            "material" => $material,
            "instructions" => $instructions,
            "uorganization" => $uorganization,
            "industryp" => $industryp,
            "propositions" => $propositions,
            "propositions1" => $propositions1,
            "propositions2" => $propositions2,
            "itrends" => $itrends,
            "mcompetitors" => $mcompetitors,
            "branding" => $branding,
            "specificfile" => $specificfile,
            "outlinefile" => $outlinefile,
            "materialfile" => $materialfile,
            "brandingfile" => $brandingfile,
            "user" => $user,
            "status"=>1
        );
        $query=$this->db->insert( "campaign_campaign", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    }
    
//    public function create($Name,$startdate,$testdate,$publishingdate,$user)
//    {
//        $data=array(
//            "Name" => $Name,
//            "startdate" => $startdate,
//            "testdate" => $testdate,
//            "publishingdate" => $publishingdate,
//            "user" => $user,
//            "status"=>1
//        );
//        $query=$this->db->insert( "campaign_campaign", $data );
//        $id=$this->db->insert_id();
//        if(!$query)
//            return  0;
//        else
//            return  1;
//    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("campaign_campaign")->row();
        return $query;
    }
    function getsinglecampaign($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("campaign_campaign")->row();
        return $query;
    }
    
    function getcampaignbyuser($id)
    {
        $query=$this->db->query("SELECT `campaign_campaign`.`id` as `campaignid`,`campaign_campaign`.`Name`,`campaign_campaign`.`startdate`,`campaign_campaignresult`.* FROM `campaign_campaign` LEFT OUTER JOIN `campaign_campaignresult` ON `campaign_campaign`.`id`=`campaign_campaignresult`.`campaign` WHERE `user`='$id'")->result();
        return $query;
    }
    public function edit($id,$Name,$emailused,$question,$deadline,$goals,$audience,$callactivate,$reqelem,$keywords,$specific,$outline,$avoid,$material,$instructions,$uorganization,$industryp,$propositions,$propositions1,$propositions2,$itrends,$mcompetitors,$branding,$specificfile,$outlinefile,$materialfile,$brandingfile,$user)
    {
//        $data=array("Name" => $Name,"startdate" => $startdate,"testdate" => $testdate,"publishingdate" => $publishingdate,"user" => $user);
        $data=array(
            "Name" => $Name,
            "emailused" => $emailused,
            "question" => $question,
            "deadline" => $deadline,
            "goals" => $goals,
            "audience" => $audience,
            "callactivate" => $callactivate,
            "reqelem" => $reqelem,
            "keywords" => $keywords,
            "specific" => $specific,
            "outline" => $outline,
            "avoid" => $avoid,
            "material" => $material,
            "instructions" => $instructions,
            "uorganization" => $uorganization,
            "industryp" => $industryp,
            "propositions" => $propositions,
            "propositions1" => $propositions1,
            "propositions2" => $propositions2,
            "itrends" => $itrends,
            "mcompetitors" => $mcompetitors,
            "branding" => $branding,
            "specificfile" => $specificfile,
            "outlinefile" => $outlinefile,
            "materialfile" => $materialfile,
            "brandingfile" => $brandingfile,
            "user" => $user,
            "status"=>1
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "campaign_campaign", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `campaign_campaign` WHERE `id`='$id'");
        return $query;
    }
    
    function getallgroup()
    {
        $query=$this->db->query("SELECT `campaign_group`.`id`, `campaign_group`.`Name`, `campaign_group`.`designer`, `campaign_group`.`contentwriter`,`tab1`.`name` as `designername`,`tab2`.`name` as `contentwritername`
FROM `campaign_group` 
LEFT OUTER JOIN `user` as`tab1` ON `tab1`.`id`=`campaign_group`.`designer` 
LEFT OUTER JOIN `user` as`tab2` ON `tab2`.`id`=`campaign_group`.`contentwriter`")->result();
        return $query;
    }
    function getallgroupbycampaign($id)
    {
        $query=$this->db->query("SELECT `campaign_group`.`name` as `name` ,`campaign_group`.`id` as `id` ")->result();
        return $query;
    }
    
    function getselectedcampaigngroupbycampaign($id)
    {
        $query=$this->db->query("SELECT `campaign_campaigngroup`.`id`, `campaign_campaigngroup`.`campaign`, `campaign_campaigngroup`.`Timestamp`,`campaign_campaigngroup`. `order`, `campaign_campaigngroup`.`status`, `campaign_campaigngroup`.`group`,`campaign_group`.`name` as `groupname` 
FROM `campaign_campaigngroup` 
LEFT OUTER JOIN `campaign_group` ON `campaign_campaigngroup`.`group`=`campaign_group`.`id`
LEFT OUTER JOIN `campaigngroupstatus` ON `campaign_campaigngroup`.`status`=`campaigngroupstatus`.`id`
WHERE `campaign_campaigngroup`.`campaign`='$id' AND `campaign_campaigngroup`.`status`=1 LIMIT 0,2")->result();
        return $query;
    }
    
    function getcampaigntestreportbycampaign($id)
    {
        $query=$this->db->query("SELECT `campaign_campaigntest`.`id`, `campaign_campaigntest`.`campaign`, `campaign_campaigntest`.`Timestamp`, `campaign_campaigntest`.`group`, `campaign_campaigntest`.`reports` ,`campaign_group`.`name` as `groupname`
FROM `campaign_campaigntest` 
LEFT OUTER JOIN `campaign_group` ON `campaign_campaigntest`.`group`=`campaign_group`.`id`
WHERE `campaign_campaigntest`.`campaign`='$id' LIMIT 0,2")->result();
        return $query;
    }
    
    function getcampaigntestreportbycampaign1($id)
    {
        $query=$this->db->query("SELECT `campaign_campaigntest`.`id`, `campaign_campaigntest`.`campaign`, `campaign_campaigntest`.`Timestamp`, `campaign_campaigntest`.`group`, `campaign_campaigntest`.`reports` ,`campaign_group`.`name` as `groupname`
FROM `campaign_campaigntest` 
LEFT OUTER JOIN `campaign_group` ON `campaign_campaigntest`.`group`=`campaign_group`.`id`
WHERE `campaign_campaigntest`.`campaign`='$id' LIMIT 0,2")->result();
        return $query;
    }
    
    function getcampaignresultreportbycampaign($id)
    {
        $query=$this->db->query("SELECT `campaign_campaignresult`.`id`, `campaign_campaignresult`.`Timestamp`, `campaign_campaignresult`.`reports`,`campaign_campaignresult`. `campaign`,`campaign_campaignresult`. `group`,`campaign_group`.`name` as `groupname` 
FROM `campaign_campaignresult` 
LEFT OUTER JOIN `campaign_group` ON `campaign_campaignresult`.`group`=`campaign_group`.`id`
WHERE `campaign_campaignresult`. `campaign`='$id'")->row();
        return $query;
    }
    
	function changecampaigngroupstatustoactive($id,$campaign)
	{
		
        $querycheck=$this->db->query("SELECT * FROM `campaign_campaigngroup` WHERE `campaign`='$campaign' AND `status`=1")->result();
        $length=sizeof($querycheck);
//        echo $length;
        if($length >= 2)
        {
            return 0;
        }
        else
        {
            $data  = array(
                'status' =>1
            );
            $this->db->where('id',$id);
            $query=$this->db->update( 'campaign_campaigngroup', $data );
            
            $querycheck=$this->db->query("INSERT INTO `wohligco_campaign`.`campaign_campaigngroup` (`id`, `campaign`, `Timestamp`, `order`, `status`, `group`, `image`, `htmldata`) VALUES (NULL, '$campaign', CURRENT_TIMESTAMP, '', '1', '$id', '', '');");
            $length=sizeof($querycheck);
    //        echo $length;
            if($length==2)
            {
                $queryupdatecampaignstatus=$this->db->query("UPDATE `campaign_campaign` SET `status`=2 WHERE `id`='$campaign'");
            }
            
            if(!$query)
                return  0;
            else
                return  1;
        }
	}
	function changecampaigngroupstatustoreject($id)
	{
		
		$data  = array(
			'status' =>2
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'campaign_campaigngroup', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	function changecampaignstatustoabtestcomplete($id)
	{
		
		$data  = array(
			'status' =>4
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'campaign_campaign', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	function changecampaignstatustopublishcomplete($id)
	{
		
		$data  = array(
			'status' =>6
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'campaign_campaign', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	function changecampaigngroupstatus($id)
	{
		$query=$this->db->query("SELECT `status` FROM `campaign_campaigngroup` WHERE `id`='$id'")->row();
		$status=$query->status;
		if($status==1)
		{
			$status=2;
		}
		else if($status==2)
		{
			$status=1;
		}
		$data  = array(
			'status' =>$status,
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'campaign_campaigngroup', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
    
      public function getgroupdropdown()
    {
       	$query=$this->db->query("SELECT * FROM  `campaign_group`")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->Name;
		}
	  return $return;
    }
     
	public function getspecificfilebycampaignid($id)
	{
		$query=$this->db->query("SELECT `specificfile` FROM `campaign_campaign` WHERE `id`='$id'")->row();
		
		
		return $query;
	}
	public function getoutlinefilebycampaignid($id)
	{
		$query=$this->db->query("SELECT `outlinefile` FROM `campaign_campaign` WHERE `id`='$id'")->row();
		
		
		return $query;
	}
	public function getmaterialfilebycampaignid($id)
	{
		$query=$this->db->query("SELECT `materialfile` FROM `campaign_campaign` WHERE `id`='$id'")->row();
		
		
		return $query;
	}
	public function getbrandingfilebycampaignid($id)
	{
		$query=$this->db->query("SELECT `brandingfile` FROM `campaign_campaign` WHERE `id`='$id'")->row();
		
		
		return $query;
	}
    
}
?>
