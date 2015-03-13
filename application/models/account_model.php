<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class account_model extends CI_Model
{
    public function campany($campanyname,$campanyurl,$uploadlogo,$selectindustry)
    {
        $data=array(
            "campanyname" =>$campanyname,
            "campanyurl" => $campanyurl,
            "logo" => $uploadlogo,
            "selectindustry" => $selectindustry
        );
        $query=$this->db->insert("company", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    
    }
       
     public function account($fullname,$emailaddresss,$choosepassword,$reenterpassword)
    {
        $data=array(
            "fullname" =>$fullname,
            "emailaddresss" => $emailaddresss,
            "choosepassword" => $choosepassword,
            "reenterpassword" => $reenterpassword
        );
        $query=$this->db->insert("acount", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    }
        public function viewmylist($file,$name)
    {
        $data=array(
            "fullname" =>$file,
            "emailaddresss" => $name
        );
        $query=$this->db->insert("list", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    }
}
?>