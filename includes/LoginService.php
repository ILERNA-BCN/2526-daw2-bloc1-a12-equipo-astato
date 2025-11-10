<?php session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$messageLogin = [
  'errorMessage' => "",
  'successMessage' => ""

];

$usersFile = __DIR__ . '/../data/usuarios.txt';

if ($username === '' && $password === '') {
  $messageLogin['errorMessage'] = "Por favor, introduce tu usuario y contraseña.";
  $_SESSION['messageLogin'] = $messageLogin;
  header('Location: ../login.php');
  exit();
}

if (!file_exists($usersFile)) {
  $messageLogin['errorMessage'] = "Usuario Incorrecto.";
  $_SESSION['messageLogin'] = $messageLogin;
  header('Location: ../login.php');
  exit();
}

$myFile = fopen($usersFile, 'r') or die("Unable to open file!");

while (!feof($myFile)) {

  $line = trim(fgets($myFile));

  $user = explode(';', $line);

  if ($user[0] !== $username) {
    $messageLogin['errorMessage'] = "Usuario Incorrecto.";
    continue;
  }

  if (md5($password) !== $user[1]) {
    $messageLogin['errorMessage'] = "Contraseña Incorrecta.";
    $_SESSION['messageLogin'] = $messageLogin;
    header('Location: ../login.php');
    exit();
  } else {
    $messageLogin['successMessage'] = "Login Correcto. ¡Bienvenido " . $user[0] . "!";
    $_SESSION['messageLogin'] = $messageLogin;
    header('Location: ../login.php');
    exit();
  }
}

fclose($myFile);

$_SESSION['messageLogin'] = $messageLogin;
header('Location: ../login.php');
exit();
