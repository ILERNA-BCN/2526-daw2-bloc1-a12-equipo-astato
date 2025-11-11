<?php session_start();
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';


if ($username === '' || $password === '') {
  $_SESSION['messageLogin'] = ['errorMessage' => 'Por favor, complete todos los campos.'];
  header('Location: ../singUp.php');
  exit();
}

if (strlen($password) < 8) {
  $_SESSION['messageLogin'] = ['errorMessage' => 'la contraseña debe tener al menos 8 caracteres.'];
  header('Location: ../singUp.php');
  exit();
}

$usersFile = __DIR__ . '/../data/usuarios.txt';

if (!file_exists($usersFile)) {
  $myfile = fopen($usersFile, "w") or die("Unable to open file!");
  fclose($myfile);
} else {
  $myfile = fopen($usersFile, "r") or die("Unable to open file!");

  while (!feof($myfile)) {
    $line = trim(fgets($myfile));
    $user = explode(";", $line);

    if ($user[0] === $username) {
      $_SESSION['messageLogin'] = ['errorMessage' => "El nombre de usuario $username ya existe. Por favor, elija otro."];
      fclose($myfile);
      header('Location: ../singUp.php');
      exit();
    }
  }
}


fclose($myfile);

$hashedPassword = md5($password);
$myfile = fopen($usersFile, "a") or die("Unable to open file!");
fwrite($myfile, $username . ';' . $hashedPassword . "\n");
fclose($myfile);

$_SESSION['messageLogin'] = ['successMessage' => 'Registro exitoso. Ahora puede iniciar sesión.'];
header('Location: ../login.php');
exit();
