<?php
// smartCARS 0.2.0 API
// phpVMS v5 handler
// Designed to be run on PHP 5

require_once('../core/codon.config.php'); 
require_once('../core/local.config.php');

define('dbName', DBASE_NAME);
define('dbHost', DBASE_SERVER);
define('dbUsername', DBASE_USER);
define('dbPassword', DBASE_PASS);
define('dbPrefix', TABLE_PREFIX);
define('pilotOffset', PILOTID_OFFSET);
define('pilotIDLength', PILOTID_LENGTH);
define('sC3Version', 'phpVMS 5 Handler 0.2.0');
?>