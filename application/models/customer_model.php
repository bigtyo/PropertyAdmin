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
                $this->db->from("customer");
                $this->db->join("daftarcustomermarketing","daftarcustomermarketing.CustomerId = customer.CustomerId");
                $this->db->join("Marketing","marketing.MarketingId = daftarcustomermarketing.MarketingId");
                $this->db->join("user","marketing.MarketingId = user.MarketingId");
                $this->db->select("customer.*,DATE_FORMAT(customer.TANGGAL_LAHIR,'%d-%m-%Y') as TGL_LAHIR",false);
                
                if(empty($param['marketingid']))
                {
                    $this->db->where("user.UserId",$param['userid']);
                }else
                {
                    $this->db->where("marketing.MarketingId",$param['marketingid']);
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
            $this->db->from('customer');
            $this->db->where('email',$data['EMAIL']);
            $this->db->or_where('telepon',$data['TELEPON']);
            $this->db->stop_cache();
            $isExist = $this->db->count_all_results();
            
            if($isExist == 0)
            {
                $this->db->insert('customer',$data);
                $customer_id = $this->db->insert_id();
                
                
            }else
            {
                $this->db->select("customerId");
                $existingData = $this->db->get()->row();
                $customer_id = $existingData->CustomerId;
                
            }
            $customer_baru = array(
                    'MarketingId' => $MarketingId,
                    'CustomerId' => $customer_id
            );
            if(isset($customer_baru)){
                $this->db->flush_cache();
                $query = $this->db->get_where('daftarcustomermarketing',$customer_baru);
                if($query->num_rows() == 0)
                {
                    $this->db->insert('daftarcustomermarketing',$customer_baru);
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
                $this->db->from("customer");
                $this->db->join("daftarcustomermarketing","daftarcustomermarketing.CustomerId = customer.CustomerId");
                
                $this->db->select("customer.*,DATE_FORMAT(customer.TANGGAL_LAHIR,'%d-%m-%Y') as tgl_lahir",FALSE);
                
                
                $this->db->where("customer.CustomerId",$id);
               
                
                
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
                        INNER JOIN `daftarcustomermarketing` ON `history_pencarian`.`CustomerId` = `daftarcustomermarketing`.`CustomerId` 
                        WHERE `history_pencarian`.`CustomerId` = $custid AND `daftarcustomermarketing`.`MarketingId` = $marketingid");
                
                
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
        
        public function getCustomerMatchByListing($listingid,$marketingid)
        {
            $query = $this->db->get_where('listing',array(
                'LISTINGID' => $listingid
            ));
            $row = $query->row();
            
            $query_s = "SELECT DISTINCT c.* ,concat('Rp ',hp.HARGA_AWAL,' - ','Rp ',hp.HARGA_AKHIR) as RANGE_HARGA 
                        FROM rumahsuper.history_pencarian hp
                        join rumahsuper.customer c on c.customerid = hp.customerid ";
            
            $q_string = "";
            if($row->LUAS_TANAH != null)
            {
                $q_string .= " AND hp.LUAS_TANAH = $row->LUAS_TANAH";
            }

            if($row->LUAS_BANGUNAN != null)
            {
                $q_string .= " AND hp.LUAS_BANGUNAN = $row->LUAS_BANGUNAN";
            }

            if($row->FURNISHED != null)
            {
                $q_string .= " AND hp.FURNISHED = $row->FURNISHED";
            }

            if($row->KAMAR_TIDUR != null)
            {
                $q_string .= " AND hp.KAMAR_TIDUR = $row->KAMAR_TIDUR";
            }

            if($row->LANTAI != null)
            {
                $q_string .= " AND hp.LANTAI = $row->LANTAI";
            }

            if($row->DAYA_LISTRIK != null)
            {
                $q_string .= " AND hp.DAYA_LISTRIK = $row->DAYA_LISTRIK";
            }

            if($row->SERTIFIKAT != null)
            {
                $q_string .= " AND hp.SERTIFIKAT = '$row->SERTIFIKAT'";
            }

            if($row->KONDISI != null)
            {
                $q_string .= " AND hp.KONDISI = $row->KONDISI";
            }

            if($row->KAMAR_MANDI != null)
            {
                $q_string .= " AND hp.KAMAR_MANDI = $row->KAMAR_MANDI";
            }

            if($row->GARASI != null)
            {
                $q_string .= " AND hp.GARASI = $row->GARASI";
            }

            if($row->JALUR_TELEPON != null)
            {
                $q_string .= " AND hp.JALUR_TELEPON = $row->JALUR_TELEPON";
            }

            if($row->HARGA > 0)
            {
                $q_string .= " AND hp.HARGA_AWAL <= $row->HARGA";
            }

            if($row->HARGA > 0)
            {
                 $q_string .= " AND hp.HARGA_AKHIR >= $row->HARGA";
            }

            if($row->AREAID != NULL && $row->AREAID != 0)
            {
                 $q_string .= " AND hp.AREAID = $row->AREAID";
            }

            if($row->PROPINSIID != NULL && $row->PROPINSIID != 0)
            {
                 $q_string .= " AND hp.PROPINSIID = $row->PROPINSIID";
            }

            if($row->LOKASIID != NULL && $row->LOKASIID != 0)
            {
                 $q_string .= " AND hp.LOKASIID = $row->LOKASIID";
            }

            if($row->KOTAID != NULL && $row->KOTAID != 0)
            {
                 $q_string .= " AND hp.KOTAID = $row->KOTAID";
            }

            if($row->TIPEPROPID != NULL && $row->TIPEPROPID != 0)
            {
                 $q_string .= " AND hp.TIPEPROPID = $row->TIPEPROPID";
            }
            
            $query_s .= "WHERE hp.MARKETINGID = $marketingid"." ".$q_string;
            
            $query = $this->db->query($query_s);
            
            return $query->result();
        }
}

?>
