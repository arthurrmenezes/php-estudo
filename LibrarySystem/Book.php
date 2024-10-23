<?php

class Book {

    private BookManager $bookManager;

    public function __construct(
        public readonly string $name,
        private float $price
    ) {
        $bookManager = new BookManager();
        $bookManager->addBook($this);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}