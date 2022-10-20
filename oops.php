<?php
/*	class Fruit{

	public $name;
	
	function set_name($name){
	 $this-> name = $name;
	}
}


$apple = new Fruit();


$apple->set_name('papaya'); 

print_r($apple);
*/


	class Customer{
		public $name;
		public $id;
		public $oldid;
		public $address;
		const DETAIL_MESSAGE = "this is a constant that cant be altered";
		function __construct($name,$id,$oldid,$address){
			$this->name = $name;
			$this->id = $id;
			$this->oldid = $oldid;
			$this->address = $address;
		}
		function letter(){
			return "$this->name has the id of $this->id";
		

				}
		function addid(){
			return $this->id + $this->oldid;}
		public static function letter1(){
			echo "this is a static method without creating an object we can call this method";	
		}

	}

//$customer1=new Customer('asad','9653','68666','admlf afd');
//print_r ($customer1);

//echo ($customer1->letter()).'<br>'; //to call a method.

//echo ($customer1->addid()).'<br>';


//var_dump($customer1 instanceof  Customer);//to find whether a object is a instanceof class.

//echo '<br>';
//Customer::letter1();// call a static function.

//echo Customer::DETAIL_MESSAGE;


	class Client extends Customer{
		public function _construct($name,$id,$oldid,$address,$pincode)
			{ 
			  parent :: __construct($name,$id,$oldid,$address);
				$this->pincode = $pincode;
			}	
			  
			public function pin(){
 			   return $this->pincode;}
		}


$client1 = new Client('asad','9653','68666','admlf afd','6130');


echo ($client1->addid()).'<br>';
echo ($client1->letter()).'<br>';
echo ($client1->pin());

?>