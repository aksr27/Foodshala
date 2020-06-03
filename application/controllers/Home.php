<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Models');
		$result=$this->Models->fetch_home();
		$data['data']=json_encode($result);
		$this->load->view('homepage',$data);
	}

	public function restaurant($id)
	{
		$this->load->model('Models');
		$data=$this->Models->restaurant($id);
		$data['data']=json_encode($data);
		$this->load->view('restaurant',$data);
	}

	public function login()
	{
		$data=$this->input->post('data');
		$email=$data['email'];
		$passwd=$data['passwd'];
		$type=$data['type'];
		$this->load->model('Models');
		$result=$this->Models->login($email,$passwd,$type);
		log_message('debug',print_r($data,TRUE));
		log_message('debug',print_r($result,TRUE));

		if($result['status']=='200')
		{
			$session_data=array('email'=>$email,'name'=>$result['data']['name'],'logged_in'=>'true','id'=>$result['data']['id'],'user_type'=>$type);
			$data=array('status'=>'200','user_type'=>$type,'name'=>$result['data']['name'], 'url'=>'');
			if($type=='R')
			{
				$data['url']=base_url().'home/restaurant/'.$result['data']['id'];
			}

			$this->session->set_userdata($session_data);
		}
		else
		{
			$data=$result;
		}
		echo json_encode($data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$data=array('status'=>'200');
		echo json_encode($data);
	}

	public function signup()
	{
		$data=$this->input->post('data');
		$email=$data['email'];
		$passwd=$data['passwd'];
		$type=$data['type'];
		$name=$data['name'];
		$contact=$data['contact'];
		$address=$data['address'];
		$this->load->model('Models');
		$result=$this->Models->signup($email,$passwd,$type,$name,$contact,$address);

		echo json_encode($result);
	}

	public function update_restaurant()
	{
		$data=$this->input->post('data');
		$restraunt_name=$data['restraunt_name'];
		$description=$data['description'];
		$cusine=$data['cusine'];
		$contact=$data['contact'];
		$address=$data['address'];
		$email=$data['email'];
		$this->load->model('Models');
		$result=$this->Models->update_restaurant($restraunt_name,$description,$cusine,$contact,$address,$email);
		log_message('debug',print_r($data,TRUE));
		echo json_encode($result);
	}

	public function add_item()
	{
		$data=$this->input->post('data');
		$id=$data['id'];
		$name=$data['name'];
		$description=$data['description'];
		$price=$data['price'];
		$type=$data['type'];
		$this->load->model('Models');
		$result=$this->Models->add_item($id,$name,$description,$price,$type);
		echo json_encode($result);
	}

	public function remove_item()
	{
		$data=$this->input->post('data');
		$id=$data['id'];
		$this->load->model('Models');
		$result=$this->Models->remove_item($id);
		echo json_encode($result);
	}

	public function order_item()
	{
		$data=$this->input->post('data');
		$prod_id=$data['prod_id'];
		$rest_id=$data['rest_id'];
		$cust_id=$data['cust_id'];
		$quantity=$data['quantity'];
		$this->load->model('Models');
		$result=$this->Models->order_item($prod_id,$rest_id,$cust_id,$quantity);
		echo json_encode($result);
	}

	public function orders($id)
	{
		$user_type=$this->session->userdata('user_type');
		$this->load->model('Models');
		$data=$this->Models->orders($id,$user_type);
		$data['data']=json_encode($data);
		$this->load->view('orders',$data);
	}

	public function delivered()
	{
		$data=$this->input->post('data');
		$order_id=$data['order_id'];
        log_message('debug',print_r($order_id,TRUE));
        $this->load->model('Models');
		$data=$this->Models->delivered($order_id);
	}
}