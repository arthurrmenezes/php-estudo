<?php

require __DIR__ . "/Book.php";
require __DIR__ . "/BookManager.php";

class programManager {

    private bool $runProgram = true;
    private Book $book;
    private BookManager $bookManager;

    public function run(): void
    {
        while ($this->runProgram) {
            
            $this->programFunctions();
            $option = fgets(STDIN);

            switch ($option) {
                case 1:
                    echo "Book's name: ";
                    $bookName = fgets(STDIN);
                    echo "Book's price: ";
                    $bookPrice = fgets(STDIN);
                    $book = new Book($bookName, $bookPrice);
                    break;
                case 2:
                    $bookManager = new BookManager();
                    var_dump($bookManager->getBookList());
                    break;
                case 3:
                    $this->runProgram = false;
                    echo "Ending program...";
                    break;
                default:
                    echo "Error: invalid option";
                    break;
            }
        }
    }

    function programFunctions(): void
    {
        echo "\n1. Register New Book" . "\n";
        echo "2. Get Book List" . "\n";
        echo "3. Exit Program" . "\n";
        echo "Option: ";
    }
    
}
