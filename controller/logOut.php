<?php
setcookie('PHPSESSID', session_start(), time() - 604800, '/');                          // разлогинивание установить куки с именем PHPSESSID и занчением сессии для всего домена в прошлом
header('location: ../dist/index.php');                                                  // перебросить на index.php