<?php
require '../vendor/autoload.php';
session_start();
use App\Crud\Crud;
$auth = new Crud();
if (!$auth->isAuth()) {
  $role = $auth->getRole();
  echo $role;
  switch ($role) {
    case 'admin':
        header('location: http://localhost/BrifYoucode_Dev.toBloggingPlateform/public/index.php');
        break;
    case 'author':
        header('Location: http://localhost/BrifYoucode_Dev.toBloggingPlateform/public/author.php');
        break;
    case 'user':
        header('Location: http://localhost/BrifYoucode_Dev.toBloggingPlateform/public/home.php');
        break;
    default:
        header('Location: http://localhost/BrifYoucode_Dev.toBloggingPlateform/public/login.php');
        break;
}

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
  $auth->logout();
  header('Location: http://localhost/BrifYoucode_Dev.toBloggingPlateform/public/login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>welcom author</h1>
  <form action="index.php" method="POST">

                    <input type="submit" name='logout'  value="Logout">
              </form>
</body>
</html>