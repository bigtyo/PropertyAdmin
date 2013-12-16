<?php
class admin_model extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }
    
    public function getMarketing($username)
    {
        
        $query = $this->db->query("call get_office_id_by_userid('$username')");
        $results = $query->row();
        $officeid = $results->offid;
        $this->db->reconnect();
        $queryMarketing = $this->db->query("SELECT m.MARKETINGID,u.NAMA from marketing m join user u on u.marketingid = m.marketingid  where m.officeid = $officeid");
        
        return $queryMarketing->result();
    }
    
    public function getDokumenList($officeid)
    {
        $query = $this->db->get_where('dokumen',array(
            'officeid' => $officeid
        ));
        
        return $query->result();
    }
    
    public function addDokumen($dokumen)
    {
        $this->db->insert('dokumen',$dokumen);
    }
    
    public function updateDokumen($dokumen,$id)
    {
        $this->db->where('dokumenid',$id);
        $this->db->update('dokumen',$dokumen);
        
    }
    
    public function getDokumen($id)
    {
        $query = $this->db->get_where('dokumen',array(
            'dokumenid' => $id
        ));
        
        return $query->row();
    }
    
    public function getLastHotpick($recentday = 7)
    {
        $today = new DateTime();
        $today->add(new DateInterval('P'.$recentday.'D'));
        
        
        $date = date_format($today, 'Y-m-d');
        
        $query_s = "select * from hot_pick_list where tanggal >= '".$date."'";
        
        $res = $this->db->query($query_s)->row();
        if($res == null)
        {
            $this->db->insert('hot_pick_list',array(
                'tanggal' => $date
            ));
            $query_s = "select * from hot_pick_list where tanggal >= '".$date."'";
        
            $res = $this->db->query($query_s)->row();
        }
        $data['tanggal'] = date_format($today, 'd-m-Y');
        $data['listid'] = $res->HOT_PICK_LIST_ID;
        if($res != null)
        {
            $query_final = $this->db->get_where('view_hot_pick',array(
                'hot_pick_list_id' => $res->HOT_PICK_LIST_ID
            ));
            
            $data['listings'] = $query_final->result();
            
        }else
        {
            $data['listings'] = null;
            
        }
        return $data;
        
    }
    
    public function getRecentList($officeid,$recentday = 7)
    {
        $today = new DateTime();
        $today->sub(new DateInterval('P'.$recentday.'D'));
        
        $today2 = new DateTime();
        $today2->add(new DateInterval('P'.$recentday.'D'));
        
        
        $date2 = date_format($today2, 'Y-m-d');
        
        $date = date_format($today, 'Y-m-d');
    
        $query_s = "select * from view_listing_marketing 
                    where office_id = $officeid and waktuupdate >= '".$date."' and waktuupdate <= '".$date2."'";
        
        $query_final = $this->db->query($query_s);
        
        return $query_final->result();
    }
    
    public function addHotPick($listings,$adminid,$hotpicklistid)
    {
        
        
        
        foreach($listings as $listingid)
        {
            $this->db->insert('hot_pick',array(
                'hot_pick_list_id' => $hotpicklistid,
                'listingid' => $listingid,
                'adminid' => $adminid
            ));
        }
        
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
