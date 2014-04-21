<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','http://v2:8888/');

//database details ONLY NEEDED IF USING A DATABASE
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','v2');
define('DB_USER','root');
define('DB_PASS','root');
define('PREFIX','dc_');

//set prefix for sessions
define('SESSION_PREFIX','dc_');

//optionall create a constant for the name of the site
define('SITETITLE','V2');

//set the default template
Session::set('template','default');
