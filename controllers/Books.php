<?php
namespace Controller;
use Model\Books as ModelBooks;

class Books
{
        private $booksModel = null;

        public function __construct()
        {
            $this->booksModel = new ModelBooks();
        }

    function index(){
        die('Hello,there');
    }
}