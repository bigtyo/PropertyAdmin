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
    
    public function getUnverifiedListingByOfficeId($officeid)
    {
        $this->db->from('view_listing_marketing');
        
        $this->db->where(array(
            'office_id' => $officeid,
            'statusdataid' => 1
            ));
        $this->db->where('statusjualid !=',1);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getNotVerifiedListing($officeid,$listingid){
        $query = $this->db->get_where('view_listing_marketing', array(
            'office_id' => $officeid,
            'listingid' => $listingid
            ));
        
        return $query->row();
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
            $q_string .= " AND KONDISI = '$row->KONDISI'";
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
        $this->db->from('view_listing');
        $this->db->where('listingid = '.$listingid);
        $query = $this->db->get();
        return $query->row();
    }
    
    
    public function getContact($listingid,$marketingid)
    {
        $isOwner = $this->checkOwnershipListing($listingid, $marketingid);
        
        if($isOwner)
        {
            $this->db->from('marketing');
            $this->db->join('user','marketing.marketingid = user.marketingid');
            $this->db->join('office','marketing.officeid = office.officeid');
            $this->db->where('marketing.MARKETINGID = '.$marketingid);
            $this->db->select('user.*,office.NAMA as kantor');
            $query = $this->db->get();
            
            return $query->result();
        }
        else{
            $this->db->from('daftarcustomermarketing');
            $this->db->join('listing','listing.customerid = daftarcustomermarketing.customerid');
            $this->db->join('marketing','marketing.marketingid = daftarcustomermarketing.marketingid');
            $this->db->join('user','user.marketingid = daftarcustomermarketing.customerid');
            $this->db->join('office','marketing.officeid = office.officeid');
            $this->db->select('user.*,office.NAMA as kantor,office.telepon as telepon_kantor');
            $this->db->where('listing.listingid = '.$listingid);
            
            $query = $this->db->get();
            
            return $query->result();
        }
    }
    
    public function getVendor($listingid,$marketingid)
    {
        $isOwner = $this->checkOwnershipListing($listingid, $marketingid);
        
        if($isOwner)
        {
            $this->db->from('customer');
            $this->db->join('listing','listing.customerid = customer.customerid');
            $this->db->where('listing.listingid = '.$listingid);
            
            $this->db->select('customer.*');
            $query = $this->db->get();
            
            return $query->row();
        }
        else
        {
            $this->db->from('daftarcustomermarketing');
            $this->db->join('listing','listing.customerid = daftarcustomermarketing.customerid');
            $this->db->join('marketing','marketing.marketingid = daftarcustomermarketing.marketingid');
            $this->db->join('user','user.marketingid = daftarcustomermarketing.customerid');
            $this->db->join('office','marketing.officeid = office.officeid');
            $this->db->select('user.*,office.NAMA as kantor,office.telepon as telepon_kantor');
            $this->db->where('listing.listingid = '.$listingid);
            
            $query = $this->db->get();
            
            return $query->result();
        }
            
    }
    
    private function checkOwnershipListing($listingid,$marketingid)
    {
        $this->db->from('daftarlistingmarketing');
        $this->db->where('LISTINGID = '.$listingid);
        $this->db->where('MARKETINGID = '.$marketingid);
        $query = $this->db->get();
        
        return $query->num_rows() > 0;
    }
    
    public function getAktivitas($listingid,$marketingid)
    {
        $this->db->from('aktivitas');
        $this->db->join('jenis_aktivitas','jenis_aktivitas.jenisid = aktivitas.jenis');
        $this->db->select('aktivitas.*,jenis_aktivitas.AKTIVITAS');
        $this->db->where(array(
            "LISTINGID" => $listingid,
            "MARKETINGID" => $marketingid
        ));
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getAktivitasById($aktivitasid)
    {
        $query = $this->db->get_where('aktivitas',array(
            "AKTIVITASID" => $aktivitasid
        ));
        
        return $query->row();
    }
    
    public function getPromosiById($promosiid)
    {
        $query = $this->db->get_where('promosi',array(
            "PROMOSIID" => $promosiid
        ));
        
        return $query->row();
    }
    
    public function getPromosi($listingid,$marketingid)
    {
        $this->db->from('promosi');
        $this->db->join('jenis_promosi','jenis_promosi.jenisid = promosi.jenispromosiid');
        $this->db->select('promosi.*,jenis_promosi.PROMOSI');
        $this->db->where(array(
            "LISTINGID" => $listingid,
            "MARKETINGID" => $marketingid
        ));
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function getJenisAktivitas(){
        $this->db->from('jenis_aktivitas');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getStatusJual(){
        $this->db->from('status_jual');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function getTipeProperty(){
        $this->db->from('tipe_property');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function getHadap()
    {
        $this->db->from('hadap');
        $query = $this->db->get();
        
        return $query->result();
        
    }
    
    public function getTipeListing(){
        $this->db->from('tipe_listing');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function getStatusData(){
        $this->db->from('status_data');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function getJenisPromosi()
    {
        $this->db->from('jenis_promosi');
        $query = $this->db->get();
        return $query->result();
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
    
    
    public function saveAktivitas($data)
    {
        $this->db->insert('aktivitas',$data);
        return $this->db->insert_id();
    }
    
    public function updateAktivitas($aktivitasid,$data){
        $this->db->where('AKTIVITASID',$aktivitasid);
        $this->db->update('aktivitas',$data);
    }
    
    public function savePromosi($data)
    {
        $this->db->insert('promosi',$data);
        return $this->db->insert_id();
    }
    
    public function updatePromosi($promosiid,$data)
    {
        $this->db->where('PROMOSIID',$promosiid);
        $this->db->update('promosi',$data);
    }
    
    public function getTipePropertyList()
    {
        $query = $this->db->get('tipe_property');
        
        return $query->result();
    }
    
    public function getPropinsiList()
    {
        $query = $this->db->get('propinsi');
        
        return $query->result();
    }
    
    public function getKotaList($propinsiid)
    {
        $query = $this->db->get_where('kota',array(
            'propinsiid' => $propinsiid
        ));
        
        return $query->result();
    }
    
    public function getAreaList($kotaid)
    {
        $query = $this->db->get_where('area',array(
            'kotaid' => $kotaid
        ));
        
        return $query->result();
    }
    
    public function getLokasiList($areaid)
    {
        $query = $this->db->get_where('lokasi',array(
            'areaid' => $areaid
        ));
        
        return $query->result();
    }
    
    public function getHadapList()
    {
        $query = $this->db->get('hadap');
        
        return $query->result();
    }
    
    public function getTempat($id,$tipe)
    {
        $data = null;
        if($tipe == 'Kota')
        {
            $query = $this->db->get_where($tipe,array(
                'PROPINSIID' => $id
            ));
            
            $tempdata = $query->result();
            $i = 0;
            foreach ($tempdata as $obj)
            {
                $data[$i] = array(
                  'id' => $obj->KOTAID,
                  'nama' => $obj->NAMA_KOTA
                );
                $i++;
            }
        }

        if($tipe == 'Area')
        {
            $query = $this->db->get_where($tipe,array(
                'KOTAID' => $id
            ));
            
            $tempdata = $query->result();
            $i = 0;
            foreach ($tempdata as $obj)
            {
                $data[$i] = array(
                  'id' => $obj->AREAID,
                  'nama' => $obj->NAMA_AREA
                );
                $i++;
            }
        }

        if($tipe == 'Lokasi')
        {
            $query = $this->db->get_where($tipe,array(
                'AREAID' => $id
            ));
            
            $tempdata = $query->result();
            $i = 0;
            foreach ($tempdata as $obj)
            {
                $data[$i] = array(
                  'id' => $obj->LOKASIID,
                  'nama' => $obj->NAMA_LOKASI
                );
                $i++;
            }
        }
        
        return $data;
    }
}
?>