<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header ("location: login.php");
    exit;
}

echo "bem-vindo, " . $_SESSION["usuario"] . "! está é a página de dashboard.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TELA DE DASHBOARD </title>
</head>
<body>
 <a href="logout.php">Sair</a>

</body>
</html>