<?php echo "Host ".$_SERVER['HTTP_HOST']." uri " .rtrim(dirname($_SERVER['PHP_SELF']), '/\\')." addr ".getenv("REMOTE_ADDR"). "path ".realpath(dirname(__FILE__))." ".$_SERVER['PHP_SELF']." cwd ".getcwd()." ". $_SERVER['SCRIPT_NAME']; ?>