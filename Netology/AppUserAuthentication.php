<?php
namespace Netology;

trait AppUserAuthentication
{
  protected string $appLogin = 'appLogin';
  protected string $appPassword = 'appPassword';

  public function authenticate(string $login, string $password): null|string|bool
  {
    $result = null;

    if ($login === $this->appLogin && $password === $this->appPassword) {
      $result = 'Вы успешно авторизовались как пользователь приложения';
    } else {
      $result = false;
    }

    return $result;
  }
}