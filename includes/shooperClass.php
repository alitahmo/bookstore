<?php
class Shopper{
	public $shopperid;
    public $shoppername;
    public $shopperphone;
    public $shopperemail;

	public static function get_all_shopper(){
		return self::sqlShopQuery("SELECT * FROM shoppers ");
	}
	
	public static function sqlShopQuery($sqlcode){
		global $db_config;
		$result = $db_config->sqlQueryConfig($sqlcode);
		// to return result as an array 
		$all_shopper_in_db = array();
		while ($row = mysqli_fetch_array($result)){
			$all_shopper_in_db[] = self::allshopperClassProperies($row);
		}
		return $all_shopper_in_db;
	}
	
	public static function allshopperClassProperies($shopperColumns){
		$shopperClass = new self; //this variable, it include this function
		foreach($shopperColumns as $shopperProperties => $columnValue){
			if ($shopperClass->has_that_properties($shopperProperties)){
				$shopperClass->$shopperProperties = $columnValue;
			}
		}
		return $shopperClass;
	}
	private function has_that_properties($shopperProperties){
		// to get all oject properties like $id, $username, ..... so even in future if you add another properties it will get it automatically
		$shopperClassProperty = get_object_vars($this);
		// to get value as a boolean true:false value use 
		return array_key_exists($shopperProperties, $shopperClassProperty); // check is there any property ($shopperProperties) are available inside $shopperClassProperty or not
		
	}
    static function get_shopper_by_id($id){
		return self::sqlShopQuery("SELECT * FROM `shoppers` WHERE id = '$id' ");
	}
}
// create an object to call and use the class if you need.
$shoppers = new Shopper();
?>
