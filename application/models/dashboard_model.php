<?php
class dashboard_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getListingTerjual($officeid,$date_awal,$date_akhir)
    {
        $where_s = "";
        if($officeid != null)
        {
            $where_s = "AND officeid = $officeid";
        }
        $query = "SELECT  DATE_FORMAT(tanggal,'%Y-%m-%d') as waktu,COUNT(*) as jml 
                    FROM listing_terjual where tanggal >= '$date_awal' AND tanggal <= '$date_akhir' ".$where_s.
                    " group by tanggal";
        
        return $this->db->query($query)->result();
        
    }
    
    public function getListingBaru($officeid,$date_awal,$date_akhir)
    {
        $query = "select DATE_FORMAT(l.waktuupdate,'%Y-%m-%d') as waktu, count(*) as jml
                    from listing l 
                    join daftarlistingmarketing dlm on dlm.listingid = l.listingid
                    join marketing m on m.marketingid = dlm.marketingid

                    where m.officeid = $officeid and l.WaktuUpdate >= '$date_awal' and l.WaktuUpdate <= '$date_akhir'
                    group by l.waktuupdate";
        //echo $query;
        return $this->db->query($query)->result();
    }
    
    public function getAktivitasBaru($time,$last){
        if($last == "")
        {
            $_where = 'waktuupdate <= "'.$time.'"';
        }  
        else {
            $_where = 'waktuupdate <=  "'.$time.'" AND waktuupdate >= "'.$time.'"';
        }
        $query = 'select concat(u.nama," mendaftarkan listing baru") as feed,
                    concat("/listing/",l.listingid) as link  
                    from listing l 
                    join daftarlistingmarketing dlm on dlm.listingid = l.listingid
                    join marketing m on dlm.marketingid = m.marketingid
                    join user u on m.marketingid = u.marketingid
                    where '.$_where.' 
                    UNION
                    select concat(u.nama," mendaftarkan customer baru") as feed,
                    concat("/customer/",c.customerid) as link  
                    from customer c 
                    join daftarcustomermarketing dcm on dcm.customerid = c.customerid
                    join marketing m on dcm.marketingid = m.marketingid
                    join user u on m.marketingid = u.marketingid
                    where '.$_where.'LIMIT 0,10';
        
        return $this->db->query($query)->result();
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
