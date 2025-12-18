<?php

class Book {

    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year) {
        $this->title  = $title;
        $this->author = $author;
        $this->year   = $year;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getDetails() {
        $details = "Title: $this->title<br>Author: $this->author<br>Year: $this->year<br>";

        return $details;
    }
}


$book1 = new Book("Conundrum", "Anuj Dhar and Chandrachur Ghose", 2019);

echo $book1->getDetails(), "<br>";

$book1->setTitle("Harry Potter and the Philosopher's Stone");
$book1->setAuthor("J. K. Rowling");
$book1->setYear(1997);


echo $book1->getDetails();

?>