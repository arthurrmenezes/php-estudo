<?php

class User {

    public function __construct(
        public readonly string $name,
        private string $email,
        private string $password
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function verifyPassword(string $password): bool
    {
        if ($this->password != $password) {
            return false;
        }
        return true;
    }

}