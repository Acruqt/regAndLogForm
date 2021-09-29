<?php
setcookie('userlog', $user['mail'], time() -  3600, '/');
header('location: index.php');