<?php 

Class Conexion
{
	static $o_con = null;
	
	static function obj(){
		if(self::$o_con ==null){
		self::$o_con = new Conexion();
		}
		return self::$o_con->instancia;
	}
	public $instancia = null;
	
	function __construct()
	{
	//	echo "Me conecte";
		$this->instancia = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	}
	function __destruct(){
		//echo "Me desconecte";
		mysqli_close($this->instancia);
	}
	
	
}