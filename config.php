<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8888/artflora/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8888/artflora/');

// DIR
define('DIR_APPLICATION', '/Applications/MAMP/htdocs/artflora/catalog/');
define('DIR_SYSTEM', '/Applications/MAMP/htdocs/artflora/system/');
define('DIR_IMAGE', '/Applications/MAMP/htdocs/artflora/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'artflora');
define('DB_PASSWORD', 'MYpass24');
define('DB_DATABASE', 'artflora');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');