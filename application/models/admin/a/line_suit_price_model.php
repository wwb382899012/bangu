<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Line_suit_price_model extends MY_Model {

	private $table_name = 'u_line_suit_price';
	
	/**
	 * 构造函数
	 */
	function __construct() {
		parent::__construct ( $this->table_name );
	}
}