<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataToMysql($ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang)
	{
		$dulieu = array(
			'name' => $ten,
			'age' => $tuoi,
			'sdt' => $sdt,
			'avatar' => $anhavatar,
			'linkfb' => $linkfb,
			'numberorder' => $sodonhang
		);
		$this->db->insert('nhanvien', $dulieu);
		return $this->db->insert_id();
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu = $this->db->get('nhanvien');
		$dulieu = $dulieu->result_array();

		return $dulieu;
	}

	public function getDataById($key){
		$this->db->select('*');
		$this->db->where('id', $key);
		$dulieu = $this->db->get('nhanvien');
		$dulieu = $dulieu->result_array();
		return $dulieu;
		// echo '<pre>';
		// var_dump($dulieu);
	}

	public function updateById($id,$ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang){
		$data = array(
			'name' => $ten,
			'age' => $tuoi,
			'sdt' => $sdt,
			'avatar' => $anhavatar,
			'linkfb' => $linkfb,
			'numberorder' => $sodonhang
		);
		$this->db->where('id', $id);
		return $this->db->update('nhanvien', $data);
	}

	public function removeById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('nhanvien');

	}
}

/* End of file nhansu_model.php */
/* Location: ./application/models/nhansu_model.php */