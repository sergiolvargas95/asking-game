<?php
include_once("playAgain.php");
include_once("includes/classes/Db.php");

session_start();

$objCon = new Db();
$user = $_SESSION['user'];
$points = $_SESSION['puntaje'];
$sql = "INSERT INTO `points` (`id`, `name`, `points`) VALUES (NULL, '$user', '$points');";
$objCon -> execute($sql);

session_destroy();

?>


<p><?php echo $_SESSION['user'].", Tu puntaje es ".$_SESSION['puntaje'];?></p>
</body>
</html>