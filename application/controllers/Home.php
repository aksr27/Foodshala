<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Models');
		$query=$this->Models->fetch_home();
		if($query->num_rows()>0)
		{
			$data=$query->result_array();
			$data['data']=json_encode($data);
			$this->load->view('homepage',$data);
		}
		
	}

	public function restaurant($id)
	{
		$this->load->model('Models');
		$data=$this->Models->restaurant($id);
		$data['data']=json_encode($data);
		$this->load->view('restaurant',$data);
	}

	// public function orders()
	// {
	// 	$this->load->model('Models');
	// 	$data=$this->Models->order($id);
	// 	$data['data']=json_encode($data);
	// 	$this->load->view('orders');
	// }
}
