<?php

class Email_model extends CI_Model
{

    public function __construct()
    {
	$this->load->database();
    }
    
    public function getTemplateList($adminid)
    {
        $query = $this->db->get_where('email_template',array(
            "ADMINID" => $adminid
        ));
        
        return $query->result();
    }
    
    public function getTemplateListMarketing($marketingid)
    {
        $query = $this->db->query("select distinct et.*,ad.officeid 
                                    from email_template et join admin ad on ad.adminid = et.adminid
                                    join marketing m on m.officeid = ad.officeid
                                    where m.marketingid = $marketingid");
        return $query->result();
    }
    
    public function getTemplate($templateName)
    {
        $query = $this->db->from("email_template").like("NAMA",$templateName);
        return $query->row();
    }
}
?>
