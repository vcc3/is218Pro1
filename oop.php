<?php
// keep 2 classes to make  the assignment. html i sparent, every other is an element.
	class html{
       	public $html;
	public function __construct($html='Default'){
	
	echo $html;
		
		}
	}

	class htmlTable extends html{ 
	protected $table;
// html table extend sor inherits class html.	
	public function getTableHTML(){
	$this->html = ' Some HTML ';
	
	
		}
	}
// hello  is passed in to hmtl displaying hello. if nothing passed , Deafult  shows.
	
	$obj = new htmlTable;
	$html = $obj ->getTableHTML();

	echo$obj->html;













?>
