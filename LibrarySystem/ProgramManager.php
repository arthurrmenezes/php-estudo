<?php

require __DIR__ . "/Book.php";
require __DIR__ . "/BookManager.php";

$globalBookManager = new BookManager();

class programManager {

    private bool $runProgram = true;

    public function run(): void
    {
        global $globalBookManager;

        while ($this->runProgram) {
            
            $this->programFunctions();
            $option = fgets(STDIN);

            switch (trim($option)) {
                case 1:
                    echo "\nBook's name: ";
                    $bookName = trim(fgets(STDIN));
                    echo "Book's price: ";
                    $bookPrice = (float) trim(fgets(STDIN));

                    $book = new Book($bookName, $bookPrice);
                    $globalBookManager->addBook($book);
                    break;
                case 2:
                    foreach ($globalBookManager->getBookList() as $books) {
                        var_dump($books);
                    }
                    break;
                case 3:
                    echo "Book's Name what gonna be removed: ";
                    $bookName = trim(fgets(STDIN));
                    $globalBookManager->removeBook($bookName);
                    break;
                case 4:
                    $globalBookManager->getMostExpensiveBook();
                    break;
                case 5:
                    $globalBookManager->getCheapestBook();
                    break;
                case 6:
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
        echo "3. Remove Book" . "\n";
        echo "4. Get Most Expensive Book" . "\n";
        echo "5. Get Cheapest Book" . "\n";
        echo "6. Exit Program" . "\n";
        echo "Option: ";
    }
    
}
