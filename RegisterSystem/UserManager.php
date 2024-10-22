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

    public function getUserByEmail(string $email): ?User
    {
        foreach ($this->userList as $user) {
            if ($user->getEmail() == $email) {
                return $user;
            }
            return null;
        }
    }
}