<?php



class RedirectUser {                                          // класс переадресовывания на главную пользователя при отсутствии сессии
  
  public function redirectToPage() {                          // метод переадресовывания
    if(!isset($_SESSION['login'])) {                          // если нет в сессии логина пользователя
      header('location: ../dist/index.php');                  // перенаправить на главную
    }
  }
  
}