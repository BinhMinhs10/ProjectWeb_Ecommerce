<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class transaction_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataToMysql($user_id,$money,$date){
		$data = array(
			'user_id' => $use_id,
			'money_amount' => $money,
			'create_date' => $date,
			'state' => 0
		);
		$this->db->insert('transaction', $data);
		return $this->db->insert_id();
	}

}

/* End of file transaction_model.php */
/* Location: ./application/models/transaction_model.php */