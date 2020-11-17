<?php

class Models extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function fetch_home()
    {
    	$sql = 'SELECT id,company_name,rating,restaurant_img,about,cusine,address FROM vendor';
    	$query=$this->db->query($sql);
        if($query->num_rows()>0)
        {
            $result=$query->result_array();
        }
        else
        {
            $result=array();
        }
    	return $result;
    }

    function restaurant($id)
    {
    	$sql1 = 'SELECT * from product where prod_vendor_id=?';
    	$query1=$this->db->query($sql1,$id);
        $sql2='SELECT id,company_name,email,rating,restaurant_img,about from vendor where id=?';
        $query2=$this->db->query($sql2,$id);
        $data=array('product_data'=>$query1->result_array(),
                    'restaurant'=>$query2->result_array()
                    );
    	return $data;
    }


    function signup($email,$passwd,$type,$name,$contact,$address)
    {
        if($type=='R')
        {
            $sql='SELECT email from vendor where email=?';
            $query=$this->db->query($sql,$email);
            if($query->num_rows()==0)
            {
                $sqli='INSERT INTO vendor(name,company_name,email,password,rating,restaurant_img,about,address,contact,doj) VALUES(?,?,?,?,"3",?,?,?,?,?)';
                $query=$this->db->query($sqli,array($name,$name,$email,$passwd,"0.jpg","New Foodshala Partner",$address,$contact,date("Y-m-d h:i:s")));
                if($query)
                {
                    $data=array('status'=>'200');
                }
            }
            else
            {
                $data=array('status'=>'403');
            }
        }
        else if($type=='U')
        {
            $sql='SELECT email from customer where email=?';
            $query=$this->db->query($sql,$email);
            if($query->num_rows()==0)
            {
                $sqli='INSERT INTO customer(name,email,password,address,contact,doj) VALUES(?,?,?,?,?,?)';
                $query=$this->db->query($sqli,array($name,$email,$passwd,$address,$contact,date("Y-m-d h:i:s")));
                if($query)
                {
                    $data=array('status'=>'200');
                }
            }
            else
            {
                $data=array('status'=>'403');
            }
        }
        else
        {
            $data=array('status'=>'401');
        }
        return $data;
    }


    function update_restaurant($restraunt_name,$description,$cusine,$contact,$address,$email)
    {
        $sql='UPDATE vendor SET company_name=?, about=?, cusine=?,address=?, contact=? where email=?';
        $query=$this->db->query($sql,array($restraunt_name,$description,$cusine,$address,$contact,$email));
        if($query)
        {
            $data=array('status'=>'200');
        }
        else
        {
            $data=array('status'=>'401');
        }
        return $data;
    }

    function add_item($id,$name,$description,$price,$type)
    {
        $sql='INSERT INTO product(prod_name,prod_vendor_id,prod_type,prod_price,prod_image,prod_description,prod_rating) VALUES(?,?,?,?,?,?,?)';
        $query=$this->db->query($sql,array($name,$id,$type,$price,'5_5.webp',$description,'3'));

        if($query)
        {
            $data=array('status'=>'200');
        }
        else
        {
            $data=array('status'=>'401');
        }
        return $data;
    }

    function remove_item($id)
    {
        $sql='DELETE FROM product WHERE prod_id=?';
        $query=$this->db->query($sql,$id);
        if($query)
        {
            $data=array('status'=>'200');
        }
        else
        {
            $data=array('status'=>'401');
        }
        return $data;
    }

    function order_item($prod_id,$rest_id,$cust_id,$quantity)
    {
        $sql='INSERT INTO orders(order_prod_id,order_cust_id,order_vendor_id,order_quantity,order_status,order_date) VALUES(?,?,?,?,?,?)';
        $query=$this->db->query($sql,array($prod_id,$cust_id,$rest_id,$quantity,'PENDING',date("Y-m-d")));

        if($query)
        {
            $data=array('status'=>'200');
        }
        else
        {
            $data=array('status'=>'401');
        }
        return $data;
    }

    function orders($id,$type)
    {
        if($type=='U')
        {
            $sql='SELECT o.order_id,p.prod_name, c.address,c.name,o.order_status FROM orders o 
                    JOIN customer c ON o.order_cust_id=c.id 
                    JOIN product p ON o.order_prod_id=p.prod_id 
                    WHERE o.order_cust_id=? ORDER BY order_status asc,order_date asc';
        }
        else
        {
            $sql='SELECT o.order_id,p.prod_name, c.address,c.name,o.order_status FROM orders o 
                    JOIN customer c ON o.order_cust_id=c.id 
                    JOIN product p ON o.order_prod_id=p.prod_id 
                    WHERE o.order_vendor_id=? ORDER BY order_status,order_date';
        }
        $query=$this->db->query($sql,$id);
        $result=$query->result_array();
        
        if($query->num_rows()>0)
        {
            $data=array('status'=>'200',
                'data'=>$result
            );
        }
        else
        {
            $data=array('status'=>'401',
                'data'=>array());
        }
        return $data;
    }

    function delivered($order_id)
    {
        $sql='UPDATE orders SET order_status=1 WHERE order_id=?';
        $query=$this->db->query($sql,$order_id);
        log_message('debug',print_r($order_id,TRUE));
    }

}




















