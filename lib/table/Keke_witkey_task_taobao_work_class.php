<?php
class Keke_witkey_task_taobao_work_class{
	public $_db;
	public $_tablename;
	public $_dbop;
	public $_tbwk_id;
	public $_ip;
	public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	public $_replace=0;
	public $_where;
	function  keke_witkey_task_taobao_work_class(){
	public function getTbwk_id(){
	public function getIp(){
		return $this->_ip ;
	}
	public function setTbwk_id($value){
	public function setIp($value){
		$this->_ip = $value;
	}
	public  function __set($property_name, $value) {
		$this->$property_name = $value;
	}
	public function __get($property_name) {
		if (isset ( $this->$property_name )) {
			return $this->$property_name;
		} else {
			return null;
		}
	}
	
		if(!is_null($this->_ip)){
			$data['ip']=$this->_ip;
		}
	
		if(!is_null($this->_ip)){
			$data['ip']=$this->_ip;
		}
	
	
	
}
?>