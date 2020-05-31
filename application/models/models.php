<?php

class Models extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function fetch_home()
    {
    	$sql = 'SELECT vendor_id,company_name,rating,restaurant_img,about,cusine,vendor_address FROM vendor';
    	$query=$this->db->query($sql);
    	return $query;
    }

    function restaurant($id)
    {
    	$sql1 = 'SELECT * from product where prod_vendor_id=?';
    	$query1=$this->db->query($sql1,$id);
        $sql2='SELECT restaurant_img,company_name,rating,about from vendor where vendor_id=?';
        $query2=$this->db->query($sql2,$id);
        if($query1->num_rows()>0)
        {
            $data=array('data'=>$query1->result_array(),
                        'img'=>$query2->result_array()
                        );
        }
    	return $data;
    }

    function cust_order()
    {

    }

    function vendor_order()
    {

    }
}




















