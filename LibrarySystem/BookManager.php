<?php

class BookManager {

    private array $bookList = [];

    public function addBook(Book $book): void
    {
        $this->bookList[] = $book;
    }

    public function removeBook(string $removeBookName): void
    {
        $index = array_search($removeBookName, $this->bookList);
        if ($index !== false) {
            unset($this->bookList[$index]);
        }
        $this->bookList = array_values($this->bookList);
    }

    public function getBookList(): array
    {
        return $this->bookList;
    }

    public function getMostExpensiveBook(): void
    {
        $expensiveBook = null;

        foreach ($this->bookList as $book) {
            if ($expensiveBook === null || $book->getPrice() > $expensiveBook->getPrice()) {
                $expensiveBook = $book;
            }
        }

        if ($expensiveBook !== null) {
            echo "The most expensive book is " . $expensiveBook->getName() . "\n";
            echo "The price is $" . $expensiveBook->getPrice() . "\n";
        } else {
            echo "No books available.\n";
        }
    }

    public function getCheapestBook(): void
    {
        $cheapestBook = null;

        foreach ($this->bookList as $book) {
            if ($cheapestBook === null || $book->getPrice() < $cheapestBook->getPrice()) {
                $cheapestBook = $book;
            }
        }

        if ($cheapestBook !== null) {
            echo "The cheapest book is " . $cheapestBook->getName() . "\n";
            echo "The price is $" . $cheapestBook->getPrice() . "\n";
        } else {
            echo "No books available.\n";
        }
    }

}