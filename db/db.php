<?php
/**
 * Database Connection Class
 */
class Database
{
	private $host=DBHOST;
	private $user=DBUSER;
	private $pass=DBPASS;
	private $db_name=DBNAME;
	public $error;
	public $conn;
	function __construct()
	{
		$this->Connection();
	}
	private function Connection(){
		$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->db_name);
		if(!$this->conn){
			$this->error="Connection Faield".$this->conn->connect_error;
			return false;
		}
	}
	//select 
	public function select($query){
		$result=$this->conn->query($query) or die($this->conn->error.__LINE__);
		if($result->num_rows >0){
			return $result;
		}else{
			return false;
		}
	}
	//insert
	public function insert($query){
		$insert_row=$this->conn->query($query) or die($this->conn->error.__LINE__);
		if($insert_row){
			return $insert_row;
		}else{
			return false;
		}
	}

	//insert
	public function insert_multi($query){
		$insert_row=$this->conn->multi_query($query) or die($this->conn->error.__LINE__);
		if($insert_row){
			return $insert_row;
		}else{
			return false;
		}
	}
	//Update
	public function update($query){
		$update_row=$this->conn->query($query) or die($this->conn->error.__LINE__);
		if($update_row){
			return $update_row;
		}else{
			return false;
		}
	}
	//Update multiquery
	public function update_multi($query){
		$update_row=$this->conn->multi_query($query) or die($this->conn->error.__LINE__);
		if($update_row){
			return $update_row;
		}else{
			return false;
		}
	}

	//delete
	public function delete($query){
		$delete_row=$this->conn->query($query) or die($this->conn->error.__LINE__);
		if($delete_row){
			return $delete_row;
		}else{
			return false;
		}
	}
}