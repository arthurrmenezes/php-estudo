<?php

class Book {

    public function __construct(
        public readonly string $name,
        private float $price
    ) {
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