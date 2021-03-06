<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class u_destinations_model extends MY_Model {
	
	private $table_name = 'u_dest_base';
	
	public function __construct() {
		parent::__construct ( $this->table_name );
	}
	
	public function getDistination($level){
		$query = $this->db->query ( "SELECT `id`, `kindname` AS name, `pid`, `enname`, `simplename`, `level`, `ishot`,displayorder FROM `u_dest_base` WHERE `level` <= ? ORDER BY `pid` ASC,displayorder ASC ", array ( $level ) );
		return $query->result_array();
	}
	
	public function getDestData($whereArr) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($whereArr);
		return $this->db->get()->result_array();
	}
	
	/**
	 * @method 获取自己以及其上级
	 * @param unknown $id
	 */
	public function getDestPdata($id)
	{
		$sql = 'select d.kindname,(select p.kindname from u_dest_base as p where p.id=d.pid) as pname from u_dest_base as d where d.id='.$id;
		return $this ->db ->query($sql) ->result_array();
	}
	
	/**
	 * @method 获取某条记录的上级
	 * @param unknown $destid 目的地id可以是第二级和第三级
	 */
	public function getParentDest($destid) {
		$sql = 'select d.id,d.pid,(select ud.pid from u_dest_base as ud where ud.id=d.pid) as parentid from u_dest_base as d where d.id='.$destid;
		return $this ->db->query($sql) ->result_array();
	}
	
	/**
	 * @method 通过目的地id（多个）获取目的地
	 * @param unknown $destids
	 */
	public function getDestIn($destids) {
		$destids=str_replace("undefined","0",$destids);
		$sql = 'select * from u_dest_base where id in ('.$destids.')';
		return $this ->db ->query($sql) ->result_array();
	}
	public function getDestIn1($destids) {
		$sql = 'select id,kindname as name,enname,simplename,level,ishot,pid from u_dest_base where id in ('.$destids.')';
		return $this ->db ->query($sql) ->result_array();
	}
	/**
	 * @method 通过目的地id（多个）获取目的地
	 * @param unknown $destids
	 */
	public function getDestInData($destids) {
		$sql = 'select id,kindname as name,enname,simplename,level,ishot,pid from u_dest_base where id in ('.$destids.') and level=3';
		return $this ->db ->query($sql) ->result_array();
	}
}