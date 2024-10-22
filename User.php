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
        return password_verify($password, $this->password);
    }

    public function changePasswordToHash(string $passwordHash): void
    {
        $this->password = password_hash($passwordHash, PASSWORD_DEFAULT);
    }

}