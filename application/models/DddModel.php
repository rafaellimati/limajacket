<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DddModel extends CI_Model{
	public function getAllDdd(){
		$this -> db -> from('TbDdd');
		$this -> db -> order_by('idDdd');
		return $this -> db -> get();
	}
}
