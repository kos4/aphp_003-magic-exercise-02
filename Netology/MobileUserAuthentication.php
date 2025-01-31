<?php
namespace Netology;

trait MobileUserAuthentication
{
  protected string $mobileLogin = 'mobileLogin';
  protected string $mobilePassword = 'mobilePassword';

  public function authenticate(string $login, string $password): null|string|bool
  {
    $result = null;

    if ($login === $this->mobileLogin && $password === $this->mobilePassword) {
      $result = 'Вы успешно авторизовались как пользователь мобильного приложения';
    } else {
      $result = false;
    }

    return $result;
  }
}
