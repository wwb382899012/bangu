<?php
/**
 *
 * @copyright	深圳海外国际旅行社有限公司
 * @version		1.0
 * @since		2015年3月16日18:00:11
 * @author		徐鹏
 *
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Month_account_model extends MY_Model {

	/**
	 * 定义表字段集合（全部），主键字段不包含在内。
	 *
	 * @var String
	 */	
	private $table_name = 'u_month_account';
	
	public function __construct() {
		parent::__construct($this->table_name);
	}
}