<?php
class Book{
	public $bookid;
    public $bookname;
    public $kryarprice;
    public $shopperprice;

	public static function get_all_book(){
		return self::sqlShopQuery("SELECT * FROM books ");
	}
	
	public static function sqlShopQuery($sqlcode){
		global $db_config;
		$result = $db_config->sqlQueryConfig($sqlcode);
		// to return result as an array 
		$all_book_in_db = array();
		while ($row = mysqli_fetch_array($result)){
			$all_book_in_db[] = self::allbookClassProperies($row);
		}
		return $all_book_in_db;
	}
	
	public static function allbookClassProperies($bookColumns){
		$bookClass = new self; //this variable, it include this function
		foreach($bookColumns as $bookProperties => $columnValue){
			if ($bookClass->has_that_properties($bookProperties)){
				$bookClass->$bookProperties = $columnValue;
			}
		}
		return $bookClass;
	}
	private function has_that_properties($bookProperties){
		// to get all oject properties like $id, $username, ..... so even in future if you add another properties it will get it automatically
		$bookClassProperty = get_object_vars($this);
		// to get value as a boolean true:false value use 
		return array_key_exists($bookProperties, $bookClassProperty); // check is there any property ($bookProperties) are available inside $bookClassProperty or not
		
	}
    static function get_book_by_id($id){
		return self::sqlShopQuery("SELECT * FROM `books` WHERE id = '$id' ");
	}
}
// create an object to call and use the class if you need.
$books = new Book();
?>
