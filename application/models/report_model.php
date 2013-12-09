<?php
class report_model extends CI_Model
{
    public function __construct() {
        
        
        $this->load->database();
    }
    
    public function listing_terjual($officeid,$date_awal = null, $date_akhir =null)
    {
        $this->db->from('listing_terjual');
        $this->db->where('tanggal >=',$date_awal);
        $this->db->where('tanggal <=',$date_akhir);
        $this->db->where('officeid',$officeid);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function entry_baru_marketing($officeid,$date_awal = null,$date_akhir = null)
    {
        $query = "select u.NAMA,u.ALAMAT,u.EMAIL,u.TELEPON ,
                    getListingCount(u.marketingid,'$date_awal','$date_akhir') as jml_listing,
                    getCustomerCount(u.marketingid,'$date_awal','$date_akhir') as jml_customer
                    from user u join marketing m on u.marketingid = m.marketingid
                    join office o on o.officeid = m.officeid
                    where o.officeid = $officeid";
        return $this->db->query($query)->result();
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
