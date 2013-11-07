<?php
class lokasi_model extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }
    
    public function getLokasiList($areaid = FALSE)
    {
        if(!$areaid)
        {
            return null;
        }
        else  
        {
            $query = $this->db->get_where('lokasi',array('AREAID' => $areaid));
            
            return $query->result();
        }
    }
    
    public function getPropinsiList()
    {
        
        $query = $this->db->get('propinsi');
        
        return $query->result();
    }
    
    public function getAreaList($kotaid = FALSE)
    {
        if(!$kotaid)
        {
            return null;
        }
        else  
        {
            $query = $this->db->get_where('area',array('KOTAID' => $kotaid));
            
            return $query->result();
        }
    }
    
    public function getKotaList($propinsiid = FALSE)
    {
        if(!$propinsiid)
        {
            return null;
        }
        else  
        {
            $query = $this->db->get_where('kota',array('PROPINSIID' => $propinsiid));
            
            return $query->result();
        }
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
