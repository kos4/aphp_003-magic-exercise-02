<?php

namespace Netology;

class Authentication
{
  use AppUserAuthentication, MobileUserAuthentication;
  public function login(string $username, string $password): string
  {
    $result = $this->authenticateApp($username, $password);

    if (!$result) {
      $result = $this->authenticateMobile($username, $password);
    }

    if (!$result) {
      $result = 'Неверный логин или пароль!';
    }

    return $result;
  }
}