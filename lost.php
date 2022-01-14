<?php
session_start();
session_destroy();
include_once("playAgain.php");
?>


<p><?php echo $_SESSION['user'].", Lo siento, te has equivocado."?></p>
</body>
</html>