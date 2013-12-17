<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	


	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
        
        public function getAktivitasBaru($time,$last,$userid)
        {
            if($last == "")
            {
                $_where = 'waktuupdate <= "'.$time.'" AND u.userid = "'.$userid.'"';
            }  
            else {
                $_where = 'waktuupdate <=  "'.$time.'" AND waktuupdate >= "'.$last.'" AND u.userid = "'.$userid.'"';
            }
            $query = 'select concat(u.nama," mendaftarkan listing baru") as feed,
                        concat("/listing/",l.listingid) as link  ,waktuupdate,"listing" as type,u.nama,l.listingid as id
                        from listing l 
                        join daftarlistingmarketing dlm on dlm.listingid = l.listingid
                        join marketing m on dlm.marketingid = m.marketingid
                        join user u on m.marketingid = u.marketingid
                        where '.$_where.' LIMIT 0,5 
                        UNION
                        select concat(u.nama," mendaftarkan customer baru") as feed,
                        concat("/customer/",c.customerid) as link  ,waktuupdate,"customer" as type,u.nama, c.customerid as id
                        from customer c 
                        join daftarcustomermarketing dcm on dcm.customerid = c.customerid
                        join marketing m on dcm.marketingid = m.marketingid
                        join user u on m.marketingid = u.marketingid
                        where '.$_where.'LIMIT 0,5';

            return $this->db->query($query)->result();
        }
	
}
?>