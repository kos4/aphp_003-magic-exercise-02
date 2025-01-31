<?php

namespace Netology;

class Authentication
{
  use AppUserAuthentication, MobileUserAuthentication {
    AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
    MobileUserAuthentication::authenticate as authenticateMobile;
  }
  public function login(string $username, string $password): string
  {
    $result = $this->authenticate($username, $password);

    if (!$result) {
      $result = $this->authenticateMobile($username, $password);
    }

    if (!$result) {
      $result = 'Неверный логин или пароль!';
    }

    return $result;
  }
}