<?php

 class Book {


    private $author;
    private $title;


    function __construct($title_in, $author_in) {
      $this->author = $author_in;
      $this->title  = $title_in;
    }


    function getAuthor() {return $this->author;}


    function getTitle() {return $this->title;}


    function getAuthorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }


  }
   class BookTitleDecorator {
	
    protected $book;
	protected $title;
	
    public function __construct(Book $book_in) {
	  $this->book = $book_in;
      $this->resetTitle();
    }
	
    //doing this so original object is not altered
	function resetTitle() {
	  $this->title = $this->book->getTitle();
	}


    function showTitle() {
	  return $this->title;
	}


  }
  class BookTitleExclaimDecorator extends BookTitleDecorator {
	
	   private $btd;


    public function __construct(BookTitleDecorator $btd_in) {
	     $this->btd = $btd_in;
    }


    function exclaimTitle() {
	     $this->btd->title = "!" . $this->btd->title . "!";
	   }


  }
  class BookTitleStarDecorator extends BookTitleDecorator {
	
	private $btd;


    public function __construct(BookTitleDecorator $btd_in) {
	  $this->btd = $btd_in;
    }


    function starTitle() {
	  $this->btd->title = Str_replace(" ","*",$this->btd->title);
	}


  }
  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");


  echo "BEGIN TESTING DECORATOR PATTERN";
  echo tagins("br").tagins("br");


  $patternBook = 
    new Book("Gayyyy, Helm, Johnson, and Vlissides",
	            "Dildo patterns");
				
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
  
  echo "showing title : "
    .tagins("br");
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after two exclaims added : "
    .tagins("br");
  $exclaimDecorator->exclaimTitle();
  $exclaimDecorator->exclaimTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after star added : "
    .tagins("br");
  $starDecorator->starTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after reset: "
    .tagins("br");
  echo $decorator->resetTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");


  echo tagins("br");
  echo "END TESTING DECORATOR PATTERN";
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>