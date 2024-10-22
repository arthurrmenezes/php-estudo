<?php

class UserManager {
    
    private array $userList = [];

    public function addUser(User $user): void
    {
        $this->userList[] = $user;
    }

    public function getUserList(): array
    {
        return $this->userList;
    }

    public function getUserByEmail(string $email): void
    {
        foreach ($this->userList as $users) {
            var_dump($users);
        }
    }
}