<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SexoModel extends CI_Model{
	public function getAllSexo(){
		$this -> db -> from('TbSexo');
		$this -> db -> order_by('idSexo');
		return $this -> db -> get();
	}
}
