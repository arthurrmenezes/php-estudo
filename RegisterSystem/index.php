<?php

require __DIR__ . "/UserManager.php";
require __DIR__ . "/User.php";

$userManager = new UserManager();

$runProgram = true;

do {
    echo "1 - CRIAR CONTA" . "\n";
    echo "2 - LOGIN" . "\n";
    echo "3 - FIM" . "\n";
    echo "OPCAO: ";
    $option = fgets(STDIN);

    switch ($option) {
        case 1:
            echo "NAME: ";
            $name = fgets(STDIN);
            echo "EMAIL: ";
            $email = fgets(STDIN);
            echo "PASSWORD: ";
            $password = fgets(STDIN);
            $user = new User($name, $email, $password);
            $userManager->addUser($user);
            break;
        case 2:
            echo "EMAIL: ";
            $email = fgets(STDIN);
            echo "PASSWORD: ";
            $password = fgets(STDIN);
            if ($user->getEmail() == $email && $user->verifyPassword($password)) {
                echo "LOGADO COM SUCESSO!!!";
                echo $user->getName() . "\n";
            } else {
                echo "ERRO";
            }
            break;
        case 3:
            echo "ENDING PROGRAM...";
            $runProgram = false;
            break;
    }

} while ($runProgram == true);
