<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */

class Tentang extends CI_Controller

{
	public function index(){
	$data = array
		(
			'title'=>'Tentang Toko',
			
			'isi'=>'v_tentang',
		);
		$this->load->view('layout/v_wrapper_frontend',$data,FALSE);
	}
}