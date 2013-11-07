<?php
class Customer_model extends CI_Model
{

    public function __construct()
    {
	$this->load->database();
    }
    
    public function get_customers_list($param = FALSE,$begin = -1,$count = -1)
	{
		if ($param === FALSE)
		{
			
			return null;
		}
                
                // is marketing
                $this->db->from("Customer");
                $this->db->join("DaftarCustomerMarketing","DaftarCustomerMarketing.CustomerId = Customer.CustomerId");
                $this->db->join("Marketing","Marketing.MarketingId = DaftarCustomerMarketing.MarketingId");
                $this->db->join("User","Marketing.MarketingId = User.MarketingId");
                $this->db->select("Customer.*,DATE_FORMAT(Customer.TANGGAL_LAHIR,'%d-%m-%Y') as TGL_LAHIR",false);
                
                if(empty($param['marketingid']))
                {
                    $this->db->where("User.UserId",$param['userid']);
                }else
                {
                    $this->db->where("Marketing.MarketingId",$param['marketingid']);
                }
                
                if($begin != -1)
                {
                    $this->db->limit($count,$begin);
                }
                
                
                $query = $this->db->get();
                // is admin
                
                // is principal
                
		
		return $query->result();
	}
        
        public function addCustomer($customerData = FALSE,$MarketingId)
        {
            if($customerData == FALSE)
            {
                return false;
            }
            
            $data = json_decode($customerData,true);
            $this->db->start_cache();
            $this->db->from('Customer');
            $this->db->where('Email',$data['EMAIL']);
            $this->db->or_where('Telepon',$data['TELEPON']);
            $this->db->stop_cache();
            $isExist = $this->db->count_all_results();
            
            if($isExist == 0)
            {
                $this->db->insert('Customer',$data);
                $customer_id = $this->db->insert_id();
                
                
            }else
            {
                $this->db->select("CustomerId");
                $existingData = $this->db->get()->row();
                $customer_id = $existingData->CustomerId;
                
            }
            $customer_baru = array(
                    'MarketingId' => $MarketingId,
                    'CustomerId' => $customer_id
            );
            if(isset($customer_baru)){
                $this->db->flush_cache();
                $query = $this->db->get_where('DaftarCustomerMarketing',$customer_baru);
                if($query->num_rows() == 0)
                {
                    $this->db->insert('DaftarCustomerMarketing',$customer_baru);
                }
                
            }
            
            return $customer_id;
        }
        
       
        
        public function update_customer($data)
        {
            if($data == FALSE)
            {
                return null;
            }
            
            
        }
        
        public function getCustomer($id = FALSE,$marketingid)
        {
            if(!$id)
            {
                return false;
            }
            else
            {
                $this->db->from("Customer");
                $this->db->join("DaftarCustomerMarketing","DaftarCustomerMarketing.CustomerId = Customer.CustomerId");
                
                $this->db->select("Customer.*,DATE_FORMAT(Customer.TANGGAL_LAHIR,'%d-%m-%Y') as tgl_lahir",FALSE);
                
                
                $this->db->where("Customer.CustomerId",$id);
               
                
                
                $query = $this->db->get();
                // is admin
                
                // is principal
                
		
		return $query->row();
            }
        }
        
        public function getCustomerHistory($custid = FALSE,$marketingid)
        {
            if(!$custid)
            {
                return false;
            }
            else
            {
                //$this->db->from("history_pencarian");
                //$this->db->join("DaftarCustomerMarketing","history_pencarian.CustomerId = DaftarCustomerMarketing.CustomerId",'inner');
                
                //$this->db->select("DATE_FORMAT(history_pencarian.tanggal,'%D-%M-%Y') as TANGGAL,
                //    concatenate(history_pencarian.harga_awal,'-',history_pencarian.harga_akhir) as RANGE,
                //    history_pencarian.LUAS_TANAH as LUAST,
                //    history_pencarian.LUAS_BANGUNAN as LUASB,
                //    history_pencarian.KAMAR_TIDUR as JMLKT");
                //$this->db->where("history_pencarian.CustomerId",$custid);
                //$this->db->where("DaftarCustomerMarketing.MarketingId",$marketingid);
                $query = $this->db->query("SELECT DATE_FORMAT(history_pencarian.tanggal, '%d-%m-%Y') as TANGGAL, 
                        concat(history_pencarian.harga_awal, '-', `history_pencarian`.`harga_akhir`) as range_harga, 
                        `history_pencarian`.`LUAS_TANAH` as LUAST, 
                        `history_pencarian`.`LUAS_BANGUNAN` as LUASB, 
                        `history_pencarian`.`KAMAR_TIDUR` as JMLKT,
                        history_pencarian.KOTAID as KOTA,
                        history_pencarian.AREAID as AREA,
                        history_pencarian.TIPEPROPID as TIPEPROP,
                        history_pencarian.HISTORYID,
                        '2 match' as matches
                        FROM (`history_pencarian`) 
                        INNER JOIN `DaftarCustomerMarketing` ON `history_pencarian`.`CustomerId` = `DaftarCustomerMarketing`.`CustomerId` 
                        WHERE `history_pencarian`.`CustomerId` = $custid AND `DaftarCustomerMarketing`.`MarketingId` = $marketingid");
                
                
                return $query->result();
            }
        }
        
        public function addCustomerHistory($data = FALSE)
        {
            if(!$data)
            {
                return false;
            }
            else
            {
                $this->db->insert('history_pencarian', $data);
                return $this->db->insert_id();
            }
        }
}

?>
