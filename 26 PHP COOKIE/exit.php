<?php

// удаляем куки
setcookie('firstName', '', time() - 60 * 60);
setcookie('lastName', '', time() - 60 * 60);

// перенаправляем
header('Location: /');