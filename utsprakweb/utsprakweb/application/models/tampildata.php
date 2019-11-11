<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tampildata extends CI_Model{
	public function getdata(){
		return $this->db->get('pulsa')->result();
	}
	public function ambilData(){
		return $this->db->query('select * from pulsa');
	}
}