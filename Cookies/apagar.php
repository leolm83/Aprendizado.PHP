<?php
setcookie('nome','',time()-3600);//basicamente para apagar um cookie é so defini-lo com um time negativo
header("Location: index.php");
exit;