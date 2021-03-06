<?php
/**
 * @copyright	深圳海外国际旅行社有限公司
 * @version		1.0
 * @since		2017-02-17
 * @author		zhangyunfa
 */
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Cfgm_social_plate_graph_model extends MY_Model
{
	private $table_name = 'cfgm_social_roll_pic';
	public function __construct()
	{
		parent::__construct ($this->table_name );
	}
	/**
	 * @method 获取手机端轮播图数据
	 * @author zhangyunfa
	 * @since 2017-02-17
	 * @param unknown $whereArr
	 */
	public function getRollPicData(array $whereArr=array())
	{
		$sql = 'select * from cfgm_social_roll_pic where type=2';
		return $this ->getCommonData($sql ,$whereArr ,'id desc');
	}
}