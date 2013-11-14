<?php

class Listing_model extends CI_Model
{

    public function __construct()
    {
	$this->load->database();
    }
    
    public function getListingByMarketing($marketingid)
    {
        $query = $this->db->get_where('view_listing_marketing', array('marketingid' => $marketingid));
        return $query->result();
    }
    
    public function getListingByHistory($historyid,$marketingid)
    {
        $query = $this->db->get_where('history_pencarian',array(
            'HISTORYID' => $historyid
        ));
        
        $row = $query->row();
        
        //$q_string = "AND MARKETINGID = $marketingid";
        $q_string ="";
        if($row->LUAS_TANAH != null)
        {
            $q_string .= " AND LUAS_TANAH = $row->LUAS_TANAH";
        }
        
        if($row->LUAS_BANGUNAN != null)
        {
            $q_string .= " AND LUAS_BANGUNAN = $row->LUAS_BANGUNAN";
        }
        
        if($row->FURNISHED != null)
        {
            $q_string .= " AND FURNISHED = $row->FURNISHED";
        }
        
        if($row->KAMAR_TIDUR != null)
        {
            $q_string .= " AND KAMAR_TIDUR = $row->KAMAR_TIDUR";
        }
        
        if($row->LANTAI != null)
        {
            $q_string .= " AND LANTAI = $row->LANTAI";
        }
        
        if($row->DAYA_LISTRIK != null)
        {
            $q_string .= " AND DAYA_LISTRIK = $row->DAYA_LISTRIK";
        }
        
        if($row->SERTIFIKAT != null)
        {
            $q_string .= " AND SERTIFIKAT = '$row->SERTIFIKAT'";
        }
        
        if($row->KONDISI != null)
        {
            $q_string .= " AND KONDISI = $row->KONDISI";
        }
        
        if($row->KAMAR_MANDI != null)
        {
            $q_string .= " AND KAMAR_MANDI = $row->KAMAR_MANDI";
        }
        
        if($row->GARASI != null)
        {
            $q_string .= " AND GARASI = $row->GARASI";
        }
        
        if($row->JALUR_TELEPON != null)
        {
            $q_string .= " AND JALUR_TELEPON = $row->JALUR_TELEPON";
        }
        
        if($row->HARGA_AWAL > 0)
        {
            $q_string .= " AND HARGA >= $row->HARGA_AWAL";
        }
        
        if($row->HARGA_AKHIR > 0)
        {
             $q_string .= " AND HARGA <= $row->HARGA_AKHIR";
        }
        
        if($row->AREAID != NULL && $row->AREAID != 0)
        {
             $q_string .= " AND AREAID = $row->AREAID";
        }
        
        if($row->PROPINSIID != NULL && $row->PROPINSIID != 0)
        {
             $q_string .= " AND PROPINSIID = $row->PROPINSIID";
        }
        
        if($row->LOKASIID != NULL && $row->LOKASIID != 0)
        {
             $q_string .= " AND LOKASIID = $row->LOKASIID";
        }
        
        if($row->KOTAID != NULL && $row->KOTAID != 0)
        {
             $q_string .= " AND KOTAID = $row->KOTAID";
        }
        
        if($row->TIPEPROPID != NULL && $row->TIPEPROPID != 0)
        {
             $q_string .= " AND TIPEPROPID = $row->TIPEPROPID";
        }
        
        $query_s = "SELECT * from listing where CUSTOMERID <> $row->CUSTOMERID" . " " .$q_string;
        
        $query = $this->db->query($query_s);
        
        return $query->result();
    }
    
    public function getListings($tipedata,$officeid,$userid)
    {
       //$CI =& get_instance();
       //$tipedata == "";
       if($tipedata == "personal")
       {
           //$userid = $CI->session->userdata('userid');
           $query = $this->db->get_where('view_listing_marketing', array('userid' => $userid));
            return $query->result();
       }
       else if($tipedata == "office")
       {
           $query = $this->db->query("call get_office_id_by_userid('$userid')");
           $results = $query->row_array();
           $officeid = 0;
           foreach($results as $row)
           {
               $officeid = $row->officeid;
           }
           $query->free_results();
           $query = $this->db->get_where('view_listing_marketing', array('officeid' => $officeid));
           return $query->result();
       }
       else
       {
           $query = $this->db->query("SELECT distinct * from view_listing_marketing");
           return $query->result();
       }
    }
    
    public function getListing($listingid)
    {
        $query = $this->db->get_where('listing', array('listingid' => $listingid));
        return $query->row();
    }
    
    public function saveListing($listing = FALSE,$marketingid)
    {
        
        if(!$listing)
        {
            return FALSE;
        }
        
        $data = json_decode($listing,true);
        $this->db->from('listing');
        $this->db->where('alamat_lengkap',$data['ALAMAT_LENGKAP']);
        
        
        
        $isExist = $this->db->count_all_results();
        
        if($isExist == 0)
        {
            $this->db->insert('listing',$data);
            $listing_id = $this->db->insert_id();
            $daftar_listing_marketing = array(
                'MARKETINGID' => $marketingid,
                'LISTINGID' => $listing_id
            );
            $this->db->insert('daftarlistingmarketing',$daftar_listing_marketing);
        }
        else
        {
            $this->db->from('listing');
            $this->db->where('alamat_lengkap',$data['ALAMAT_LENGKAP']);
            $this->db->where('PROPINSIID',$data['PROPINSIID']);
            $this->db->where('KOTAID',$data['KOTAID']);
            $this->db->select("ListingId");
            $existingData = $this->db->get()->row();
            $listing_id = $existingData->ListingId;
            $daftar_listing_marketing = array(
                'MARKETINGID' => $marketingid,
                'LISTINGID' => $listing_id
            );
            
            $query = $this->db->get_where('daftarlistingmarketing',$daftar_listing_marketing);
                if($query->num_rows() == 0)
                {
                    $this->db->insert('daftarlistingmarketing',$daftar_listing_marketing);
                }
            
        }
        
        
        
        return $listing_id;
    }
    
}
?>