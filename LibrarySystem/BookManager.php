<?php

class BookManager {

    private array $bookList = [];

    public function addBook(Book $book): void
    {
        $this->bookList[] = $book;
    }

    public function removeBook(Book $removeBook): void
    {
        $removeBookName = $removeBook->getName();
        $index = array_search($removeBookName, $bookList);
        if ($index !== false) {
            unset($bookList[$index]);
        }
        $bookList = array_values($bookList);
    }

    public function getBookList(): array
    {
        return $this->bookList;
    }

    public function getMostExpensiveBook(): void
    {
        foreach ($bookList as $book) {
            if ($book->getPrice() > $expensiveBook) {
                $expensiveBook = $book;
            }
        }
        echo "The most expensive book is " . $expensiveBook->getName() . "\n";
        echo "The price is $" . $expensiveBook->getPrice . "\n";
    }

    public function getCheapestBook(): void
    {
        foreach ($bookList as $book) {
            if ($book->getPrice() > $expensiveBook) {
                $expensiveBook = $book;
            }
        }
        echo "The cheapest book is " . $expensiveBook->getName() . "\n";
        echo "The price is $" . $expensiveBook->getPrice . "\n";
    }


}