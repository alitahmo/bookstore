<?php
class Kryar{
	public $kryarid;
    public $kryarname;
    public $kryarphone;
    public $kryaremail;

	public static function get_all_kryar(){
		return self::sqlKryarQuery("SELECT * FROM kryar ");
	}
	
	public static function sqlKryarQuery($sqlcode){
		global $db_config;
		$result = $db_config->sqlQueryConfig($sqlcode);
		// to return result as an array 
		$all_kryar_in_db = array();
		while ($row = mysqli_fetch_array($result)){
			$all_kryar_in_db[] = self::allKryarClassProperies($row);
		}
		return $all_kryar_in_db;
	}
	
	public static function allKryarClassProperies($kryarColumns){
		$kryarClass = new self; //this variable, it include this function
		foreach($kryarColumns as $kryarProperties => $columnValue){
			if ($kryarClass->has_that_properties($kryarProperties)){
				$kryarClass->$kryarProperties = $columnValue;
			}
		}
		return $kryarClass;
	}
	private function has_that_properties($kryarProperties){
		// to get all oject properties like $id, $username, ..... so even in future if you add another properties it will get it automatically
		$kryarClassProperty = get_object_vars($this);
		// to get value as a boolean true:false value use 
		return array_key_exists($kryarProperties, $kryarClassProperty); // check is there any property ($kryarProperties) are available inside $kryarClassProperty or not
		
	}
    static function get_kryar_by_id($id){
		return self::sqlKryarQuery("SELECT * FROM `kryar` WHERE id = '$id' ");
	}
}
// create an object to call and use the class if you need.
$kryars = new Kryar();
?>
